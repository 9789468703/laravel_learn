<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
        public function post()
    {
   		return view('posts.index');
	}	
	public function signup()
	{
		return view('posts.here');
	}
}
