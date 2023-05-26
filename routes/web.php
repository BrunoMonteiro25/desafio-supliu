<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FaixaController;

Route::redirect('/', '/albums');

Route::resource('albums', AlbumController::class);

Route::get('albums/{albumId}/faixas/create', [
    FaixaController::class,
    'create',
])->name('faixas.create');

Route::post('albums/{albumId}/faixas', [FaixaController::class, 'store'])->name(
    'faixas.store'
);

Route::delete('albums/{albumId}/faixas/{faixaId}', [
    FaixaController::class,
    'destroy',
])->name('faixas.destroy');
