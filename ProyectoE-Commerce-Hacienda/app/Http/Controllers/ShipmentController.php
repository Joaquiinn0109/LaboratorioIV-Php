<?php

namespace App\Http\Controllers;

use App\Models\Shipment;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\User;
use App\Models\Field;
use App\Models\Vehicle;
use App\Models\Person;

class ShipmentController extends Controller
{
  

    public function crearEnvio(Request $request)
   {
    // Validar los datos del formulario
    $request->validate([
        'fecha_carga' => 'required|date',
        'publication_id' => 'required',
        'vehicle_id' => 'required',
        'campo_id' => 'required',
    ]);

    // Crear un nuevo envío con los datos del formulario
    $envio = new Shipment();
    $envio->fecha_de_carga = $request->fecha_carga;
    $envio->publication_id = $request->publication_id;
    $envio->vehicle_id = $request->vehicle_id;
    $envio->field_id = $request->campo_id;

    // Guardar el nuevo envío en la base de datos
    $envio->save();
    
    // Redirigir a una vista o a donde sea necesario después de crear el envío
    return redirect()->back()->with('success', 'Envío agregado exitosamente');
    }
    

}    
