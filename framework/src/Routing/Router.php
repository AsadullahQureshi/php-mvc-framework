<?php

namespace Asad\Framework\Routing;

use Asad\Framework\Http\HttpException;
use Asad\Framework\Http\Request;
use FastRoute\Dispatcher;
use FastRoute\Dispatcher\Result\NotMatched;
use FastRoute\RouteCollector;
use HttpRequestMethodException;

use function FastRoute\simpleDispatcher;

class Router implements RouterInterface
{
    public function dispatch(Request $request):array
    {
        $route_info = $this->extractRouteInfo($request);
        [$handler, $vars] = $route_info;

        if (is_array($handler)) {
            [$controller, $method] = $handler;
            $handler = [new $controller, $method];
        }
        
        return [$handler, $vars];
    }

    public function extractRouteInfo(Request $request):array
    {
        // Create a dispatcher
        $dispatcher = simpleDispatcher(function (RouteCollector $routeCollector) {
            $routes = include BASE_PATH . '/routes/web.php';
            // dump($routes);
            foreach ($routes as $route) {
                $routeCollector->addRoute(...$route);
            }
        });

        // Dispatch a URI, to obtain the route info
        $routeInfo = $dispatcher->dispatch(
            $request->getMethod(), 
            $request->getPathInfo()
        );

        switch ($routeInfo[0]) {
            case Dispatcher::FOUND:
                // dump('Found');
                return [$routeInfo[1], $routeInfo[2]]; // routeHandler, vars
            case Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = implode(', ', $routeInfo[1]);
                $e = new HttpRequestMethodException("The allowed methods are $allowedMethods");
                $e->setStatusCode(405);
                throw $e;

            default:
            // dump(new HttpException('sd'));
                $e = new HttpException('Not Found');
                $e->setStatusCode(404);
                // dump($e);
                throw $e;
        }        
        
    }
}
