<?php
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SidebarsController;



                //Home-About-Contact-Category Routs 
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);


Route::get('fashion', function () {
   return view('Categorys.fashion') ;
});
// ---------------------------------------------------------


                  //  SideBars - Width
Route::get('/standard-fullwidth', [SidebarsController::class, 'fullwidth']);
Route::get('/standard-left-sidebar', [SidebarsController::class, 'leftsidebar']);
Route::get('/standard-right-sidebar', [SidebarsController::class, 'rightsidebar']);
// ---------------------------------------------------------------------------------





             //   HomePages from 2 To 6 
Route::get('/home2', [HomeController::class, 'index2']);
Route::get('/home3', [HomeController::class, 'index3']);
Route::get('/home4', [HomeController::class, 'index4']);
Route::get('/home5', [HomeController::class, 'index5']);
Route::get('/home6', [HomeController::class, 'index6']);
//------------------------------------------------------------------------------------