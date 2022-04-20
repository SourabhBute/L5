<?php 
use App\Http\Controllers\Users\UserController;

Route::get('testuser', function(){
   echo "Users files called inside of module";
});

Route::get('demo', function() {
    $arr =['sourabh', 'Rahul', 'Aman', 'Vijay'];
    echo  "<pre>";
    print_r($arr);
});

Route::get('/login', 'Users\UserController@index');

Route::post('/login', 'Users\UserController@store')->name('users.login');



