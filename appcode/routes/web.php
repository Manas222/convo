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



Route::get('/','pagescontroller@login');

Route::get('checkdb','pagescontroller@db');

Route::get('home','pagescontroller@home');

Route::get('msg','pagescontroller@msg');

Route::post('/verification','pagescontroller@verification');

Route::get('/signup','pagescontroller@signup'); 

Route::get('/adddetail','pagescontroller@addDetail'); 


