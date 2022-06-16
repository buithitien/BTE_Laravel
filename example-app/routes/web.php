<?php

use App\Http\Controllers\SingupController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('admin', function () {
//     return view('addRoom');
// });


// Route::get('admin',[AdminController::class,'index']);
// Route::post('admin',[AdminController::class,'addRoom']);


// '/':dẫn đến trang chủ welcome
// Route::group(['prefix'=>'MyGroup'],function(){
//     Route:: get('User1',function(){
//         echo "hello Tien";
//     });
//     Route:: get('User2',function(){
//         echo "Hello Everyone";
//     });
//     Route:: get('User3',function(){
//         echo "Hello haha";
//     });

// });


// Route::get('test',[UserController::class,'xinchao']);




// Route::get('tinhtong',function()
// {
//     return view('sum');
// });
// Route::post('tinhtong',[SumController::class,'tinhtong']);


// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('signup',[SignupController::class,'index']);
// Route::post('signup',[SignupController::class,'displayInfor']);
Route::get('master',[PageController::class,'getIndex']);
