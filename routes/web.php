<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Models\Bureau;

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
    return view('index', [
        'title'=>'Home'
    ]);
});

Route::get('/news', [NewsController::class, 'index']);

Route::get('/bureau/{bureau:slug}', function(Bureau $bureau){
    return view('category', [
        'title' => $bureau->name,
        'category' => $bureau->name,
    ]);
});
