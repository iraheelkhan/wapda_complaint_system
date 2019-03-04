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
Route::middleware('can:viewD')->group( function(){
	Route::get('testingAPI', 'ComplaintController@index');
});
Route::get('/', 'ComplaintController@dashboard')->name('Dashboard');
//Route::get('testingAPI', 'ComplaintController@index');
// Route::get('/', function () {
//     return view('welcome');
// });

	// Error page code goes here
	Route::get('404error', function(){
		return view('errors.404_error');
	})->name('error');


// manual login code goes here
Route::get('log', 'Login@show')->name('log');
Route::post('log', 'Login@login')->name('yourlogin');
Route::get('loggingout', 'Login@logout')->name('loggingout');

//COmplaint all routes started here
Route::get('complaint', 'ComplaintController@list')->name('ComplaintList');
Route::get('complaint/add', 'ComplaintController@add')->name('ComplaintAdd');
Route::post('complaint/store', 'ComplaintController@store_complaint')->name('store_complaint');
Route::delete('complaint/destroy/', 'ComplaintController@destroy')->name('DeleteComplaint');
Route::get('complaint/view/{id}', 'ComplaintController@view')->name('ComplaintView');
Route::post('complaint/status/', 'ComplaintController@updateStatus')->name('ComplaintStatus');
// ===>> Complaints of other officers goes here
Route::get('complaint/open', 'ComplaintController@list_open')->name('ComplaintListOpen');

Route::get('complaint/division/open', 'ComplaintController@list_open_division')->name('ComplaintListOpenDivision');

// other details, city, division code goes here
//city code is here
Route::get('cities', 'CityController@list')->name('CityList');
Route::get('city/add', 'CityController@add')->middleware('can:viewD')->name('CityAdd');
Route::post('city/store', 'CityController@store_City')->middleware('can:viewD')->name('store_city');
Route::get('city/delete/{id}', 'CityController@delete')->middleware('can:viewD')->name('CityDelete');

//division code is here
Route::get('divisions', 'DivisionController@list')->middleware('can:viewD')->name('DivisionList');
//Route::get('divisions', 'DivisionController@list')->name('DivisionList');
Route::get('division/add', 'DivisionController@add')->middleware('can:viewD')->name('DivisionAdd');
Route::post('division/store', 'DivisionController@store_division')->middleware('can:viewD')->name('store_division');
Route::get('division/edit/{id}', 'DivisionController@edit')->middleware('can:viewD')->name('DivisionEdit');
Route::post('division/update', 'DivisionController@update')->middleware('can:viewD')->name('DivisionUpdate');
Route::get('division/delete/{id}', 'DivisionController@delete')->middleware('can:viewD')->name('DivisionDelete');


//sub-division code is here
Route::get('subdivisions', 'SubDivisionController@list')->middleware('can:viewD')->name('SubDivisionList');
Route::get('subdivision/add', 'SubDivisionController@add')->middleware('can:viewD')->name('SubDivisionAdd');
Route::get('subdivision/edit/{id}', 'SubDivisionController@edit')->middleware('can:viewD')->name('SubDivisionEdit');
Route::post('subdivision/store', 'SubDivisionController@store_subdivision')->middleware('can:viewD')->name('store_subdivision');
Route::post('subdivision/update', 'SubDivisionController@update')->middleware('can:viewD')->name('SubDivisionUpdate');
// Route::get('subdivision/delete/{id}', 'SubDivisionController@delete')->name('SubDivisionDelete');
Route::delete('subdivision/destroy/', 'SubDivisionController@destroy')->middleware('can:viewD')->name('DeleteSubDivision');
Route::get('subdivision/listing/', 'SubDivisionController@datatable')->middleware('can:viewD')->name('TableSubDivision');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('showlogs', 'ComplaintController@logshowactivity');



// manage user
Route::get('users', 'ProfileController@manage_users_show')->name('ManageUsers');
Route::get('users/add', 'ProfileController@add_user')->name('AddUser');
Route::post('users/store', 'ProfileController@store_user')->middleware('can:viewD')->name('UserStore');
Route::get('users/edit/{id}', 'ProfileController@edit')->middleware('can:viewD')->name('UserEdit');
Route::post('users/update', 'ProfileController@update')->middleware('can:viewD')->name('UserUpdate');
Route::get('users/delete/{id}', 'ProfileController@delete')->middleware('can:viewD')->name('UserDelete');

// android api goes here
// i repeat, API goes here

Route::get('api/complaints/list/{id}', 'ComplaintController@showByIdAPI' );
Route::post('api/complaints/add', 'ComplaintController@store_complaintAPI' );
Route::get('api/complaints/add1', 'ComplaintController@index' );