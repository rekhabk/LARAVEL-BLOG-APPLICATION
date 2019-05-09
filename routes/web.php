<?php



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route:: group(['prefix'=> 'admin', 'middleware'=>'auth'], function()
{

Route::get('/home',[
    'uses'=>'HomeController@index',
    'as'=>'home'
]);

 

Route::get('/post/create',[
    'uses'=>'PostController@create',
    'as'=>'post.create'
]);

Route::post('/post/store',[
    'uses'=>'PostController@store',
    'as'=>'post.store'
]);

Route::get('/category/create',[
    'uese'=>'CategoriController@create',
    'as'=>'category.create'

]);

Route::post('/category/store',[
    'uses'=>'CategoriesController@store',
    'as'=>'categorys.store'
]);

});


