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
Route::get('/openingBalance','\App\Http\Controllers\MasterController@openingBalance');

// A.3. Product Master(A.3.1 to A.3.*)
Route::get('/itemMaster','\App\Http\Controllers\MasterController@itemMaster');




// For all transaction menus