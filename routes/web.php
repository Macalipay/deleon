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

Route::get('/', 'WebsiteController@index')->name('website');

Route::get('/calc', function () {
    return view('backend/pages/calculator/calculator');
});

Route::post('change-password', 'UserController@changepass')->name('change.password');
Route::post('change-photo', 'UserController@changePicture')->name('change.picture');

// DASHBOARD
Route::group(['prefix' => 'dashboard'], function (){
    Route::get          ('/',                            'DashboardController@index'                          )->name('reason');
    Route::post         ('/save',                        'DashboardController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'DashboardController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'DashboardController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'DashboardController@destroy'                        )->name('reason_update');
    Route::get          ('/filtering/{date}',            'DashboardController@filtering'                      )->name('reason_update');
    Route::get          ('/payment/{date}',              'DashboardController@payment'                        )->name('reason_update');
    Route::get          ('/monthly',                     'DashboardController@monthly'                        )->name('reason_update');
    Route::get          ('/income_expense',              'DashboardController@incomeExpense'                  )->name('reason_update');
    Route::get          ('/piechart',                    'DashboardController@piechart'                       )->name('reason_update');
    Route::get          ('/piechart_masterfile',         'DashboardController@piechart_masterfile'            )->name('reason_update');
    Route::get          ('/bargraph',                    'DashboardController@bargraph'                       )->name('reason_update');
    Route::get          ('/bargraph_masterfile',         'DashboardController@bargraph_masterfile'            )->name('reason_update');
    Route::get          ('/bargraph_expense',            'DashboardController@bargraph_expense'               )->name('reason_update');
    Route::get          ('/masterfile',                  'DashboardController@masterfile'                     )->name('reason_update');
});

// USERS
Route::group(['prefix' => 'user'], function (){
    Route::get          ('/',                            'UserController@index'                          )->name('selection');
    Route::post         ('/save',                        'UserController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'UserController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'UserController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'UserController@destroy'                        )->name('reason_update');
});

// ORDER
Route::group(['prefix' => 'order'], function (){
    Route::post         ('/show/{id}',                        'OrderController@show'                          )->name('reason');
});

// SHOP
Route::group(['prefix' => 'shop'], function (){
    Route::get          ('/',                            'ShopController@index'                          )->name('selection');
    Route::post         ('/save',                        'ShopController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'ShopController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'ShopController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ShopController@destroy'                        )->name('reason_update');
    Route::get          ('/add_to_cart',                 'ShopController@addCart'                        )->name('reason_update');
    Route::get          ('/shopping_bag',                'ShopController@shopping_bag'                   )->name('reason_update');
    Route::get          ('/check_out',                   'ShopController@check_out'                   )->name('reason_update');
    Route::get          ('/login',                       'ShopController@login'                          )->name('reason_update');
    Route::get          ('/register',                    'ShopController@register'                       )->name('reason_update');
    Route::get          ('/history',                     'ShopController@history'                        )->name('reason_update');
});

// INVENTORY
Route::group(['prefix' => 'inventory'], function (){
    Route::get          ('/',                            'InventoryController@index'                          )->name('selection');
    Route::post         ('/add_stock',                   'InventoryController@add_stock'                      )->name('selection');
    Route::get          ('/view_add_stock',              'InventoryController@view_add_stock'                 )->name('selection');
    Route::get          ('/stock/edit/{id}',             'InventoryController@stock_edit'                     )->name('selection');
    Route::post         ('/save',                        'InventoryController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'InventoryController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'InventoryController@update'                         )->name('reason_update');
    Route::post         ('/stock/update/{id}',           'InventoryController@stock_update'                   )->name('reason_update');
    Route::get          ('/destroy/{id}',                'InventoryController@destroy'                        )->name('reason_update');
    Route::get          ('/stock/destroy/{id}',          'InventoryController@stock_destroy'                  )->name('reason_update');
});

// DAILY SALES
Route::group(['prefix' => 'daily_sales'], function (){
    Route::get          ('/',                               'DailySaleController@index'                          )->name('selection');
    Route::get          ('/all',                            'DailySaleController@all'                            )->name('reason');
    Route::post         ('/save',                           'DailySaleController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                      'DailySaleController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                    'DailySaleController@update'                         )->name('reason_update');
    Route::post         ('/productionStatus/{id}',          'DailySaleController@productionStatus'               )->name('reason_update');
    Route::post         ('/paymentStatus/{id}',             'DailySaleController@paymentStatus'                  )->name('reason_update');
    Route::get          ('/destroy/{id}',                   'DailySaleController@destroy'                        )->name('reason_update');
});

// PAYMENT
Route::group(['prefix' => 'payment'], function (){
    Route::get          ('/',                            'PaymentController@index'                          )->name('client');
    Route::post         ('/save',                        'PaymentController@store'                          )->name('client_store');
    Route::get          ('/edit/{id}',                   'PaymentController@edit'                           )->name('client_edit');
    Route::post         ('/update/{id}',                 'PaymentController@update'                         )->name('client_update');
    Route::get          ('/destroy/{id}',                'PaymentController@destroy'                        )->name('client_destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', function(){
    return 'Wellcome Admin!';
})->name('admin.dashboard');
