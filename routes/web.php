<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name ('homepage');

Route::get('/Soci', function () {
    $socio=[
        ['id' => 1, 'name' => 'Luca','surname' => 'Rossi'],
        ['id' => 2, 'name' => 'Mario','surname' => 'Bianchi'],
        ['id' => 3, 'name' => 'Giovanni','surname' => 'Verdi'],
    ];
    
    return view('Soci', ['soci' => $socio]);
    
})->name('Soci');

    Route::get('/Prodotti', function () {
    $fumetto=[
            ['id' => 1, 'name' => 'Dragonball'],
            ['id' => 2, 'name' => 'One Piece'],
        ];
        
        return view('Prodotti', ['prodotti' => $fumetto]);
        
    })->name('Prodotti');
    
    Route::get('Fumetti{id}', function ($id) {
        $fumetto=[
            ['id' => 1, 'name' => 'DragonBall','description' => 'SO BIONDO!!!!'],
            ['id' => 2, 'name' => 'One Piece','description' => 'SO DE GOMMA!!!'],
        ];
        
        foreach ($fumetto as $fumetti) {
            if ($fumetti ['id'] ==$id) {
                
                return view('Fumetti', ['fumetti' => $fumetti]);
            }
        }
    })->name('Fumetti');
    