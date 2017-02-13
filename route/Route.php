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
    private $routers = array(0=>'/',1=>'example',2=>'error');

    public function __construct()
    {
        print $this->get($_SERVER['REQUEST_URI']);
    }


    public function get($path)
    {
        require_once 'page/pages.php';
        if(array_search($path, $this->routers) === false) {
            $path = 'error';
        }

        $page = new Page();
        return $page->createPage($path);
    }

    public function add($path)
    {
        $num = count($this->routers) + 1;
        $this->routers[$num] = $path;
        return $this->routers;
    }
}