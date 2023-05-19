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

Route::get('/', function () {
    $data = [
        'page_title' => 'Schedule',
        'description' => 'Staff tasks manager',

    ];
    return view('home', $data);
});

Route::get('/staff', function () {
    $page_title = 'Staff';
    $staff =  [
        'Michael Jackson',
        'Bruce Willice',
        'Margot Robbie',
        'Leonardo DiCaprio',
    ];
    return view('staff', compact('page_title', 'staff'));
})->name('staff');

Route::get('/task', function () {
    $page_title = 'Task';
    $tasks = [
        'orders',
        'customer services',
        'front office',
        'back office',
    ];
    return view('task', compact('page_title' , 'tasks'));
})->name('task');
