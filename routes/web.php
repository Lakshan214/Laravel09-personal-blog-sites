<?php

use App\Http\Controllers\admin;
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





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[admin::class,'index']); 
Route::get('/redirect',[admin::class,'redirect']);

Route::prefix('/blog')->group(function(){
  
    Route::post('/Custrome',[admin::class,'custrome'])->name('blog.Custrome'); 
    Route::get('/Custerome_view',[admin::class,'custrome_view'])->name('blog.Custerome_view'); 
   

});


