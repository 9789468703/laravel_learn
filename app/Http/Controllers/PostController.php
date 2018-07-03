<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
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
	public function showall()
	{
		$users = DB::table('posts')->distinct()->get();
		var_dump($users);

		// return view('posts.showall',['users'=>DB::table('posts')->distinct()->get()]);
	}
}