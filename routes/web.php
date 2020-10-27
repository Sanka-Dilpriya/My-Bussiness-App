<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
//     echo 'This is Test Laravel Site';
// });

route::get('/','PagesController@home_page');

route::get('/welcome','PagesController@welcome_page');

route::get('/login','PagesController@login_page');

route::get('/dashbord','PagesController@dashbord_page');

route ::get('/sample',function(){
    return view('sample');
});