<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login_C;
use App\Http\Controllers\home;

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
route::get('/register',[login_C::class,'register']);
route::post('/regis',[login_C::class,'regis']);


route::get('/login',[login_C::class,'Login'])->name('Login');
route::post('/pogin',[login_C::class,'pogin']);

route::get('/dashboard',[home::class,'home']);
route::get('/table',[home::class,'table']);
route::get('/tambah',[home::class,'tambah']);
route::post('/proses',[home::class,'store']);

Route::get('/edit/{id}',[home::class, 'edit']);
Route::post('/update/{id}',[home::class, 'update']);
Route::get('/hapus/{id}',[home::class, 'destroy']);
