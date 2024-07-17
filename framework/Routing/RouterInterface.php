<?php

namespace Asad\Framework\Routing;

use Asad\Framework\Http\Request;

interface RouterInterface{
    public function dispatch(Request $request);
}