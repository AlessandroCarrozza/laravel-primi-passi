<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $title = "Hello World";

    $data = [
        "title" => $title,

        "subjects" => [
            "HTML",
            "CSS",
            "JavaScript",
            "VueJS",
            "API",
            "Vite",
            "MySQL",
            "OOP",
            "Laravel"
        ]


    ];

    return view('home', $data);
})->name('home');


Route::get('chi-siamo', function () {

    $aboutText = "Questa è la pagina About Us !!";

    $data = [
        "aboutText" => $aboutText,
    ];


    return view('about', $data);
})->name('about');



Route::get('contacts', function () {

    $contactsText = "Questa è la pagina dei Contatti !!";

    $data = [
        "contactsText" => $contactsText,
    ];


    return view('contacts', $data);
})->name('contacts');
