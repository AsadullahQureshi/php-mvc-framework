<?php

namespace App\Controller;

use Asad\Framework\Http\Response;

class HomeController{

    public function index(): Response
    {
        $content = '<h2>Hello World from Kernel</h2>';
        return new Response(content:$content);
    }
}
