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

Route::get('/', function () {
    return view('dashboard');
});

// localhost:8000/hello
// mengembalikan string
// Route::get('/hello', function (){
//     return "Hello World";
// });

// localhost:8000/hello
// mengembalikan view
// Route::get('/hello', function () {
//     return view('hello');
// });

// localhost:8000/hello
// mengembalikan view
// Route::get('/hello', function (){
//     return view('hello', [
//         'kalimat' => 'ini kalimat'
//     ]);
// });

// localhost:8000/hello
// // mengembalikan data array dengan 2 cara
// Route::get('/hello', function (){
//     $data = array(
//         'kalimat' => 'Ini Kalimat cara ke 2'
//     );
//     return view('hello', $data); // cara 1
//     // return view('hello')->with($data); //cara 2
// });

// Membuat template admin LTE
// Route::get('/admin', function (){
//     return view('template');
// });

Route::get('/home', 'DashboardController@index');


Route::get('/categories', 'CategoriesController@index');
Route::get('/category/create', 'CategoriesController@create');
Route::post('/category/add', 'CategoriesController@add');
Route::get('/category/edit/{id}', 'CategoriesController@edit')->where('id', '[0-9]+');
Route::get('/category/show/{id}', 'CategoriesController@show')->where('id', '[0-9]+');;
Route::post('/category/update/{id}', 'CategoriesController@update')->where('id', '[0-9]+');;
Route::get('/category/delete/{id}', 'CategoriesController@delete')->where('id', '[0-9]+');;

// Route::get('create', function () {
//     return view('categories.create');
// });

Route::get('/products', 'ProductsController@index');
Route::get('/product/create', 'ProductsController@create');
Route::post('/product/add', 'ProductsController@store');
Route::get('/product/edit/{id}', 'ProductsController@edit')->where('id', '[0-9]+');
Route::get('/product/show/{id}', 'ProductsController@show')->where('id', '[0-9]+');;
Route::post('/product/update/{id}', 'ProductsController@update')->where('id', '[0-9]+');;
Route::get('/product/delete/{id}', 'ProductsController@destroy')->where('id', '[0-9]+');;
