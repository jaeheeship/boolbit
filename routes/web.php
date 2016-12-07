<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/gittest', function () {
    //new SebastianBergmann\Git\Git(storage_path()) ;

    $command = 'git -C ' . (storage_path()) . ' ' . 'clone http://github.com/jaeheeship/prometheus_tmpl';
    //$command = 'git clone http://github.com/jaeheeship/prometheus_tmpl';


    /*
        if (DIRECTORY_SEPARATOR == '/') {
            $command = 'LC_ALL=en_US.UTF-8 ' . $command;
        }
        */
        exec($command, $output, $returnValue);
        dd($command.$returnValue) ;
       // $command = 'wget -O '.storage_path().'/123.zip '.'https://github.com/jaeheeship/boolbit/archive/master.zip' ;
       //dd( shell_exec($command));
      

});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/templates', 'TemplatesController@index');