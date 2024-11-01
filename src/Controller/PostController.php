<?php 
namespace App\Controller;

use Asad\Framework\Http\Response;

class PostController{
    public function show(int $id): Response
    {
        // dump($id);
       $content = "<h3>Post Detail:{$id} </h3>";
       return new Response($content);
    }
}