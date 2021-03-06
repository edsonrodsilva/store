<?php

require_once('routes/site.php');


Auth::routes();

Route::get('/home', function (){
    return redirect()->route('dashboard');
});

Route::namespace('Auth')->group(function () {
    Route::get('/activate/account/{token}', 'RegisterController@activate')->name('activate-account');
    Route::get('/activate/account/', 'RegisterController@activatePage')->name('activate-page');
});

require_once('routes/configuration.php');
require_once('routes/user.php');
require_once('routes/product.php');
require_once('routes/contact.php');
require_once('routes/order.php');
require_once('routes/quote.php');
require_once('routes/document.php');
require_once('routes/banner.php');
require_once('routes/page.php');
require_once('routes/midia.php');
require_once('routes/support.php');
require_once('routes/theme.php');
require_once('routes/customer.php');


//401
Route::get('/error/401', function (){
    return view('admin.error.401');
});
//admin
Route::middleware(['auth', 'checkstatus', 'suspended'])->namespace('Admin')->prefix('admin')->group(function () {
    //dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    //newsletter
    Route::get('newsletters', [
        'uses'       =>'NewsletterController@index',
        'as'         =>'newsletters',
        'middleware' => 'roles',
        'roles'      => permission_level_four()
    ]);
    Route::get('/datatable-newsletters', 'NewsletterController@getDatatable')->name('datatable-newsletters');
});
Route::middleware(['auth', 'suspended'])->namespace('Admin')->prefix('admin')->group(function () {
    //complete-registration
    Route::get('complete/registration', [
        'uses' => 'ConfigurationController@complete',
        'as' => 'complete-registration',
        'middleware' => 'roles',
        'roles' => permission_level_two()
    ]);
    Route::post('/complete/registration/store', 'ConfigurationController@completeStore')->name('complete-registration-store');
});

//customers
require_once('routes/customer/dashboard.php');
require_once('routes/customer/document.php');
require_once('routes/customer/support.php');