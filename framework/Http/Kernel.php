<?php 

namespace Asad\Framework\Http;

use FastRoute\RouteCollector;

use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request): Response
    {
     


       $dispatcher = simpleDispatcher(function(RouteCollector $routeCollector){
            $routeCollector->addRoute('GET','/',function(){
                $content = '<h2>Hello World from Kernel</h2>';
                return new Response(content:$content);
            });
       });

       dump($dispatcher);
        //create the dispatcher
        
        // opbtain the uri info
        // call the handler, provided by the route info, and in order to create a infor
    }
}