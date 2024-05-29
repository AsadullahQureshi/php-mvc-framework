<?php 

namespace Asad\Framework\Http;

use FastRoute\RouteCollector;

use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request):Response
    {
     


       $dispatcher = simpleDispatcher(function(RouteCollector $routeCollector){
            $routeCollector->addRoute('GET','/',function(){
                $content = '<h2>Hello World from Kernel</h2>';
                return new Response(content:$content);
            });

            $routeCollector->addRoute('GET', '/posts/{id:\d+}', function($routeParams) {
                $content = "<h1>This is Post {$routeParams['id']}</h1>";

                return new Response($content);
            });

       });

         // Dispatch a URI, to obtain the route info
         $routeInfo = $dispatcher->dispatch(
            $request->server['REQUEST_METHOD'],
            $request->server['REQUEST_URI'],
        );

        [$status, $handler, $vars] = $routeInfo;

        // Call the handler, provided by the route info, in order to create a Response
        return $handler($vars);

    //    dump($dispatcher);
        //create the dispatcher
        
        // opbtain the uri info
        // call the handler, provided by the route info, and in order to create a infor
    }
}