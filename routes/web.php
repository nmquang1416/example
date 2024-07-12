<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\example;
use App\Models\Flight;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

Route::get('/', function () {
    return view('admin-home');
});

Route::get("/insert", function (){
    return view("insert");
});

Route::get("/read", function (){
    $readAll = example::orderBy("created_at", "asc") ->get();
    return view("readAll", [
        "readAll" => $readAll
    ]);
});

Route::get("/update", function (){
    return view("update");
});

Route::get("/delete", function (){
    return view("delete");
});

Route::post("insertORM", function (){
    $insert = new example();
    $insert->name = request()->name;
    $insert->age = request()->age;
    $insert->address = request()->address;
    $insert->save();
    return redirect("/");
});

Route::get("/readORM", function (){

});

Route::get("/updateORM", function (){
//    $result = example::find($update->id = request()->id);
    $update = example::find(2);
    $update -> name = "quang";
    $update -> age = 1;
    $update -> address = "ha noi";
    $update -> save();
    return "done";
});

Route::get("/deleteORM", function (){
    example::find(1) -> delete();
    return "done";
});
