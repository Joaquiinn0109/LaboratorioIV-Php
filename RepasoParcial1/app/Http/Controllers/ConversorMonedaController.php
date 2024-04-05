<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConversorMonedaController extends Controller
{
    public function conversor(){
        return view('conversormoneda.conversormoneda');
    }

    public function convertir(Request $request){
        $cantidad = $request->input('cantidad');
        $moneda = $request->input('moneda');
        $monedaConvertida = $request->input('monedaConvertida');
        $resultado = 0;
        if($moneda == 'Dolar'){
            if($monedaConvertida == 'Euro'){
                $resultado = $cantidad * 0.92;
            }else if($monedaConvertida == 'Pesos'){
                $resultado = $cantidad * 350.02;
            }else if($monedaConvertida == 'Libra'){
                $resultado = $cantidad * 0.79;
            }else if($monedaConvertida == 'Dolar'){
                $resultado = $cantidad;
            }
        }else if($moneda == 'Euro'){
            if($monedaConvertida == 'Dolar'){
                $resultado = $cantidad * 1.09;
            }else if($monedaConvertida == 'Pesos'){
                $resultado = $cantidad * 382.20;
            }else if($monedaConvertida == 'Libra'){
                $resultado = $cantidad * 0.86;
            }else if($monedaConvertida == 'Euro'){
                $resultado = $cantidad;
            }
        }else if($moneda == 'Pesos'){
            if($monedaConvertida == 'Dolar'){
                $resultado = $cantidad * 0.0029;
            }else if($monedaConvertida == 'Euro'){
                $resultado = $cantidad * 0.0026;
            }else if($monedaConvertida == 'Libra'){
                $resultado = $cantidad * 0.0022;
            }else if($monedaConvertida == 'Pesos'){
                $resultado = $cantidad;
            }
        }else if($moneda == 'Libra'){
            if($monedaConvertida == 'Dolar'){
                $resultado = $cantidad * 1.27;
            }else if($monedaConvertida == 'Euro'){
                $resultado = $cantidad * 1.16;
            }else if($monedaConvertida == 'Pesos'){
                $resultado = $cantidad * 444.86;
            }else if($monedaConvertida == 'Libra'){
                $resultado = $cantidad;
            }
        }
        return view('conversormoneda.resultadoconversion', compact('cantidad', 'moneda', 'monedaConvertida', 'resultado'));
    }
}
