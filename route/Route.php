<?php

/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 11.02.2017
 * Time: 20:42
 */

namespace route;

use page\Page;

class Route
{
    private $routers = array(0=>'/',1=>'example',3=>'error');

    public function __construct()
    {
        print $this->get($_SERVER['REQUEST_URI']);
    }



    public function get($path) {
        if(array_search($path, $this->routers) === false) {
            $path = 'error';
        }
        $page = new Page();
        return $page->createPage($path);
        //return $routers;
    }
}