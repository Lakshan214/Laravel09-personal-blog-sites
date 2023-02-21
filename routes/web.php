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
    Route::get('/{task_id}/delete',[admin::class,'delete'])->name('blog.delete'); 
    Route::get('/blogAdd',[admin::class,'blogAdd'])->name('blog.blogAdd'); 
    Route::post('/save',[admin::class,'blogSavve'])->name('blog.save'); 
    Route::get('/blogView',[admin::class,'blogView'])->name('blog.blogView'); 
    Route::get('/{blog_id}/blogdelete',[admin::class,'blogdelete'])->name('blog.blogdelete');
    Route::get('/blog',[admin::class,'blog'])->name('blog.blog');
    Route::get('/{blog_id}/edite',[admin::class,'edite'])->name('blog.edite');
    Route::post('/{id}/update',[admin::class,'update'])->name('blog.update');
    Route::get('/printpdf',[admin::class,'printpdf'])->name('blog.printpdf');
    Route::get('/cv',[admin::class,'cv'])->name('blog.cv');
    Route::post('/SaveCV',[admin::class,'SaveCV'])->name('blog.SaveCV');
    Route::get('/{id}/CVdelete',[admin::class,'CVdelete'])->name('blog.CVdelete');
   
    
});


