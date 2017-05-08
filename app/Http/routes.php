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


//    Route::get('/insert', function (){
//
//       DB::insert('insert into posts(title,content) values(?, ?)', ['Laravel is awesome', 'Laravel is the best thing that has happened to PHP']);
//
//    });
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

//    Route::get('/find', function () {
//        $post = Post::find(4);
//        return $post->title;
//    });

//  |--------------------------------------------------------------------------
//  | RESOURCES AND USING PARAMS
//  |--------------------------------------------------------------------------
    Route::resource('posts', 'PostsController');
    Route::get('/contact', 'PostsController@contact');
    Route::get('post/{topic}/{name}/{id}', 'PostsController@show_post');


    /*
    |--------------------------------------------------------------------------
    | CHAINING
    |--------------------------------------------------------------------------
    */
//    Route::get('/findwhere', function () {
//       $posts = Post::where('id', 5)-> orderBy('id', 'desc')->take(1)->get();
//
//       return $posts;
//    });

//    Route::get('/findmore', function () {
////       $posts = Post::findOrFail(1);
////
////       return $posts;
//
//        $posts = Post::where('users_count', '<', 50)->firstOrFail();
//
//        return $posts;
//    });


//    Route::get('/basicinsert', function(){
//
//        $post = new Post;
//
//        $post->title = 'New Eloquent title insert';
//
//        $post->content = "Wow Eloquent is really cool, look at this content";
//
//        $post->save();
//    });

    Route::get('/basicinsert4', function(){

        $post = Post::find('4');

        $post->title = 'New Eloquent title insert 4';

        $post->content = "Wow Eloquent is really cool, look at this content 4";

        $post->save();
    });