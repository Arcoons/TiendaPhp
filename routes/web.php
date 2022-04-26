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
    return view('welcome');
});
//primera ruta
//get : es mostrar por el navegador
Route::get('paises', function(){
    $paises=[
        "colombia"=>[
            "capital" =>"Bogotá",
            "moneda" => "peso",
            "poblacion"=> 51.6,
            "ciudades"=>[
                "Medellín",
                "Cali",
                "Barranquilla",
                "Cartagena",
                "Cúcuta"
            ]
        ],
        "peru"=>[
            "capital" =>"Limaq",
            "moneda" => "sol",
            "poblacion"=> 32.97,
            "ciudades"=>[
                "Chimbote",
                "Cusco",
                "Pucallpa"
            ]
        ],
        "paraguay"=>[
            "capital" =>"Asunsión",
            "moneda" => "Guaraní",
            "poblacion"=> 7.137,
            "ciudades"=>[
                "Ciudad del Este",
                "Luque",
                "San Lorenzo"
            ]
        ]
    ];
   //Mostrar vista
   return view('paises')->with("paises", $paises);
});