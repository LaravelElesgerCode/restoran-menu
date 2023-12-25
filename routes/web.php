<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

| Route::get('/test', function () {
        return view('test');
    })->name('test');
*/

Route::group(['middleware'=>'isLogin'], function () {

    Route::get('/', function () {
    return view('index');
    })->name('indeks');

    Route::get('/hall1', function () {
        return view('hall1');
    })->name('hall11');

    Route::get('/hall2', function () {
        return view('hall2');
    })->name('hall22');

    Route::get('/test', function () {
        return view('test');
    })->name('test');

    Route::get('/testtable', function () {
        return view('testtable');
    })->name('testtable');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profilee');
    Route::post('/profRoute', 'App\Http\Controllers\profileController@profinsert')->name('profRoute');


    Route::get('/logout', 'App\Http\Controllers\userController@logout')->name('logout');


    Route::get('/category', 'App\Http\Controllers\categoryController@catList')->name('categoriya');
    Route::post('/catInsert', 'App\Http\Controllers\categoryController@catInsert')->name('routeCat');
    Route::get('/catDelete/{id}', 'App\Http\Controllers\categoryController@catDelete')->name('catDelete');
    Route::get('/catDelOkey/{id}', 'App\Http\Controllers\categoryController@catDelOkey')->name('catDelOkey');
    Route::get('/catEdit/{id}', 'App\Http\Controllers\categoryController@catEdit')->name('catEdit');
    Route::post('/catUpdate', 'App\Http\Controllers\categoryController@catUpdate')->name('routeCatUpdate');


    Route::get('/foodsystem', 'App\Http\Controllers\foodsystemController@foodList')->name('food');
    Route::post('/foodInsert', 'App\Http\Controllers\foodsystemController@foodInsert')->name('routeFood');
    Route::get('/foodDelete/{id}', 'App\Http\Controllers\foodsystemController@foodDelete')->name('foodDelete');
    Route::get('/foodDelOkey/{id}', 'App\Http\Controllers\foodsystemController@foodDelOkey')->name('foodDelOkey');
    Route::get('/foodEdit/{id}', 'App\Http\Controllers\foodsystemController@foodEdit')->name('foodEdit');
    Route::post('/foodUpdate', 'App\Http\Controllers\foodsystemController@foodUpdate')->name('routeFoodUpdate');


    Route::get('/table1', 'App\Http\Controllers\menuController@t1List')->name('table11');
    Route::get('/t1ShowCat/{id}', 'App\Http\Controllers\menuController@t1ShowCat')->name('t1ShowCat');
    Route::get('/t1Insert/{id}', 'App\Http\Controllers\menuController@t1Insert')->name('t1Insert');
    Route::get('/t1Del/{id}', 'App\Http\Controllers\menuController@t1Del')->name('t1Del');
    Route::get('/t1DelOkey/{id}', 'App\Http\Controllers\menuController@t1DelOkey')->name('t1DelOkey');
    Route::get('/t1Clear', 'App\Http\Controllers\menuController@t1Clear')->name('t1Clear');
    Route::get('/t1Clear2', 'App\Http\Controllers\menuController@t1Clear2')->name('t1Clear2');


    Route::get('/table2', 'App\Http\Controllers\menuController@t2List')->name('table22');
    Route::get('/t2ShowCat/{id}', 'App\Http\Controllers\menuController@t2ShowCat')->name('t2ShowCat');
    Route::get('/t2Insert/{id}', 'App\Http\Controllers\menuController@t2Insert')->name('t2Insert');
    Route::get('/t2Del/{id}', 'App\Http\Controllers\menuController@t2Del')->name('t2Del');
    Route::get('/t2DelOkey/{id}', 'App\Http\Controllers\menuController@t2DelOkey')->name('t2DelOkey');
    Route::get('/t2Clear', 'App\Http\Controllers\menuController@t2Clear')->name('t2Clear');
    Route::get('/t2Clear2', 'App\Http\Controllers\menuController@t2Clear2')->name('t2Clear2');


    Route::get('/table3', 'App\Http\Controllers\menuController@t3List')->name('table33');
    Route::get('/t3ShowCat/{id}', 'App\Http\Controllers\menuController@t3ShowCat')->name('t3ShowCat');
    Route::get('/t3Insert/{id}', 'App\Http\Controllers\menuController@t3Insert')->name('t3Insert');
    Route::get('/t3Del/{id}', 'App\Http\Controllers\menuController@t3Del')->name('t3Del');
    Route::get('/t3DelOkey/{id}', 'App\Http\Controllers\menuController@t3DelOkey')->name('t3DelOkey');
    Route::get('/t3Clear', 'App\Http\Controllers\menuController@t3Clear')->name('t3Clear');
    Route::get('/t3Clear2', 'App\Http\Controllers\menuController@t3Clear2')->name('t3Clear2');


    Route::get('/table4', 'App\Http\Controllers\menuController@t4List')->name('table44');
    Route::get('/t4ShowCat/{id}', 'App\Http\Controllers\menuController@t4ShowCat')->name('t4ShowCat');
    Route::get('/t4Insert/{id}', 'App\Http\Controllers\menuController@t4Insert')->name('t4Insert');
    Route::get('/t4Del/{id}', 'App\Http\Controllers\menuController@t4Del')->name('t4Del');
    Route::get('/t4DelOkey/{id}', 'App\Http\Controllers\menuController@t4DelOkey')->name('t4DelOkey');
    Route::get('/t4Clear', 'App\Http\Controllers\menuController@t4Clear')->name('t4Clear');
    Route::get('/t4Clear2', 'App\Http\Controllers\menuController@t4Clear2')->name('t4Clear2');


    Route::get('/table5', 'App\Http\Controllers\menuController@t5List')->name('table55');
    Route::get('/t5ShowCat/{id}', 'App\Http\Controllers\menuController@t5ShowCat')->name('t5ShowCat');
    Route::get('/t5Insert/{id}', 'App\Http\Controllers\menuController@t5Insert')->name('t5Insert');
    Route::get('/t5Del/{id}', 'App\Http\Controllers\menuController@t5Del')->name('t5Del');
    Route::get('/t5DelOkey/{id}', 'App\Http\Controllers\menuController@t5DelOkey')->name('t5DelOkey');
    Route::get('/t5Clear', 'App\Http\Controllers\menuController@t5Clear')->name('t5Clear');
    Route::get('/t5Clear2', 'App\Http\Controllers\menuController@t5Clear2')->name('t5Clear2');


    Route::get('/table6', 'App\Http\Controllers\menuController@t6List')->name('table66');
    Route::get('/t6ShowCat/{id}', 'App\Http\Controllers\menuController@t6ShowCat')->name('t6ShowCat');
    Route::get('/t6Insert/{id}', 'App\Http\Controllers\menuController@t6Insert')->name('t6Insert');
    Route::get('/t6Del/{id}', 'App\Http\Controllers\menuController@t6Del')->name('t6Del');
    Route::get('/t6DelOkey/{id}', 'App\Http\Controllers\menuController@t6DelOkey')->name('t6DelOkey');
    Route::get('/t6Clear', 'App\Http\Controllers\menuController@t6Clear')->name('t6Clear');
    Route::get('/t6Clear2', 'App\Http\Controllers\menuController@t6Clear2')->name('t6Clear2');


    Route::get('/table7', 'App\Http\Controllers\menuController@t7List')->name('table77');
    Route::get('/t7ShowCat/{id}', 'App\Http\Controllers\menuController@t7ShowCat')->name('t7ShowCat');
    Route::get('/t7Insert/{id}', 'App\Http\Controllers\menuController@t7Insert')->name('t7Insert');
    Route::get('/t7Del/{id}', 'App\Http\Controllers\menuController@t7Del')->name('t7Del');
    Route::get('/t7DelOkey/{id}', 'App\Http\Controllers\menuController@t7DelOkey')->name('t7DelOkey');
    Route::get('/t7Clear', 'App\Http\Controllers\menuController@t7Clear')->name('t7Clear');
    Route::get('/t7Clear2', 'App\Http\Controllers\menuController@t7Clear2')->name('t7Clear2');


    Route::get('/table8', 'App\Http\Controllers\menuController@t8List')->name('table88');
    Route::get('/t8ShowCat/{id}', 'App\Http\Controllers\menuController@t8ShowCat')->name('t8ShowCat');
    Route::get('/t8Insert/{id}', 'App\Http\Controllers\menuController@t8Insert')->name('t8Insert');
    Route::get('/t8Del/{id}', 'App\Http\Controllers\menuController@t8Del')->name('t8Del');
    Route::get('/t8DelOkey/{id}', 'App\Http\Controllers\menuController@t8DelOkey')->name('t8DelOkey');
    Route::get('/t8Clear', 'App\Http\Controllers\menuController@t8Clear')->name('t8Clear');
    Route::get('/t8Clear2', 'App\Http\Controllers\menuController@t8Clear2')->name('t8Clear2');


    Route::get('/cabinet1', 'App\Http\Controllers\menuController@c1List')->name('cabinet11');
    Route::get('/c1ShowCat/{id}', 'App\Http\Controllers\menuController@c1ShowCat')->name('c1ShowCat');
    Route::get('/c1Insert/{id}', 'App\Http\Controllers\menuController@c1Insert')->name('c1Insert');
    Route::get('/c1Del/{id}', 'App\Http\Controllers\menuController@c1Del')->name('c1Del');
    Route::get('/c1DelOkey/{id}', 'App\Http\Controllers\menuController@c1DelOkey')->name('c1DelOkey');
    Route::get('/c1Clear', 'App\Http\Controllers\menuController@c1Clear')->name('c1Clear');
    Route::get('/c1Clear2', 'App\Http\Controllers\menuController@c1Clear2')->name('c1Clear2');


    Route::get('/cabinet2', 'App\Http\Controllers\menuController@c2List')->name('cabinet22');
    Route::get('/c2ShowCat/{id}', 'App\Http\Controllers\menuController@c2ShowCat')->name('c2ShowCat');
    Route::get('/c2Insert/{id}', 'App\Http\Controllers\menuController@c2Insert')->name('c2Insert');
    Route::get('/c2Del/{id}', 'App\Http\Controllers\menuController@c2Del')->name('c2Del');
    Route::get('/c2DelOkey/{id}', 'App\Http\Controllers\menuController@c2DelOkey')->name('c2DelOkey');
    Route::get('/c2Clear', 'App\Http\Controllers\menuController@c2Clear')->name('c2Clear');
    Route::get('/c2Clear2', 'App\Http\Controllers\menuController@c2Clear2')->name('c2Clear2');

});


Route::group(['middleware'=>'notLogin'], function(){

    Route::get('/registration', function () {
        return view('registration');
    })->name('register');
    Route::post('/regRoute', 'App\Http\Controllers\userController@regInsert')->name('regRoute');

    Route::get('/login', function () {
        return view('login');
    })->name('logg');
    Route::post('/logRoute', 'App\Http\Controllers\userController@logInsert')->name('logRoute');
});


