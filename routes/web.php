<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
	return view('about');
});

Route::get('contact', function(){
	return view('contact');
});


// Blade Templating YT Practice:
Route::get('/indexpage', 'PostsController@indexes');
Route::get('/ourstoro', 'PostsController@ourstoro');
Route::get('/products', 'PostsController@products');
Route::get('/posts/create', 'PostsController@store');

// Youtube Tutorial Practice:

// Route::get('/routes', function(){
// 	return '<h1>I am Learning Routes</h1>';
// });

// Route::get('/page', function(){
// 	return view('pages.page');
// });

// // Use of Dynamic Routing? :
// Route::get('/users/{id}/{name}', function($id, $name){
// 	return 'This is user: ' .$name. ' with an ID of: ' .$id;
// });


// Route::get('/showme', 'SomeController@showMe');
// Route::get('/loyal', 'SomeController@loyal');

// Route::get('/index', 'SomeController@index');


// Route::get('/ingredients/{recipe}/{chef}', function($recipe, $chef){
// 	return 'Chef: '.$chef. ' made this recipe: ' .$recipe;
// });


// Route::resource('posts', 'PostsController');








// Laravel Documentation PRactice:


// Route::get('yes', function () {
//     return 'Hello World';
// });

// Route::get('/tcontrol', 'TestController@helloWorld');

// Route::get('/newFile', 'TestController@newFile');




// Route::get('user/{id}', 'TestController@show');

// Route::get('/complete', 'TestController@complete');

// Route::get('user/{id}', 'TestController@ShowProfile');

// Route::resources([
// 	'photos' => 'PhotoController',
// 	'posts' => 'PostController'
// ]);

// Route::get('/photos', 'PhotoController@index');