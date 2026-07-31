<?php

use App\Http\Controllers\block_with_tovar;
use App\Http\Controllers\proverka_registr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\create_advertisements;
use App\Http\Controllers\search;
use App\Http\Controllers\category_tovar;


Route::get('/', function () {
    return view('static1.registr');
})->name('registr');

Route::post('/registr', [proverka_registr::class, 'store'])->name('registr.store');

Route::get('/glavnaya', function () {
    return view('static1.glavnaya');
})->name('home');

Route::get('/oshibka', function () {
    return view('static1.oshibka');
})->name('error');

Route::get('/create', function () {
    return view('static1.create');
})->name('create');

Route::get('/basket', function () {
    return view('static1.basket');
})->name('basket');

Route::get('/my_notices', function () {
    return view('static1.my_notices');
})->name('my_notices');

Route::get('/selected', function () {
    return view('static1.selected');
})->name('selected');

Route::post('/store-ad', [create_advertisements::class, 'store'])->name('ad.store');

Route::get('/glavnaya', [block_with_tovar::class, 'index'])->name('home');

Route::get('/posuda', [category_tovar::class, 'posuda'])->name('posuda');

Route::get('/sport', [category_tovar::class, 'sport'])->name('sport');

Route::get('/kantselarya', [category_tovar::class, 'kantselarya'])->name('kantselarya');

Route::get('/tekstyle', [category_tovar::class, 'tekstyle'])->name('tekstyle');

Route::get('/peryferya', [category_tovar::class, 'peryferya'])->name('peryferya');

Route::get('/gadjet', [category_tovar::class, 'gadjet'])->name('gadjet');

Route::get('/merch', [category_tovar::class, 'merch'])->name('merch');

Route::get('/nastolky', [category_tovar::class, 'nastolky'])->name('nastolky');

Route::get('/gameing', [category_tovar::class, 'gameing'])->name('gameing');

Route::get('/tvorchestvo', [category_tovar::class, 'tvorchestvo'])->name('tvorchestvo');

Route::get('/odejda', [category_tovar::class, 'odejda'])->name('odejda');

Route::get('/uchebniky', [category_tovar::class, 'uchebniky'])->name('uchebniky');

Route::get('/komplect', [category_tovar::class, 'komplect'])->name('komplect');

Route::get('/kursovye', [category_tovar::class, 'kursovye'])->name('kursovye');

Route::get('/technika', [category_tovar::class, 'technika'])->name('technika');





Route::get('/home2', function () {
    return view('static2.home_page');
})->name('home.v2');

Route::get('/basket2', function () {
    return view('static2.basket');
})->name('basket.v2');

Route::get('/create2', function () {
    return view('static2.create');
})->name('create.v2');

Route::get('/my_notices2', function () {
    return view('static2.my_notices');
})->name('my_notices.v2');

Route::get('/selected2', function () {
    return view('static2.selected');
})->name('selected.v2');

Route::get('/item2', function () {
    return view('static2.item_page');
})->name('item.v2');

Route::get('/registr2', function () {
    return view('static2.registr_blade');
})->name('registr.v2');

Route::get('/toggle-theme', function () {
    return redirect()->route('home.v2');
})->name('toggle-theme');

Route::get('/posuda2', [category_tovar::class, 'posuda2'])->name('posuda2');

Route::get('/sport2', [category_tovar::class, 'sport2'])->name('sport2');

Route::get('/kantselarya2', [category_tovar::class, 'kantselarya2'])->name('kantselarya2');

Route::get('/tekstyle2', [category_tovar::class, 'tekstyle2'])->name('tekstyle2');

Route::get('/peryferya2', [category_tovar::class, 'peryferya2'])->name('peryferya2');

Route::get('/gadjet2', [category_tovar::class, 'gadjet2'])->name('gadjet2');

Route::get('/merch2', [category_tovar::class, 'merch2'])->name('merch2');

Route::get('/nastolky2', [category_tovar::class, 'nastolky2'])->name('nastolky2');

Route::get('/gameing2', [category_tovar::class, 'gameing2'])->name('gameing2');

Route::get('/tvorchestvo2', [category_tovar::class, 'tvorchestvo2'])->name('tvorchestvo2');

Route::get('/odejda2', [category_tovar::class, 'odejda2'])->name('odejda2');

Route::get('/uchebniky2', [category_tovar::class, 'uchebniky2'])->name('uchebniky2');

Route::get('/komplect2', [category_tovar::class, 'komplect2'])->name('komplect2');

Route::get('/kursovye2', [category_tovar::class, 'kursovye2'])->name('kursovye2');

Route::get('/technika2', [category_tovar::class, 'technika2'])->name('technika2');















// Роут для формы светлой темы (static1)
Route::post('/store-ad', [create_advertisements::class, 'store'])->name('ad.store');

// Роут для формы тёмной темы (static2) — использует ТОТ ЖЕ контроллер и метод!
Route::post('/store-ad-dark', [create_advertisements::class, 'store'])->name('ad.store.v2');

Route::get('/home', [App\Http\Controllers\block_with_tovar::class, 'index'])->name('home');
Route::get('/home2', [App\Http\Controllers\block_with_tovar::class, 'indexDark'])->name('home.v2');

Route::get('/my_notices', [\App\Http\Controllers\mynotices::class, 'myNotices'])->name('my_notices');

// Роут для поиска объявлений
Route::get('/search', [search::class, 'search'])->name('ads.search');
