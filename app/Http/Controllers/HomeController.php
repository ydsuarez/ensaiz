<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Page;

class HomeController extends Controller
{

    public function index()
    {
        $posts=Post::get();
        $post=Page::get();
        $menu_home = 'active';

        return view('home',compact('posts', 'post','menu_home'));
    }

}
