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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('reservations', 'ReservationsController');

// room types
Route::resource('room-types', 'RoomTypeController');

// rooms
Route::resource('rooms', 'RoomController');


// bookings
Route::resource('bookings', 'BookingController');
Route::post('bookings/search_result', 'BookingController@search');
Route::post('bookings/create_customer', 'BookingController@addCustomer');




//Route::get('rooms', 'BookingController@test')->name('test');

// Route::get('/reservations', 'ReservationsController@index');

// Route::get('reservations', function () {
//     //whatever
// })->middleware('auth');
// Route::get('/reservations', function () {
//     return view('reservations');
// });

Route::get('foo', function () {
    return 'Hello World';
})->name('foo');