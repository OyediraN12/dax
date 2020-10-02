<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LanguageController;
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
// dashboard
Route::get('/',
        function () {
            return redirect( route('login') );
        }
    );

// locale Route
Route::get('lang/{locale}',[LanguageController::class,'swap']);

// Authentication  Route
Route::get('/auth-login','AuthenticationController@loginPage')->name('login');
Route::get('/auth-register','AuthenticationController@registerPage');
Route::get('/auth-forgot-password','AuthenticationController@forgetPasswordPage');
Route::get('/auth-reset-password','AuthenticationController@resetPasswordPage');
Route::get('/auth-lock-screen','AuthenticationController@authLockPage');

Route::post('/register', 'AuthController@register')->name('auth.register');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::post('/logout', 'AuthController@logout')->name('auth.logout');

Route::group(
    ['middleware' => ['auth']],
    function () {

        Route::get('/dashboard', 'DashboardController@dashboardHome')
            ->name('backend.dashboard');

        //Application Routes
        Route::get('/app-email','ApplicationController@emailApplication')->name('app.email');
        Route::get('/app-chat','ApplicationController@chatApplication')->name('app.chat');

        Route::post('/email-store','ApplicationController@sendEmail')->name('email.store');

        Route::get('/app-email-show/{email}','ApplicationController@emailApplicationShow')->name('email.show');
        Route::get('/app-chat-show/{user}','ApplicationController@chatApplicationShow')->name('chat.show');

        // Change Request Status
        Route::put('/requests/{id}','ApplicationController@changeRequestStatus')->name('requests.update');

        Route::get('/app-todo','ApplicationController@todoApplication');
        Route::get('/app-calendar','ApplicationController@calendarApplication');
        Route::get('/app-kanban','ApplicationController@kanbanApplication');

        // Messages Route
        Route::resource('messages', 'MessagesController');
        Route::post('storeConversations', 'MessagesController@store')->name('storeConversations');
        Route::get('getConversations', 'MessagesController@getConversations')->name('getConversations');
    }
);

