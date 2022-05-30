<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', "HomeController@index")->name("welcome");
Auth::routes();

Route::middleware('auth')
->namespace('Admin')
->prefix('admin')
->name("admin.")
->group(function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts',"PostsController");
    Route::get("/{any}","PostsController@index")->where("any",".*");
});
Route::get('/contacts', "Contacts@index")->name("contacts");
Route::post('/contacts', "Contacts@store")->name("contacts.store");
Route::get('/done', "Contacts@done")->name("guest.done");


Route::get("/{any}","HomeController@index")->where("any",".*");
