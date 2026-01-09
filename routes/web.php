<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokedexController;

/*
|--------------------------------------------------------------------------
| Basic Views
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('html101');
});

Route::get('/view2', function () {
    return view('myview2');
});

/*
|--------------------------------------------------------------------------
| MyController
|--------------------------------------------------------------------------
*/
Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/mycontroller', [App\Http\Controllers\MyController::class, 'process']);

/*
|--------------------------------------------------------------------------
| FlightController (โค้ดเดิม)
|--------------------------------------------------------------------------
*/
Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/flights', 'FlightController@index');
    Route::get('/flight/{id}', 'FlightController@update');
    Route::post('/flight', 'FlightController@store');
    Route::put('/flight/{id}', 'FlightController@update_action');
    Route::delete('/flight/{id}', 'FlightController@delete_action');
});

/*
|--------------------------------------------------------------------------
| PokedexController (CRUD ครบ)
|--------------------------------------------------------------------------
*/
Route::get('/pokedexs', [PokedexController::class, 'index'])
    ->name('pokedexs.index');

Route::get('/pokedexs/create', [PokedexController::class, 'create'])
    ->name('pokedexs.create');

Route::post('/pokedexs', [PokedexController::class, 'store'])
    ->name('pokedexs.store');

Route::get('/pokedexs/{pokedex}/edit', [PokedexController::class, 'edit'])
    ->name('pokedexs.edit');

Route::put('/pokedexs/{pokedex}', [PokedexController::class, 'update'])
    ->name('pokedexs.update');

Route::delete('/pokedexs/{pokedex}', [PokedexController::class, 'destroy'])
    ->name('pokedexs.destroy');
