<?php

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
    if (Auth::check()) {
    	return redirect()->route('home.index');
    }

    return redirect('/login');
});

// Route::get('/auth', 'Auth\LoginController@showLogin')->name('auth.showLogin');
// Route::post('/auth/loginaction', 'Auth\LoginController@loginAction')->name('auth.loginAction');
// Route::post('/auth/logoutaction', 'Auth\LoginController@logoutAction')->name('auth.logoutAction');

Auth::routes();
Route::middleware('auth')->group(function(){


    Route::prefix('/')->group(function(){
        Route::get('', 'DashboardController@index')->name('home.index');
	});
    Route::get('/masterdata/Program', 'HomeController@Program')->name('master.program');
    Route::get('/notulensi', 'HomeController@Notulensi')->name('notulensi');
    Route::get('/masterdata/MasterProgram', 'HomeController@MasterProgram')->name('master.getDataMaster');


});

