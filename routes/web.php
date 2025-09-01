<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/post-1', function(){
    return "Aqui se mostrara el post 1";
});

Route::get('/posts/post-2', function(){
    return "Aqui se mostrara el post 2";
});

Route::get('/posts/post-3', function(){
    return "Aqui se mostrara el post 3";
});

Route::get('/posts/{post}',[postController::class, 'show']);

Route::get('/posts/{post}/{categoria?}',function($post,$categoria= null) {

    if ($categoria){
        return "Aqui se mostrara el post {$post} de la categoria {$categoria}";

    }
    return "Aqui se mostrara el post {$post}";
});

Route::get('/post/create', [PostController::class, 'create']);


/*Route::get('/posts/{post}/{categoria?}',function($post,$categoria= null) {

    if ($categoria){
        return "Aqui se mostrara el post {$post} de la categoria {$categoria}";

    }
    return "Aqui se mostrara el post {$post}";
});*/


/*Route::get('/post/{post}/{categoria}',function($post,$categoria) {
    return "Aqui se mostrara el post {$post} de la categoria {$categoria}";
});*/
//Get
//Post
//Put
//Patch
//Delete