<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
    // $role = Role::whereName('admin')->first();
    // dd($role->givePermissionTo('create category'));
    // $role->givePermissionTo('create post', 'delete post');
    // $hasRole = auth()->user()->hasAnyRole($roles);
    // dd($hasRole);
    return view('welcome');
});
Auth::routes();

Route::middleware('has.role')->group(function () {
    Route::view('dashboard', 'dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
