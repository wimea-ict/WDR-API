<?php

use Illuminate\Http\Request;

Route::get('/login','ApiController@accessToken');
 
/*Route::middleware(['auth:api'])->group(function () {
});
*/
    Route::get('/manualCurrentObservations/{key?}','ApiController@manualCurrentObservations');

    Route::get('/awsCurrentObservations/{key?}','ApiController@awsCurrentObservations'); 
 
    Route::get('/specificyDate/{key?}','ApiController@specificyDate');

    Route::get('/specificyDateRange/{key?}','ApiController@specificyDateRange');
 
    Route::get('/awsSpecificDateTimeStationObservations/{key?}','ApiController@awsSpecificDateTimeStationObservations'); 
    
    Route::get('/manualSpecificDateTimeStationObservations/{key?}','ApiController@manualSpecificDateTimeStationObservations'); 
  

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
