<?php

use Illuminate\Support\Facades\Route;
// check if middleware `localizationRedirect` exists
if (class_exists('Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect')) {
    $mcamaraMiddleWares = ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'];
    $mcameraPrefix = LaravelLocalization::setLocale();
} else {
    $mcamaraMiddleWares = [];
    $mcameraPrefix = '';
}
Route::group(
    [
        'prefix' => $mcameraPrefix,
        'middleware' => $mcamaraMiddleWares
    ], function () {
    Route::get('/', function () {
        return view('welcome');
    });
});
