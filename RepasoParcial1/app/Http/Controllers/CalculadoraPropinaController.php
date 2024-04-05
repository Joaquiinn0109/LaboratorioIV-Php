<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraPropinaController extends Controller
{
    public function CalculadoraPropina(){
        return view('calculadorapropina.calculadorapropina');
    }
    public function Calcular(Request $request){
        $total = $request->input('total');
        $porcentaje = $request->input('porcentaje');
        $propina = $total * $porcentaje / 100;
        $totalPropina = $total + $propina;
        return view('calculadorapropina.resultadocalculadora', compact('total', 'porcentaje', 'propina', 'totalPropina'));
    }
}
