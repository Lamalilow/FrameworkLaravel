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
    return view('welcome');
});

Route::get('/my-name', function () {
    return 'Ганеев Филипп Евгеньевич';
});

Route::get('/my-friend', function () {
    return 'Зилибобков Зилибобка) Зилибобкович';
});

Route::get('/get-friend/{login}', function ($login) {
    return $login;
});

Route::get('/my-city/{city}', function ($city) {
    return $city;
}) -> where('city', '[A-Za-z]+');

Route::get('/level/{lvl}', function ($lvl) {
    if ($lvl>=0 && $lvl<=25)
        echo "Новичок";
    else if ($lvl>=26 && $lvl<=50)
        echo "Специалист";
    else if ($lvl>=51 && $lvl<=75)
        echo "Босс";
    else if ($lvl>=76 && $lvl<=98)
        echo "Старик";
    else if ($lvl==99)
        echo "Король";
    else if($lvl >= 100 || $lvl<=-1)
        echo "Уровней не так много, от 0 до 99";
});

Route::get('/working/{name}/{date}', function ($name, $date) {

    return 'Название проекта: '.$name.'. Его дата: '.$date;
})->where(['date' => '[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])+']);

Route::get('/power/power', function () {
    return '<a href="/test">узнать данный путь</a>';
})->name('power');
Route::get('/test', function(){
    return route('power');
});

Route::prefix('admin')->group(function (){
    Route::get('/login', function (){
        return 'админ логин';
    });
    Route::get('/logout', function (){
        return 'админ логаут';
    });
    Route::get('/info', function (){
        return 'админ инфо';
    });
    Route::get('/color', function (){
        return 'админ цвет';
    });
});

Route::redirect('/admin/web', '/admin/color');

Route::get('/color/{hex}', function ($hex){
    return $hex;
}) -> where('hex', '[0-9a-fA-F]{6}+');
