<?php namespace Monarkee\Bumble\Blog\Http\Controllers;

use Monarkee\Bumble\Controllers\BumbleController;

class BlogController extends BumbleController
{
    public function index()
    {
        return "Hello World!";
    }
}