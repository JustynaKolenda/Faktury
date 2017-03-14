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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('firmadress', 'FirmAdressController',['names' => [
    'index'     => 'firmadress.index',
    'store'     => 'firmadress.store',
    'create'    => 'firmadress.create',
    'update'    => 'firmadress.update',
    'destroy'   => 'firmadress.destroy',
    'show'      => 'firmadress.show',
    'edit'      => 'firmadress.edit',
]]);

Route::resource('firmsender', 'FirmSenderController',['names' => [
    'index'     => 'firmsender.index',
    'store'     => 'firmsender.store',
    'create'    => 'firmsender.create',
    'update'    => 'firmsender.update',
    'destroy'   => 'firmsender.destroy',
    'show'      => 'firmsender.show',
    'edit'      => 'firmsender.edit',
]]);

Route::resource('typefacture', 'TypeFactureController', ['names' => [
    'index'     => 'typefacture.index',
    'store'     => 'typefacture.store',
    'create'    => 'typefacture.create',
    'update'    => 'typefacture.update',
    'destroy'   => 'typefacture.destroy',
    'show'      => 'typefacture.show',
    'edit'      => 'typefacture.edit',
]]);

Route::resource('payment', 'PaymentsController', ['names' => [
    'index'     => 'payment.index',
    'store'     => 'payment.store',
    'create'    => 'payment.create',
    'update'    => 'payment.update',
    'destroy'   => 'payment.destroy',
    'show'      => 'payment.show',
    'edit'      => 'payment.edit',
]]);

Route::resource('vatrate', 'VatRatesController', ['names' => [
    'index'     => 'vatrate.index',
    'store'     => 'vatrate.store',
    'create'    => 'vatrate.create',
    'update'    => 'vatrate.update',
    'destroy'   => 'vatrate.destroy',
    'show'      => 'vatrate.show',
    'edit'      => 'vatrate.edit',
]]);

Route::resource('facture', 'FacturesController', ['names' => [
    'index'     => 'facture.index',
    'store'     => 'facture.store',
    'create'    => 'facture.create',
    'update'    => 'facture.update',
    'destroy'   => 'facture.destroy',
    'show'      => 'facture.show',
    'edit'      => 'facture.edit',
]]);
