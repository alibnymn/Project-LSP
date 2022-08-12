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
    return view('index');
});


Route::get('user/siswa', 'siswacontroller@siswa');
Route::get('user/suhusiswa', 'suhusiswacontroller@suhusiswa');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function (){
Route::get('home', 'homecontroller@home');
     
//siswa
Route::get('siswa', 'siswacontroller@data');
Route::get('siswa/tambah', 'siswacontroller@tambah');
Route::post('siswa', 'siswacontroller@tambahprocess');
Route::get('siswa/edit/{id}', 'siswacontroller@edit');
Route::patch('siswa/{id}', 'siswacontroller@editprocess');
Route::delete('siswa/{id}', 'siswacontroller@delete');
//suhusiswa
Route::resource('suhusiswa', 'suhusiswacontroller');
//petugas
Route::get('petugas','PetugasController@index');
});