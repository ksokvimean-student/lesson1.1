<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;

 
// Nav Controller
// Route::get('/page/{pageName}', [NavController::class, 'nav']);
// Route::get('/page/{parentName}/{pageName}', [NavController::class, 'navSubPage']);
Route::get('/page/{parent}/{page}', [NavController::class, 'navSubPageWithValue'])
    ->name('page.view');

Route::post('/submit/user', [NavController::class, 'submitUser'])->name('submit.user');




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home',function(){
//     return view('index');
// });
// Route::get('/about',function(){
//     return view('about');
// });
// Route::get('/contact',function(){
//     return view('contact');
// });
// Route::get('/course',function(){
//     return view('course');
// }); 
// Route::get('/detail',function(){
//     return view('detail');
// });
// Route::get('/index',function(){
//     return view('index');
// });
// Route::get('/team',function(){
//     return view('team');
// });
 
// Route::get('/testimonial',function(){
//     return view('/testimonial','testimonial');
// });
// Route::view('/testimonial','testimonial');
