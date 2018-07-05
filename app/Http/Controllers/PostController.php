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
			'password'=> md5($request->input('password') ),
			'email' => $request->input('email') ,
			'address' => $request->input('address') , 
			'phone' => $request->input('phone')
		);
		DB::table('posts')->insert($data);	
   		// $post= new post;
		// $entireTable=$post->selectall();
   			// return view('posts.showall')->with(['datas'=>$entireTable]);
		//	return $this->showallcontroll();
		return redirect()->to('showall');
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
	public function update(Request $request)
	{
		$editid= $request->input('editid');
		$data = array(
			'username' => $request->input('editname') ,
			'address' => $request->input('address') , 
			'phone' => $request->input('editphone')
		);
		DB::table('posts')->where('id',$editid)->update($data);
				return redirect()->to('showall');
		
	}
	public function login(Request $request)
	{
		$email=$request->input('email');
		$password=md5($request->input('password'));
		$user = DB::table('posts')->where('email', '=', $email )->where('password','=',$password)->get();
return view('posts.here')->with(['datas'=>$user]);
	}
}