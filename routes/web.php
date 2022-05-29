<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Testc;

Route::get("/about",[Testc::class,'aboutfun']);
Route::get("/form",[Testc::class,'form']);
Route::post("/insfrm",[Testc::class,'insfrm']);

Route::get("/sel",[Testc::class,'sel']);
Route::get("/del/{id}",[Testc::class,'del']);
Route::get("/upd/{id}",[Testc::class,'upd']);
Route::post("/upd_ins",[Testc::class,'upd_ins']);
Route::get("/ajax",[Testc::class,'testAjax']);
Route::post("/abc",[Testc::class,'abc']);

Route::get('/', function () {
    return view('welcome');
});
