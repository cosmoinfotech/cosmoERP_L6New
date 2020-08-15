<?php

//For login and dashboard
Route::get('/','\App\Http\Controllers\LoginController@index');
Route::get('/dashboard','\App\Http\Controllers\LoginController@dashboard');

// For All Master Menus
// A.1. Company Information
Route::get('/companyInfo','\App\Http\Controllers\MasterController@companyInformation');

// A.2. Account Master(A.2.1 to A.2.5)
Route::get('/ledgerMaster','\App\Http\Controllers\MasterController@ledgerMaster');
Route::get('/supplierMaster','\App\Http\Controllers\MasterController@supplierMaster');
Route::get('/groupMaster','\App\Http\Controllers\MasterController@groupMaster');
Route::get('/clientMaster','\App\Http\Controllers\MasterController@clientMaster');
Route::get('/ledgeropeningBalance','\App\Http\Controllers\MasterController@ledgeropeningBalance');

// A.3. Product Master(A.3.1 to A.3.5)
Route::get('/itemMaster','\App\Http\Controllers\MasterController@itemMaster');
Route::get('/categoryMaster','\App\Http\Controllers\MasterController@categoryMaster');
Route::get('/openingStock','\App\Http\Controllers\MasterController@openingStock');
Route::get('/priceList','\App\Http\Controllers\MasterController@priceList');
Route::get('/godownMaster','\App\Http\Controllers\MasterController@godownMaster');

// Tax Master
Route::get('/taxMaster','\App\Http\Controllers\MasterController@taxMaster');



// Narration
Route::get('/narrationMaster','\App\Http\Controllers\MasterController@narrationMaster');

// Setup Menus
Route::get('/setupMaster','\App\Http\Controllers\MasterController@setupMaster');

// Create user
Route::get('/createUser','\App\Http\Controllers\MasterController@createUser');


// For all transaction menus