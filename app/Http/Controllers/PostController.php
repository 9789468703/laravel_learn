<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App;	
use App\Post;


class PostController extends Controller
{
	public function __construct()
	{
		
	}

        public function post()
    {
   		return view('posts.index');
	}	
	public function signup(Request $request)
	{
		$data = array('username' => $request->input('email') , 'password'=> $request->input('password') );
		DB::table('posts')->insert($data);
   		return view('posts.index');
	}
	public function showallcontroll()
	{
		// $post=new \App\post;
	
		$entireTable = App\Post::all();
	echo "<pre>";
		var_dump($entireTable);
	}
}