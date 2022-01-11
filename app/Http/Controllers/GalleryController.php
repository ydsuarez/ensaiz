<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class GalleryController extends Controller
{
    public function index()
    {
        $posts=Post::get();
        $menu_gallery = 'active';

        return view('gallery',compact('posts', 'menu_gallery'));
    }
}
