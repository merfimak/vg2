<?php



Route::get('/test', ['uses'=>'TestController@show','as'=>'test']);



Route::get('/', ['uses'=>'MainController@show','as'=>'main']);
Route::get('/services', ['uses'=>'ServicesController@show','as'=>'services']);
Route::get('/portfolio', ['uses'=>'PortfolioController@show','as'=>'portfolio']);

Route::resource('contact', 'ContactController',['only' => ['index','store']]);

//restfull метод создаем через Resource Controllers https://laravel.com/docs/5.8/controllers#resource-controllers
Route::resource('confession', 'ConfessionController',['only' => ['index','store']]);

Auth::routes();

Route::group(['prefix' => 'admin','middleware'=> 'auth'],function() {

Route::get('/',['uses' => 'Admin\IndexController@index','as' => 'adminIndex']);
//Route::get('/services', ['uses'=>'Admin\ServicesController@index','as'=>'adminServicesIndex']);
//Route::post('/services', ['uses'=>'Admin\ServicesController@update','as'=>'adminServicesUpdate']);
Route::resource('/services','Admin\ServicesController');
Route::resource('/foto','Admin\FotoController');
Route::resource('/video','Admin\VideoController');

});



Route::get('/home', 'HomeController@index')->name('home');
