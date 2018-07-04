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
		$data = array(
			'username' => $request->input('username') ,
			'password'=> $request->input('password') ,
			'email' => $request->input('email') ,
			'address' => $request->input('address') , 
			'phone' => $request->input('phone')
		);
		DB::table('posts')->insert($data);	
   		$post= new post;
		$entireTable=$post->selectall();
   			return view('posts.showall')->with(['datas'=>$entireTable]);
	}
	public function showallcontroll()
	{
		// $post= new \App\post;//WORKING 1

		$post= new post;
	
		// $entireTable = App\Post::all(); // working 1

		// $entireTable = App\Post::selectall();
	$entireTable=$post->selectall();
	// echo "<pre>";
	// 	var_dump($entireTable);

		// print_r($entireTable);
	return view('posts.showall')->with(['datas'=>$entireTable]);
	}
	public function deleteid(Request $request)
	{
		$deleteid=$request->input('deleteid');
		DB::table('posts')->where('id', '=', $deleteid)->delete();
		$post= new post;
		$entireTable=$post->selectall();
   			return view('posts.showall')->with(['datas'=>$entireTable]);
	}
	public function update()
	{
		
	}
}