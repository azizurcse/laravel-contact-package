<?php
// here is route file
Route::group(['namespace'=>'Azizur\Contact\Http\Controllers'],function(){
    
    Route::get("/contact","ContactController@index")->name('contact');
    Route::post('/contact',"ContactController@send");
});

