<?php
Route::get('/admin/dashboard', function(){
    return 'Welcome Admin!';
})->name('admin.dashboard');


// SELECTION
Route::group(['prefix' => 'company'], function (){
    Route::get          ('/',                            'CompaniesController@index'                          )->name('company');
    Route::post         ('/save',                        'CompaniesController@store'                          )->name('company_save');
    Route::get          ('/edit/{id}',                   'CompaniesController@edit'                           )->name('company_edit');
    Route::post         ('/update/{id}',                 'CompaniesController@update'                         )->name('company_update');
    Route::get          ('/destroy/{id}',                'CompaniesController@destroy'                        )->name('company_destroy');
});