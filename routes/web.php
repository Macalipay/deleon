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

// ATTENDANCE
Route::group(['prefix' => 'attendance'], function (){
    Route::get          ('/',                            'AttendanceController@index'                         )->name('reason');
    Route::post         ('/time_in/{id}',                'AttendanceController@timeIn'                        )->name('reason');
    Route::post         ('/time_out/{id}',               'AttendanceController@timeOut'                       )->name('reason');
    Route::get          ('/view',                        'AttendanceController@view'                          )->name('reason');
    Route::post         ('/save',                        'AttendanceController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'AttendanceController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'AttendanceController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'AttendanceController@destroy'                        )->name('reason_update');
});

// CUSTOMER
Route::group(['prefix' => 'customer'], function (){
    Route::get          ('/',                            'CustomerController@index'                          )->name('selection');
    Route::post         ('/save',                        'CustomerController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'CustomerController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'CustomerController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'CustomerController@destroy'                        )->name('reason_update');
});

// PRODUCT
Route::group(['prefix' => 'product'], function (){
    Route::get          ('/',                            'ProductController@index'                          )->name('selection');
    Route::post         ('/save',                        'ProductController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'ProductController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'ProductController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ProductController@destroy'                        )->name('reason_update');
});

// TASK 
Route::group(['prefix' => 'task'], function (){
    Route::get          ('/',                            'TaskController@index'                          )->name('selection');
    Route::post         ('/save',                        'TaskController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'TaskController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'TaskController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'TaskController@destroy'                        )->name('reason_update');
});

// EXPENSE
Route::group(['prefix' => 'expense'], function (){
    Route::get          ('/',                            'ExpenseController@index'                          )->name('selection');
    Route::get          ('/all',                         'ExpenseController@all_expense'                    )->name('selection');
    Route::post         ('/daily',                       'ExpenseController@daily_expense'                  )->name('reason');
    Route::post         ('/save',                        'ExpenseController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'ExpenseController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'ExpenseController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ExpenseController@destroy'                        )->name('reason_update');
});

// EXPENSE TYPE
Route::group(['prefix' => 'expense_type'], function (){
    Route::get          ('/',                            'ExpenseTypeController@index'                          )->name('selection');
    Route::post         ('/save',                        'ExpenseTypeController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'ExpenseTypeController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'ExpenseTypeController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ExpenseTypeController@destroy'                        )->name('reason_update');
});

// PAYMENT TYPE
Route::group(['prefix' => 'payment_type'], function (){
    Route::get          ('/',                            'PaymentTypeController@index'                          )->name('selection');
    Route::post         ('/save',                        'PaymentTypeController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'PaymentTypeController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'PaymentTypeController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'PaymentTypeController@destroy'                        )->name('reason_update');
});

// SALES ACCOUNT
Route::group(['prefix' => 'sales_account'], function (){
    Route::get          ('/',                            'SalesAccountController@index'                          )->name('selection');
    Route::post         ('/save',                        'SalesAccountController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'SalesAccountController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'SalesAccountController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'SalesAccountController@destroy'                        )->name('reason_update');
});

// USERS
Route::group(['prefix' => 'user'], function (){
    Route::get          ('/',                            'UserController@index'                          )->name('selection');
    Route::post         ('/save',                        'UserController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'UserController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'UserController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'UserController@destroy'                        )->name('reason_update');
});

// COMPANY
Route::group(['prefix' => 'company'], function (){
    Route::get          ('/',                            'CompanyController@index'                          )->name('selection');
    Route::post         ('/save',                        'CompanyController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'CompanyController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'CompanyController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'CompanyController@destroy'                        )->name('reason_update');
});

// SELECTION
Route::group(['prefix' => 'selection'], function (){
    Route::get          ('/',                            'SelectionController@index'                          )->name('selection');
    Route::post         ('/save',                        'SelectionController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'SelectionController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'SelectionController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'SelectionController@destroy'                        )->name('reason_update');
});

// CONSUMABLES
Route::group(['prefix' => 'consumable'], function (){
    Route::get          ('/',                            'ConsumableController@index'                          )->name('selection');
    Route::post         ('/save',                        'ConsumableController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'ConsumableController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'ConsumableController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ConsumableController@destroy'                        )->name('reason_update');
});

// SHOP
Route::group(['prefix' => 'shop'], function (){
    Route::get          ('/',                            'ShopController@index'                          )->name('selection');
    Route::post         ('/save',                        'ShopController@store'                          )->name('reason');
    Route::get          ('/edit/{id}',                   'ShopController@edit'                           )->name('reason');
    Route::post         ('/update/{id}',                 'ShopController@update'                         )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ShopController@destroy'                        )->name('reason_update');
});

// CONSUMABLES SALES
Route::group(['prefix' => 'consumable_sales'], function (){
    Route::get          ('/',                            'ConsumableSaleController@index'                      )->name('selection');
    Route::post         ('/save',                        'ConsumableSaleController@store'                      )->name('reason');
    Route::get          ('/edit/{id}',                   'ConsumableSaleController@edit'                       )->name('reason');
    Route::post         ('/update/{id}',                 'ConsumableSaleController@update'                     )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ConsumableSaleController@destroy'                    )->name('reason_update');
});

// RUSH FEE
Route::group(['prefix' => 'rushfee'], function (){
    Route::get          ('/',                            'RushFeeController@index'                              )->name('selection');
    Route::post         ('/save',                        'RushFeeController@store'                              )->name('reason');
    Route::get          ('/edit/{id}',                   'RushFeeController@edit'                               )->name('reason');
    Route::post         ('/update/{id}',                 'RushFeeController@update'                             )->name('reason_update');
    Route::get          ('/destroy/{id}',                'RushFeeController@destroy'                            )->name('reason_update');
});

// RUSH FEE
Route::group(['prefix' => 'consumable_transaction'], function (){
    Route::get          ('/',                            'ConsumableHeaderController@index'                              )->name('selection');
    Route::get          ('/purchase_order/{id}',         'ConsumableHeaderController@purchase_order'                     )->name('reason');
    Route::post         ('/save',                        'ConsumableHeaderController@store'                              )->name('reason');
    Route::get          ('/edit/{id}',                   'ConsumableHeaderController@edit'                               )->name('reason');
    Route::post         ('/update/{id}',                 'ConsumableHeaderController@update'                             )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ConsumableHeaderController@destroy'                            )->name('reason_update');
});

// RUSH FEE
Route::group(['prefix' => 'purchase_order'], function (){
    Route::get          ('/',                            'ConsumableDetailsController@index'                              )->name('purchase_order_url');
    Route::get          ('/edit/{id}',                   'ConsumableDetailsController@edit'                               )->name('reason');
    Route::post         ('/update/{id}',                 'ConsumableDetailsController@update'                             )->name('reason_update');
    Route::get          ('/destroy/{id}',                'ConsumableDetailsController@destroy'                            )->name('reason_update');
    Route::get          ('/get_price/{id}',              'ConsumableDetailsController@getPrice'                          )->name('reason');
    Route::get          ('/add_order',                   'ConsumableDetailsController@addOrder'                          )->name('reason');
    Route::get          ('/list_order/{id}',             'ConsumableDetailsController@listOrder'                          )->name('reason');
    Route::post         ('/view/{id}',                   'ConsumableDetailsController@view'                          )->name('purchase_order.view');
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

// CLIENT
Route::group(['prefix' => 'client'], function (){
    Route::get          ('/',                            'ClientController@index'                          )->name('client');
    Route::post         ('/save',                        'ClientController@store'                          )->name('client_store');
    Route::get          ('/edit/{id}',                   'ClientController@edit'                           )->name('client_edit');
    Route::post         ('/update/{id}',                 'ClientController@update'                         )->name('client_update');
    Route::get          ('/destroy/{id}',                'ClientController@destroy'                        )->name('client_destroy');
});

// PAYMENT
Route::group(['prefix' => 'payment'], function (){
    Route::get          ('/',                            'PaymentController@index'                          )->name('client');
    Route::post         ('/save',                        'PaymentController@store'                          )->name('client_store');
    Route::get          ('/edit/{id}',                   'PaymentController@edit'                           )->name('client_edit');
    Route::post         ('/update/{id}',                 'PaymentController@update'                         )->name('client_update');
    Route::get          ('/destroy/{id}',                'PaymentController@destroy'                        )->name('client_destroy');
});

// TUTORIAL
Route::group(['prefix' => 'tutorial'], function (){
    Route::get          ('/',                            'TutorialController@index'                          )->name('tutorial');
    Route::post         ('/save',                        'TutorialController@store'                          )->name('tutorial_store');
    Route::get          ('/edit/{id}',                   'TutorialController@edit'                           )->name('tutorial_edit');
    Route::post         ('/update/{id}',                 'TutorialController@update'                         )->name('tutorial_update');
    Route::get          ('/destroy/{id}',                'TutorialController@destroy'                        )->name('tutorial_destroy');
});

// SUPPORT
Route::group(['prefix' => 'support'], function (){
    Route::get          ('/',                            'SupportController@index'                          )->name('support');
    Route::post         ('/save',                        'SupportController@store'                          )->name('support_store');
    Route::get          ('/edit/{id}',                   'SupportController@edit'                           )->name('support_edit');
    Route::post         ('/update/{id}',                 'SupportController@update'                         )->name('support_update');
    Route::get          ('/destroy/{id}',                'SupportController@destroy'                        )->name('support_destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', function(){
    return 'Wellcome Admin!';
})->name('admin.dashboard');
