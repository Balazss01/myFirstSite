<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/contact', function () {
//    return view('contact');
//});

Route::view('/contact', 'contact');

Route::get('/tomb-visszaad', function (){
    $tomb = ["kulcs" => "érték"];
    return $tomb["kulcs"];
});

Route::get('/udvozles', function() {
        $name="Balázs";
        $age = 19;
        return view("udvozollek", [
            "name" =>$name,
            "kor" => $age
        ]);
});
Route::get("/bevasarlolista", function(){
    $lista = [
        "tejföl",
        "tej",
        "liszt",
        "csoki",
        "dinnye"
    ];
    return view("sajatbevasarlas", [
        "bevasarlolista" => $lista
    ]);
});
//http://127.0.0.1:8000/felhasznaloiadat?felhasznalonev=Lajos&vezeteknev=Magyar&keresztnev=Balazs
Route::get('/felhasznaloiadat', function () {
    return view("userinput", [
        "input" => request("felhasznalonev"),
        "vnev" => request("vezeteknev"),
        "knev" => request("keresztnev"),
    ]);
});
