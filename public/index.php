<?php 

declare(strict_types=1);

use Asad\Framework\Http\Kernel;
use Asad\Framework\Http\Request;

define('BASE_PATH',dirname(__DIR__));
require_once dirname(__DIR__).'/vendor/autoload.php';
// request received
// dump(dirname(__DIR__));

 $request = Request::createFromGlobals();


// do something wrtie logic
$kernel = new Kernel();
$response=$kernel->handle($request);
$response->send();
