<?php


Route::get('/', 'MyController@index');

Auth::routes();

Route::get('currency/add', 'currencyController@create')->name('currency.add');
Route::post('currency/generate', 'MyController@generate')->name('generate');
Route::post('currency/order/submit', 'MyController@generate_sub')->name('order.submit2');
Route::post('currency/order/confirm', 'MyController@confirm')->name('confirm');
Route::post('currency/order/confirm/submit', 'MyController@confirm_done')->name('confirm.done');
Route::prefix('admin/')->group(function () {
    Route::get('/', 'HomeController@admin')->name('admin');


    // Route::get('currency/all', 'currencyController@all')->name('currency.add');
    Route::post('currency/submit', 'currencyController@store')->name('currency.submit');
    Route::get('currency/manage', 'currencyController@index')->name('currency.manage');
    Route::get('currency/edit', 'currencyController@edit')->name('currency.edit');
});
