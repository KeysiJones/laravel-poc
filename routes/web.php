<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\Util\Json;
use App\Http\Controllers\GreetingController;

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
    return view('collectData');
});

Route::get('/converter', [GreetingController::class, "salaryConverter"]);
