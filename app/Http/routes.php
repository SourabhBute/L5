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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/admin/{number}', 'AdminController@index');
//Route::post('/admin', 'AdminController@postMethod');

//Route::get('admin/{number}/{second}', 'AdminController@index');

// Route::get('admin/{number}/{second?}', function($number, $second = ''){

//     echo  "Number is $number";

//     echo  "second number is $second ";
    
// });

Route::get('/admin/users/pdf', function($number) {
    echo  "number is $number";
})->where(['number' => '[0-9]+'])->name('user-number');

Route::get('/', function(){
  echo route('user-number', ["sortby"=>"username"]);
});

Route::group(['as' =>'admin -' ],function() {
    Route::get('/dashboard',[
        'as' => 'dashboard',
        'uses' => 'AdminController@postMethod',    
    ]);
});

// route('admin-dashbord');


Route::get('/rahul/param/{id?}', function($id = "") {
    echo "id is from laravel $id";
})->where(['id'=>'[0-9]+$'])->name('rahul-route');


Route::get('welcome', function() {
    //return view('welcome');
   echo  route('rahul-route', ['id'=> 100]);
});

Route::any('hello', function() {
    echo "Any  method route called";

});

Route::match(['get' ,'put'], 'test', function() {
    echo "Test route called of match method";
});


Route::get('users/profile', ['as' =>'profile',function() {
   echo "users profile is showing";
}]);


Route::get('test', function() {
   return redirect()->route('profile');
});


Route::group(['as'=>'admin-'], function () {
    Route::get('check',function(){
        echo "check route";
    })->name('sourabh.bute');

    Route::get('mytest',function() {
       echo "mytest route";
    });

});


Route::get('login', function() {
  echo route('admin-sourabh.bute');

});


Route::group(['namespace' => 'test'] ,function() {
    Route::get('tettt', 'TestController@create');
});