<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[
   'uses' => '\Blackcat\Http\Controllers\HomeController@index',
    'as' => 'home'
]);

Route::get('/alert',function(){
    return redirect() -> route('home') -> with('info','You have signed up!');
});

/**
 * Authentication
 */
//sign up(register)
Route::get('/signup',[
    'uses'=>'\Blackcat\Http\Controllers\AuthController@getSignup',
    'as'=>'auth.signup',
    'middleware'=>['guest'],
]);

Route::post('/signup',[
    'uses'=>'\Blackcat\Http\Controllers\AuthController@postSignup',
    'middleware'=>['guest'],
]);

//sign in(login)
Route::get('/signin',[
    'uses'=>'\Blackcat\Http\Controllers\AuthController@getSignin',
    'as'=>'auth.signin',
    'middleware'=>['guest'],
]);

Route::post('/signin',[
    'uses'=>'\Blackcat\Http\Controllers\AuthController@postSignin',
    'middleware'=>['guest'],
]);


//sign out(log out)
Route::get('/signout',[
    'uses'=>'\Blackcat\Http\Controllers\AuthController@getSignout',
    'as'=>'auth.signout',
]);
/**
 * Search
 */
Route::get('/search',[
    'uses'=>'\Blackcat\Http\Controllers\SearchController@getResults',
    'as' =>'search.results',
]);
/*
 * User profile
 */
Route::get('/user/{username}',[
    'uses'=>'\Blackcat\Http\Controllers\ProfileController@getProfile',
    'as' =>'profile.index',
]);
Route::get('/profile/edit',[
    'uses'=>'\Blackcat\Http\Controllers\ProfileController@getEdit',
    'as' =>'profile.edit',
    'middleware'=>['auth'],
]);

Route::post('/profile/edit',[
    'uses'=>'\Blackcat\Http\Controllers\ProfileController@postEdit',
    'middleware'=>['auth'],
]);
/*
 * Friends
 */
Route::get('/friends',[
    'uses'=>'\Blackcat\Http\Controllers\FriendController@getIndex',
    'as' =>'friend.index',
    'middleware'=>['auth'],
]);

Route::get('/friends/add/{username}',[
    'uses'=>'\Blackcat\Http\Controllers\FriendController@getAdd',
    'as' =>'friend.add',
    'middleware'=>['auth'],
]);

Route::get('/friends/accept/{username}',[
    'uses'=>'\Blackcat\Http\Controllers\FriendController@getAccept',
    'as' =>'friend.accept',
    'middleware'=>['auth'],
]);