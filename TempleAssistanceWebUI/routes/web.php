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


//Route::get('/', function () {
//    return view('userLogin');
//});
Route::get('/','Common\LoginController@index');
//*********************************************************************Temple

Route::post('/userLogin','Common\LoginController@userLogin');

Route::get('/templeDaneSchedule','Temple\DaneScheduleManageController@index');
Route::get('/templeDaneSchedule/{id}','Temple\DaneScheduleManageController@find');
Route::post('/templeAddDaneSchedule','Temple\DaneScheduleManageController@addDaneSchedule');
Route::post('/templeUpdateDaneSchedule','Temple\DaneScheduleManageController@updateDaneSchedule');
Route::post('/templeDeleteDaneSchedule','Temple\DaneScheduleManageController@deleteDaneSchedule');


Route::get('/templeDashboard','Temple\DashboardController@index');

Route::get('/templeDhammaSchool','Temple\DSchManageController@index');
Route::get('/templeDhammaEvent','Temple\DSEventManageController@index');

Route::get('/templeEventManage','Temple\EventManageController@index');
Route::get('/templeEventManage/{id}','Temple\EventManageController@find');
Route::post('/templeAddEvent','Temple\EventManageController@addEvent');
Route::post('/templeUpdateEvent','Temple\EventManageController@updateEvent');
Route::post('/templeDeleteEvent','Temple\EventManageController@deleteEvent');

Route::get('/templeNews','Temple\NewsManageController@index');
Route::get('/templeNews/{id}','Temple\NewsManageController@find');
Route::post('/templeAddNews','Temple\NewsManageController@addNews');
Route::post('/templeUpdateNews','Temple\NewsManageController@updateNews');
Route::post('/templeDeleteNews','Temple\NewsManageController@deleteNews');



Route::get('/templeProfile','Temple\ProfileUpdateController@index');
//Route::get('/templeProfile2','Temple\ProfileUpdateController@index2');
Route::get('/templeRegistration','Temple\RegistrationController@index');

//Route::get('/templeWelfareSociety','Temple\WSEventManageController@index');
//Route::get('/templeWelfareEvent','Temple\WSocManageController@index');

Route::get('/templeWelfareSociety','Temple\WSocManageController@index');
Route::get('/templeWelfareEvent','Temple\WSEventManageController@index');
Route::get('/templeWelfareSociety/{id}','Temple\WSocManageController@find');
Route::post('/templeAddWelfare','Temple\WSocManageController@addWelfare');
Route::post('/templeUpdateWelfare','Temple\WSocManageController@updateWelfare');

//*********************************************************************Admin

Route::get('/adminUsers','Admin\AdminUSManageController@index');
Route::get('/adminBuddhistFollowers','Admin\BFManageController@index');
Route::get('/adminDashboard','Admin\DashboardController@index');

Route::get('/adminDhammaSchool','Admin\DhammaSchManageController@index');
Route::get('/adminNews','Admin\NewsManageController@index');
Route::get('/adminEvent','Admin\EventManageController@index');
Route::get('/adminTemple','Admin\TempleManageController@index');

Route::get('/adminWelfareSociety','Admin\WelfareSocManageController@index');


//*********************************************************************Dhamma School
Route::get('/dSchDashboard','DhammaSchool\DashboardController@index');
Route::get('/dSchEvent','DhammaSchool\EventManageController@index');

Route::get('/dSchProfile','DhammaSchool\ProfileUpdateController@index');


//*********************************************************************Welfare Society
Route::get('/wsDashboard','WelfareSociety\DashboardController@index');
Route::get('/wsEvent','WelfareSociety\EventManageController@index');

Route::get('/wsProfile','WelfareSociety\ProfileUpdateController@index');
