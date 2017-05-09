<?php
    use App\Post;
    use App\User;
    use App\Country;
    use App\Photo;

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


//    Route::get('/create', function() {
//
//       Post::create(['title'=>'The Create Method', 'content'=>'Wow I\'m learning a lot about laravel!']);
//    });

//    Route::get('/update', function() {
//       Post::where('id', 6)-> where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love my instructor!']);
//    });

//    Route::get('/delete', function() {
//        $post = Post::find(4);
//        $post->delete();
//    });

//    Route::get('/delete2', function(){
//
//        Post::destroy([6,7]);
//
//        Post::where('is_admin', 0)->delete();
//
//    });
//
//    Route::get('/softdelete',function(){
//
//        Post::find(8)->delete();
//
//
//    });
//
//    Route::get('/readsoftdelete',function(){
//
//        $post = Post::onlyTrashed()->where('id', 8)->get();
////        $post = Post::find(8);
////
//        return $post;
//
//    });


//Route::get('/restore', function(){
//   Post::withTrashed()->where('is_admin', 0)->restore();
//});

//    Route::get('/forcedelete', function() {
//       Post::withTrashed()->where('is_admin', 0)->forceDelete();
//    });



    /*
    |--------------------------------------------------------------------------
    | ELOQUENT Relationships
    |--------------------------------------------------------------------------
    */
//
//    // One to One relationship
//    Route::get('/user/{id}/post', function ($id){
//        return User::find($id)->post->content;
//    });
//
//    // Inverse Relationship
//    Route::get('/post/{id}/user', function ($id){
//        return Post::find($id)->user->name;
//    });
//
//    // One to many relationship
//
//    Route::get('/posts', function (){
//        $user = User::find(1);
//
//        foreach($user->posts as $post) {
//            echo $post->title . "<br>";
//        }
//    });
//
//    //Many to Many relationships
//     Route::get('/user/{id}/role', function ($id){
//         $user = User::find($id)->roles()->orderBy('id', 'desc')->get();
//
//
//     return $user;
//     foreach ($user->roles as $role) {
//           return $role->name;
//      }
//     });

//    //Accessing the intermediate table(pivot table/role_user table)
//        Route::get('/user/{id}/pivot', function ($id){
//           $user = User::find($id);
//
//           foreach($user->roles as $role) {
//               echo $role->pivot->created_at;
//           }
//        });

//Route::get('/country/{id}/post', function($id){
//    $country = Country::find($id);
//
//
//    foreach($country->posts as $post) {
//        echo $post->content . "<br>";
//    }
//});

// Polymorphic Relations
    Route::get('user/{id}/photos', function ($id){
        $user = User::find($id);

        foreach($user->photos as $photo){
            return $photo;
        }

    });
