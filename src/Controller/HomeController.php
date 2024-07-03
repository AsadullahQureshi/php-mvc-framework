<?php

namespace App\Controller;

use Asad\Framework\Http\Response;

class HomeController{

    public function index(): Response
    {
        $content = '<h2>Hello World from Controller</h2>';
        return new Response(content:$content);
    }
    public function show(int $id): Response
    {
        // dump($id);
        $content = '<h2>Post show '.$id.'</h2>';

        return new Response($content);
    }
}
