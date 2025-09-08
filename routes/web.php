<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

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
Route::get('prueba', function(){
   
    //    Crear nuevo registro 
    //    $post= new Post;

    //     $post->title = 'TiTulo dE PRUEBA 4';
    //     $post-> content = 'contenido de prueba 4';
    //     $post->categoria = 'contiene la categoria 4';
    //     $post->save();
    //     return $post;


    /* Busqueda por ID */
    $post = Post::find(1);
    return $post->published_at->format('d/m/Y');

//     $post = Post::where('title','titulo de prueba 1')->first();
    
//    $post->categoria = 'Desarrollo web';
//     $post->save();

    // return $post;




    // para traer un registro o registros poniendo una condicion
    // $post = Post::where('id','>=','2')->get();
    //return $post;

    // $post = Post::orderBy('id','desc')->get();
    // return $post;


    // $post = Post::orderBy('title','asc')->get();
    // return $post;


    //nos ayuda a hacer una consulta para obtener lo que nosotros quieramos, take es para traer un cierto numero de registros
    // $post = Post::orderBy('title','asc')
    //     ->select('id','title','categoria')
    //     ->take(2)
    //     ->get();
    // return $post;


    // $post =Post::find(1);
    // $post->delete();
    // return "Registro eliminado";
});