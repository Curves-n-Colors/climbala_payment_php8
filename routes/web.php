<?php

use App\Http\Controllers\Backend\PaymentSetupController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('backend.dash.welcome');
});

Auth::routes(['register' => false, 'verify' => false]);

Route::get('/cache-clear', function () {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
});


Route::namespace('Auth')->middleware('auth')->group(function () {

    Route::get('/secret/logout', 'LoginController@secret_logout')->name('secret.logout');
    Route::get('/password/change', 'PasswordController@change')->name('password.change');
    Route::post('/password/changing', 'PasswordController@changing')->name('password.changing');
    Route::post('/password/master/changing', 'PasswordController@master_changing')->name('password.master.changing');
});

Route::namespace('Backend')->middleware('auth')->group(function () {

    Route::get('/dashboard', 'DashController@index')->name('dash.index');

    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::patch('/profile/update', 'UserController@profile_update')->name('profile.update');

    Route::get('/users', 'UserController@index')->name('user.index');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/user/store', 'UserController@store')->name('user.store');
    Route::get('/user/{uuid}/edit', 'UserController@edit')->name('user.edit');
    Route::put('/user/{uuid}/update', 'UserController@update')->name('user.update');
    Route::put('/user/{uuid}/change-status', 'UserController@change_status')->name('user.change.status');

    Route::get('/clients', 'ClientController@index')->name('client.index');
    Route::get('/client/create', 'ClientController@create')->name('client.create');
    Route::post('/client/store', 'ClientController@store')->name('client.store');
    Route::get('/client/{uuid}/edit', 'ClientController@edit')->name('client.edit');
    Route::put('/client/{uuid}/update', 'ClientController@update')->name('client.update');
    Route::put('/client/{uuid}/change-status', 'ClientController@change_status')->name('client.change.status');

    Route::get('/emails', 'EmailController@index')->name('email.index');

    Route::get('/payment/setups', 'PaymentSetupController@index')->name('payment.setup.index');
    Route::get('/payment/setup/create', 'PaymentSetupController@create')->name('payment.setup.create');
    Route::post('/payment/setup/store', 'PaymentSetupController@store')->name('payment.setup.store');
    Route::get('/payment/setup/{uuid}/edit', 'PaymentSetupController@edit')->name('payment.setup.edit');
    Route::put('/payment/setup/{uuid}/update', 'PaymentSetupController@update')->name('payment.setup.update');
    Route::put('/payment/setup/{uuid}/change-status', 'PaymentSetupController@change_status')->name('payment.setup.change.status');
    Route::put('/payment/setup/{uuid}/entry', 'PaymentSetupController@entry')->name('payment.setup.entry');
    Route::put('/payment/setup/{uuid}/send', 'PaymentSetupController@send')->name('payment.setup.send');

    Route::post('/payment-setup/pin-verify', 'PaymentSetupController@verifyPin')->name('payment.setup.verify');

    Route::get('/payment/entries', 'PaymentEntryController@index')->name('payment.entry.index');
    Route::put('/payment/entry/{uuid}/change-status', 'PaymentEntryController@change_status')->name('payment.entry.change.status');
    Route::put('/payment/entry/{uuid}/send', 'PaymentEntryController@send')->name('payment.entry.send');
    Route::put('/payment/entry/{uuid}/copy', 'PaymentEntryController@copy')->name('payment.entry.copy');

    Route::get('/payment/details', 'PaymentDetailController@index')->name('payment.detail.index');
    Route::put('/payment/detail/{uuid}/refund', 'PaymentDetailController@refund')->name('payment.detail.refund');
    Route::get('/payment/detail/{uuid}/invoice', 'PaymentDetailController@invoice_download')->name('payment.detail.invoice');
});

Route::namespace('Frontend')->middleware("throttle:1000,15")->group(function () {
    // dd(config('app.addons.payment_options.hbl.frontend_response_uri'));
    Route::get('/pay/{encrypt}', 'PayController@index')->name('pay.index');
    Route::put('/pay/{encrypt}', 'PayController@proceed')->name('pay.proceed');
    Route::post('/pay/nibl/confirm', 'PayController@nibl_confirm')->name('pay.nibl.confirm');

    Route::post(config('app.addons.payment_options.hbl.frontend_response_uri'), 'PayController@hblFrontendResponse');
    Route::any(config('app.addons.payment_options.hbl.backend_response_uri'), 'PayController@hblBackendResponse');

    Route::get('/result/success/{encrypt}', 'ResultController@success')->name('result.success');
    Route::get('/result/error/{code}', 'ResultController@error')->name('result.error');
    Route::get('/result/failed', 'ResultController@failed')->name('result.failed');
    Route::get('/result/test', 'ResultController@test')->name('result.test');
    Route::any('/result/cancellation', 'ResultController@cancellation')->name('result.cancellation');
    Route::get('/result/backend', 'ResultController@test')->name('result.backend'); 
});

Route::namespace('CronJob')->middleware("throttle:100,15")->group(function () {

    Route::get('/cronjob/payment/onetime/{encrypt}', 'PaymentController@onetime');
    Route::get('/cronjob/payment/yearly/{encrypt}', 'PaymentController@yearly');
    Route::get('/cronjob/payment/monthly/{encrypt}', 'PaymentController@monthly');
    Route::get('/cronjob/support/flushing/{encrypt}', 'PaymentController@flushing');

    Route::get('/cronjob/one-week/notify/onetime/{encrypt}', 'OneWeekNotifyController@onetime');
    Route::get('/cronjob/one-week/notify/yearly/{encrypt}', 'OneWeekNotifyController@yearly');
    Route::get('/cronjob/one-week/notify/monthly/{encrypt}', 'OneWeekNotifyController@monthly');

    Route::get('/cronjob/one-month/notify/onetime/{encrypt}', 'OneMonthNotifyController@onetime');
    Route::get('/cronjob/one-month/notify/yearly/{encrypt}', 'OneMonthNotifyController@yearly');

    // Route::get('/cronjob/one-month/notify/monthly/{encrypt}', 'OneMonthNotifyController@monthly');
    // Route::get('/cronjob/support/encrypting/{text}', 'PaymentController@encrypting');
    // Route::get('/cronjob/test', 'PaymentController@test');
});

Route::fallback(function () {
    abort(404);
});
