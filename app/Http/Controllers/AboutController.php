<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class AboutController extends Controller
{
    public function index()
    {
        $posts=Post::get();
        $menu_about = 'active';

        return view('about',compact('posts', 'menu_about'));
    }
}
