<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use App\Models\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    // En RequestController.php
    public function store(HttpRequest $request)
    {
        $newRequest = new Request;
        $newRequest->publication_id = $request->publication_id;
        $newRequest->client_id = auth()->id(); // Obtiene el id del usuario autenticado
        $newRequest->fecha = now();
        $newRequest->confirmation = false;
        $newRequest->status= false;
        $newRequest->save();

        // Redirige al usuario a donde quieras después de guardar la solicitud
        return redirect()->back();
    }
    
    public function getDetails(HttpRequest $request)
    {
        $clientId = $request->user()->id;
        $requests = \App\Models\Request::where('client_id', $clientId)->where('status', false)->get();
    
    
        // Devolver las solicitudes a la vista
        return view('users.request-user', ['requests' => $requests]);
    }
    public function deleteRequest($id)
    {
        $request = Request::findOrFail($id);
        $request->delete();

        return redirect()->route('request.show')->with('success', 'Solicitud eliminada correctamente');
    }
    public function confirmarEnvios($id, $publication_id, $client_id)
    {
            // Encontrar la solicitud por su ID
            $solicitud = Request::findOrFail($id);

            // Encontrar la publicación por su ID
            $publication = Publication::find($publication_id);
    
            // Si se encuentra la publicación, cambiar su estado a false
            if ($publication) {
                $publication->status = false;
                $publication->save();
            }
    
            // Si se encuentra la solicitud, cambiar su atributo 'confirmation' a true
            if ($solicitud) {
                $solicitud->confirmation = true;
                $solicitud->status = false;
                $solicitud->save();
            }
    
            // Si la publicación y la solicitud existen, crear una nueva venta
            if ($publication && $solicitud) {
                $venta = new \App\Models\Sale;
                $venta->publication_id = $publication->id;
                $venta->client_id = $solicitud->client_id;
                $venta->confirmation = false; // Ajusta este valor según sea necesario
                $venta->date = now(); // Asegúrate de que este sea el formato de fecha requerido por tu aplicación
                $venta->save();
            }
            return redirect()->back()->with('success', 'Solicitud confirmada correctamente');
    }
    public function mostrarEnvios($id, $publication_id, $client_id)
    {
            // Encontrar la solicitud por su ID
        $solicitud = Request::findOrFail($id);

        // Encontrar la publicación por su ID
        $publication = Publication::find($publication_id);
     
        $envios = $publication->shipments;

        return view('consignee.shipment', [
            'envios' => $envios,
            'publication_id' => $publication_id,
            // Otros datos que desees pasar a la vista...
        ]);
    }
    public function  mostrarFormulario($publication_id)
    {  
       
        $user = Auth::user(); // Obtener el usuario autenticado
        $vehicles = $user->vehicles; 
           // Obtener la solicitud basada en la publicación
        $solicitud = Request::where('publication_id', $publication_id)->first();

        $campos = [];
        if ($solicitud) {
            
            $campos = $solicitud->client->fields; // Suponiendo que 'fields' es la relación en tu modelo 'Person' para obtener los campos del cliente
        }
        return view('consignee.shipment-create', [
            'fields' => $campos,
            'vehicles' => $vehicles ,
            'publication_id' => $publication_id
        ]);
    }
} 