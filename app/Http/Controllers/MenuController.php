<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class MenuController extends Controller
{
    public function index()
    {
        $posts=Page::get();
        $menu_menu = 'active';

        return view('menu',compact('posts', 'menu_menu'));
    }
}
