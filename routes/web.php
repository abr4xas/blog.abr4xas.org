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

Route::get('/', 'HomeController\HomeController@index')->name('main');

Route::get('acerca-de-este-blog', function () {
    return view('front.partials.about.about');
})->name('about');

Route::get('/category/{category}', [
    'only' => ['show'],
    'uses' => 'HomeController\CategoryController@show'
])->name('category.show');

Route::group(['prefix' => 'amp'], function () {
    Route::get('/', 'AMP\AmpController@index');
    Route::get('/{post}', [
        'only'  => ['show'],
        'as'    => 'posts.show',
        'uses'  => 'AMP\AmpController@showPost'
    ]);
});

Route::get('{post}', [
    'only'  => ['show'],
    'as'    => 'posts.show',
    'uses'  => 'HomeController\HomeController@show'
]);

Route::get('/feeds/all.atom.xml', 'HomeController\HomeController@feed');
Route::get('/feeds/json', 'HomeController\HomeController@jsonPost')->name('json.feed');
Route::get('/p/sitemap', 'HomeController\HomeController@sitemap');


Route::group(['prefix' => 'auth'], function () {
    Auth::routes();
});
