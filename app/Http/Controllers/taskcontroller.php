<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class taskcontroller extends Controller
{


    public function index(){
        	echo "Controller<br>";
        	echo url('/');

    }	

    public function show($id){
		// echo $id;
		$param2= DB::table('tasks')->find($id);
		print_r($param2);
		dd($param2);
    }



    
}
