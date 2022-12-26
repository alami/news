<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;

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
/*Route::get('/about', function () {
    echo "This is about page";
});*/
//Route::get('/about', [DemoController::class, 'Index']);
Route::controller(DemoController::class)->group(function (){
    Route::get('/about', 'Index') -> name('about.page') -> middleware('check');
});
