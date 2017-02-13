<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.02.2017
 * Time: 15:00
 */

namespace page;


class Page
{
    public function createPage($path)
    {
        if($path == 'error') {
            $path = 'Page not found';
        }
        return $path;
    }
}