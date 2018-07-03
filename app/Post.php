<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Post extends Model
{
    public function selectall()
    {
	return DB::table('posts')->get();
    }

}
