<?php 

namespace Asad\Framework\Http;

use Asad\Framework\Routing\Router;
use FastRoute\RouteCollector;
use HttpRequestMethodException;
use OutOfBoundsException;

use function FastRoute\simpleDispatcher;

class Kernel
{
    public function __construct(private Router $router)
    {
        
    }
    public function handle(Request $request):Response
    {
        try {
            [$routeHandler , $vars] = $this->router->dispatch($request);
           $response = call_user_func_array($routeHandler,$vars);

        }
         catch (HttpRequestMethodException $e) {
           $response = new Response($e->getMessage(),$e->getStatusCode()); 
        }
        catch (\Exception $e) {
            $response = new Response($e->getMessage(), 500);

        }
        return $response;

    }
}