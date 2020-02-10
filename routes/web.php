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




//Route::prefix('front')->group(function (){



    Route::post('/', [
        'uses' => 'FrontEndController@store',
        'as' => 'frontBooking.store'
    ]);

    Route::get('/', [
        'uses' => 'FrontEndController@index',
        'as' => 'index'
    ]);


//});



Route::prefix('events')->group(function (){

    Route::get('/event', [
        'uses' => 'FrontEventsController@index',
        'as' => 'event.index'
    ]);

    Route::post('/', [
        'uses' => 'FrontEventsController@store',
        'as' => 'event.store'
    ]);

});






Route::get('/resort', [
    'uses' => 'ResortController@index',
    'as' => 'resort.index'
]);


Route::get('/gallery', [
    'uses' => 'FrontEndController@viewGallery',
    'as' => 'gallery'
]);

Route::get('/resort/category', [
    'uses' => 'ResortController@roomCategory',
    'as' => 'room.category'
]);

Route::get('/resort/rooms', [
    'uses' => 'ResortController@rooms',
    'as' => 'rooms'
]);

Route::get('/blog', [
    'uses' => 'FrontBlogController@index',
    'as' => 'blog'
]);

Route::get('/contact', [
    'uses' => 'FrontEndController@contact',
    'as' => 'contact'
]);

//////Paystack route starts here
Route::post('/pay', [
    'uses' => 'PaymentController@redirectToGateway',
    'as' => 'pay'
]);
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');
/// Paystack route ends here


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::get('', [
        'uses' => 'Admin\AdminController@index',
        'as' => 'admin.index'
    ]);

    ////////////Bookings Routes//////////

    Route::get('bookings/{id}/approve/',  [
        'uses' => 'Admin\BookingsController@approve',
        'as' => 'booking.approve'
    ]);

    Route::get('bookings/{id}/unapprove/',  [
        'uses' => 'Admin\BookingsController@unapprove',
        'as' => 'booking.unapprove'
    ]);

    Route::resource('bookings', 'Admin\BookingsController');

    Route::get('rooms/{id}/makeUnAvailable',  [
        'uses' => 'Admin\RoomsController@makeUnAvailable',
        'as' => 'rooms.makeUnAvailable'
    ]);

    Route::get('rooms/{id}/makeAvailable',  [
        'uses' => 'Admin\RoomsController@makeAvailable',
        'as' => 'rooms.makeAvailable'
    ]);

    Route::resource('rooms', 'Admin\RoomsController');

    Route::resource('categories', 'Admin\CategoriesController');



    Route::resource('customers', 'Admin\CustomersController');

    ////////////Events Routes//////////

    Route::get('events/{id}/approve/',  [
        'uses' => 'Admin\EventsController@approve',
        'as' => 'event.approve'
    ]);

    Route::get('events/{id}/unapprove/',  [
        'uses' => 'Admin\EventsController@unapprove',
        'as' => 'event.unapprove'
    ]);

    Route::resource('events', 'Admin\EventsController');

    Route::resource('staff', 'Admin\StaffController');



    Route::resource('gallery', 'Admin\GalleryController');

    Route::resource('blog', 'Admin\BlogController');



});
