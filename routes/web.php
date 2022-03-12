<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\EventController;
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
Route::resource('/todos', TodoController::class);
URL::forceScheme('https');
Route::resource('/event', CalendarController::class);
Route::get('/board', function () {
    return view('board');
});
Route::get('/db-test', function () {
    try{
        \DB::connection()->getPDO();
        $db_name = \DB::connection()->getDatabaseName();
        echo 'Database Connected: '.$db_name;
    } catch(\Exception $e) {
        echo 'None';
    }
});
Route::get('/db-migrate', function(){
    Artisan::call('migrate');
    echo Artisan::output();
});
Route::get('/calendar', function(){
    return view('calendar');
 
});

Route::fallback(function(){
	return view('fallback');
});