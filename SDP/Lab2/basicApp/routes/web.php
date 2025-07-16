<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\String_;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('testpage');
})->name('tp');

Route::redirect('/testpage','/homepage');

// Route::get('/user/{id}{name}{section}', function (string $id, string $name, string $section) {
//     return "User page - ID: ".$id." Name: ".$name." Section: ".$section ;
//  });

Route::get('/user/{id}/{name?}', function ( string $id , string $name=null ) {
    return view('user', ['id'=>$id,'name'=>$name]);
});

Route::get('/homepage', [UserController::class,'index']);




Route::prefix('greeting')->group(function () {
    Route::get('/about', function ( string $id , string $name=null ) {
        
    });
});