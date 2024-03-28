<?php 

namespace Asad\Framework\Http;
class Kernel
{
    public function handle(Request $request): Response
    {
       $content = '<h2>Hello World from Kernel</h2>';
       return new Response(content:$content);
    }
}