<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('welcome',  compact('posts'));
    }



    public function site_now()
    {
        return view('siteNow');
    }

    public function stat()
    {
        return view('statia');
    }
}
