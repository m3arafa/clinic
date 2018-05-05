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
Route::get('/', 'HomeController@index')->name("main");
Route::get('/minor', 'HomeController@minor')->name("minor");


/*
######### receptions ##########
*/

Route::get('/receptions', function () {

    return view('receptions.index');
});

Route::get('/patients/insert', function () {

    return view('patients.insert');
});


Route::get('/patients/show', function () {

    return view('patients.show');
});

/*
######### doctors ##########
*/

Route::get('/doctors', function () {
    return view('doctors.index');
});

Route::get('/patients/dshow', function () {

    return view('patients.dshow');
});

Route::get('/doctors/patients-search', function () {
    return view('doctors.patients-search');
});

/*
######### pharmacist ##########
*/

Route::get('/pharmacist', function () {
    return view('pharmacist.index');
});

Route::get('/pharmacist/transactions', function () {
    return view('pharmacist.transactions');
});

Route::get('/pharmacist/new-transaction', function () {
    return view('pharmacist.new-transaction');
});

Route::get('/pharmacist/new-transaction-show', function () {
    return view('pharmacist.new-transaction-show');
});

Route::get('/pharmacist/transaction-show', function () {
    return view('pharmacist.transaction-show');
});

Route::get('/pharmacist/suppliers', function () {
    return view('pharmacist.suppliers');
});

Route::get('/pharmacist/supplier-transaction', function () {
    return view('pharmacist.supplier-transaction');
});

Route::get('/pharmacist/supplier-add', function () {
    return view('pharmacist.supplier-add');
});

/*
######### reports ##########
*/

Route::get('/reports/patient-visit-state', function () {
    return view('reports.patient-visit-state');
});

Route::get('/reports/patients-visits-show', function () {
    return view('reports.patients-visits-show');
});

Route::get('/reports/patients-in-reception', function () {
    return view('reports.patients-in-reception');
});

Route::get('/reports/patients-visits', function () {
    return view('reports.patients-visits');
});

Route::get('/reports/pharmacy-inventory', function () {
    return view('reports.pharmacy-inventory');
});

Route::get('/reports/pharmacy-transactions', function () {
    return view('reports.pharmacy-transactions');
});

Route::get('/reports/patient-visit-state-show', function (){
    return view('reports.patient-visit-state-show');
});


/*
######### config admin panel  ##########
*/

Route::get('/admin/add-new-user', function (){
    return view('admin.add-new-user');
});

Route::get('/admin/define-foundations', function (){
    return view('admin.define-foundations');
});

Route::get('/admin/define-nationalities', function (){
    return view('admin.define-nationalities');
});

Route::get('/admin/edit-user-details', function (){
    return view('admin.edit-user-details');
});

Route::get('/admin/new-clinic', function (){
    return view('admin.new-clinic');
});


