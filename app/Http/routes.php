<?php
    use App\Post;
    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the controller to call when that URI is requested.
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });


    //Route::get('/insert', function (){
    //
    //   DB::insert('insert into posts(title,content) values(?, ?)', ['PHP with Laravel', 'Laravel is the best thing that has happened to PHP']);
    //
    //});
    //  Route::get('/read', function (){
    //    $results = DB::select('select * from posts where id = ?', [1]);
    //
    //    foreach($results as $post) {
    //        return $post->title;
    //    }
    //  });
    //  Route::get('/update', function (){
    //      $updated = DB::update('update posts set title = "Updated title" where id = ?', [1]);
    //
    //      return $updated;
    //  });
    //  Route::get('/delete', function () {
    //      $deleted = DB::delete('delete from posts where id =?', [1]);
    //
    //      return $deleted;
    //  });

/*
    |--------------------------------------------------------------------------
    | ELOQUENT
    |--------------------------------------------------------------------------
*/
//    Route::get('/read', function () {
//        $posts = Post::all();
//
//        foreach($posts as $post) {
//            return $post->title;
//        }
//    });

    Route::get('/find', function () {
        $post = Post::find(4);
        return $post->title;
    });

    Route::resource('posts', 'PostsController');

    Route::get('/contact', 'PostsController@contact');

    Route::get('post/{topic}/{name}/{id}', 'PostsController@show_post');

