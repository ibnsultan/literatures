<?php

namespace App;

use App\Router;
use Jenssegers\Blade\Blade;

/**
 * -----------------------------------------------------------------------
 * Class MVC
 * -----------------------------------------------------------------------
 * This class is responsible for ha
 */

class MVC{

    public function __construct()
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }

    public function view($view, $data = [])
    {
        $blade = new Blade('app/Views', 'app/Cache');
        return $blade->make($view, $data);
    }

    public function render($view, $data = [])
    {
        echo $this->view($view, $data);
    }

    public function getRouter()
    {
        return new Router();
    }

}