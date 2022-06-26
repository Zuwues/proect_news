<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    public function show(){
        return view('siteNow');
    }
    public function get(){
        return view('welcome');
    }
    public function stat(){
        return view('statia');
    }
}
