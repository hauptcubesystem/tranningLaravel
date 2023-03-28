<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    return view('welcome');
});
Route::get('/get', function () {
    $test = DB::select('select * from test');
    return $test;
});
Route::get('/update', function () {
    $id = request()->query('id');
    $name = request()->query('name');
    $test = DB::update('update test set name = ? where id = ?', [$name,$id]);
    return $test;
});
Route::get('/add', function () {
    $id = request()->query('id');
    $name = request()->query('name');
    $username = request()->query('username');
    $password = request()->query('password');
    $test = DB::insert('insert into test (id, name,username ,password) values (?, ? , ? , ?)', [$id, $name,$username,$password]);
    return $test;
});
Route::get('/delete', function () {
    $id = request()->query('id');
    $name = request()->query('name');
    $username = request()->query('username');
    $password = request()->query('password');
    $test = DB::insert('insert into test (id, name,username ,password) values (?, ? , ? , ?)', [$id, $name,$username,$password]);
    return $test;
});
