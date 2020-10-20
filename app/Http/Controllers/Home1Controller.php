<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
class Home1Controller extends Controller
{
    public function index(){
        Cache::remember('article', 10, function(){
            return Article::all();

    });
        $article = Cache::get('article');
<<<<<<< HEAD
        return view('Home')->with(compact('article'));
=======
        return view('layouts.home_nafhi')->with(compact('article'));
>>>>>>> 453dc0db573ae5d26de8614db273f7f8199567d6
    }
}