<?php 

declare(strict_types=1);

use Asad\Framework\Http\Kernel;
use Asad\Framework\Http\Request;

require_once dirname(__DIR__).'/vendor/autoload.php';
// request received
 $request = Request::createFromGlobals();


// do something wrtie logic
$kernel = new Kernel();
$response=$kernel->handle($request);
$response->send();
