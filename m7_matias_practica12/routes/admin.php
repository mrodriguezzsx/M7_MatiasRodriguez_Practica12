<?php
/** Rutes de l'administrador... */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ControladorAdmin;

Route::group(['middleware'=>['adb']],function(){
    Route::get('articulos', [ControladorAdmin::class, 'articulos'])->name('articulos');
    Route::get('clientes', [ControladorAdmin::class, 'clientes'])->name('clientes');
    Route::get('facturacion', [ControladorAdmin::class, 'facturacion'])->name('facturacion');
    Route::get('contabilidad', [ControladorAdmin::class, 'contabilidad'])->name('contabilidad');
});
