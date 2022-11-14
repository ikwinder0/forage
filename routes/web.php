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

// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/', function () {

//     if (Auth::check())
//     {
//         return view('login');
//     }
//     else 
//     {
//         return redirect('dashboard');
//     }
// });


Route::get('clear',function(){

Artisan::call('optimize:clear');
Artisan::call('route:clear');
Artisan::call('config:clear');
// echo \Artisan::call('QRCode:Create ajay ajay');

return 'Cleared Cache!';

});

/* admin login */

Route::get('forage/login','AdminLoginController@index')->name('login');
Route::post('forage/admin-login','AdminLoginController@login')->name('admin-login');
Route::get('forage/logout', 'AdminLoginController@logout');

Route::post('forage/shortlink/uplodbyexcel','DashboardController@shortlink_store_ajax');

//  dashboard route
Route::group(['middleware' => ['auth']], function() {
    Route::get('forage/dashboard', 'DashboardController@dashboard');
    Route::get('forage/change-password', 'DashboardController@changePasswordView');
    Route::post('forage/change-password', 'DashboardController@changePassword');
    Route::get('forage/import-excel', 'DashboardController@import_excel');
    Route::get('forage/imported-records', 'DashboardController@list');
    Route::get('forage/imported-records/{id}/view', 'DashboardController@viewLink');
    Route::get('forage/imported-records/{id}/edit', 'DashboardController@editLink');
    Route::post('forage/imported-records/{id}/update', 'DashboardController@updateLink');
    Route::get('forage/imported-records/{id}/delete', 'DashboardController@deleteLink');
    Route::get('forage/export-links', 'DashboardController@exportLinksCsv');
    Route::post('forage/export-all-analytics', 'DashboardController@exportAllAnalytics');
    Route::get('forage/export-single-analytics/{id}', 'DashboardController@exportSingleAnalytics');
    Route::get('forage/analytics', 'DashboardController@Analytics');
    Route::get('forage/analytics/{id}', 'DashboardController@singleAnalytics');
    Route::get('forage/download/{link_id}', 'DashboardController@downloadQr');
    Route::get('forage/qr-configurations', 'ConfigurationController@qrConfiguration')->name('qrConfiguration');
    Route::post('forage/update-qr-configurations', 'ConfigurationController@updateQrConfiguration')->name('updateQrConfig');
    // Route::post('forage/shortlink/uplodbyexcel','DashboardController@shortlink_store_ajax');

});

Route::get('{unique_code?}', 'DashboardController@generateAnalytics');