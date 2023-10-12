<?php

use App\Models\Author;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/test', function(){
    // siia kirjuta misiganes
    // return Author::first()->books;
    // dd('Author::with('books')->first');
    //dd('tere');
    //return Client::first()->orders;
    //return Order::first()->client;
});