<?php

use Illuminate\Support\Facades\Route;
use App\Events\SocketEvent;
use Illuminate\Support\Facades\Artisan;
use App\Events\ChatEvent;
use App\Events\TestEvent;

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

Route::get('/p', function () {
    return view('private');
});

Route::get('/socket', function () {
    $a = event(new SocketEvent());
    dd($a);
});

Route::get('/socketp', function () {
    $a = event(new ChatEvent());
    dd($a);
});

Route::get('/sockett', function () {
    $a = event(new TestEvent());
    dd($a);
});

Route::get('/test', function () {
    $a = shell_exec('php ../artisan websockets:serve');
    print_r($a);
    
});

Route::get('/clear', function () {
    $a = shell_exec('php ../artisan websockets:restart');
    print_r($a);
    
});

Route::get('/npm', function () {
    try{
      $a = shell_exec('npm -v');
    print_r($a);  
    }catch(Exception $e){
        print_r($e);
        
    }
    
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
