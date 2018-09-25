<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('users/{name?}', function($name="Masud Alam") {
        echo 'User Name is ' . $name;
}); 
Route::get('/contact', function (){
    echo "<h2> This is Contact Page</h2>";
}); 

Route::get('/getall', function()
{
$fetchData = DB::select('select * from students');
echo "<pre>";
print_r($fetchData);
echo "</pre>";
});