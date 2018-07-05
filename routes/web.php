<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
	$paramet = array('para1'=>'param1222','param2'=>'test2');
    return view('about',$paramet);
});
Route::get('/contact', function () {
	$param2= DB::table('posts')->get();
	// return $param2;
	return view('posts.showall',$param2);
});
Route::get('/contact/{id}', function ($id) {
	$param2= DB::table('tasks')->find($id);
	var_dump($param2);

	print_r($param2);
	dd($param2);
	// return $param2;
	// return view('about',$param2);
});
Route::get('/con','taskcontroller@index');
Route::get('/con/{tasks}','taskcontroller@show');
Route::get('/post','PostController@post');
Route::post('/showall','PostController@signup');
Route::post('/login','PostController@login');
Route::get('/showall','PostController@showallcontroll');
Route::get('/deleteid','PostController@deleteid');
Route::get('/login',function(){
	return view('posts.login');
});
Route::post('/update','PostController@update');
Route::get('/loginauth',function(){
	return view('auth.login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin_area', ['middleware' => 'admin', function () {
    return view('showall');
    }]);
?>
<!-- Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 -->