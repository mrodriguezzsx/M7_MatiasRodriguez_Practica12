<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function articulos() {
        return view('articulos', ['text' => 'Benvigut a la pàgina Articles']);
    }

    public function clientes() {
        return view('clientes', ['text' => 'Benvigut a la pàgina Clients']);
    }

    public function facturacion() {
        return view('facturas', ['text' => 'Benvigut a la pàgina Facturacio']);
    }

    public function contabilidad() {
        return view('contabilidad', ['text' => 'Benvigut a la pàgina Contabilidad']);
    }
}
