<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function vehicle()
    {
        $user = Auth::user(); // Obtener el usuario autenticado
        $vehicle = $user->vehicle; // Obtener el vehiculo asociado al usuario

        return view('vehicles.add-vehicle', compact('vehicle'));
    }

    public function addVehicles(Request $request)
    {
        $validatedData = $request->validate([
            'license_plate' => 'required|string|max:255',
            'capacity' => 'required|string|max:20',
            'type' => 'required|string|max:100',
        ]);

        $vehicle = new Vehicle($validatedData);

        $vehicle->user_id = auth()->user()->id;

        $vehicle->save();

        // Redirigir o devolver una respuesta según sea necesario
        return redirect()->route('vehicles.show')->with('success', 'Vehiculo agregado exitosamente');
    }

    public function editVehicle($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicles.edit-vehicle', ['vehicle' => $vehicle]);
    }

    public function updateVehicle(Request $request, $id)
    {
        $validatedData = $request->validate([
            'license_plate' => 'required|string|max:255',
            'capacity' => 'required|string|max:20',
            'type' => 'required|string|max:100',
        ]);

        Vehicle::whereId($id)->update($validatedData);

        return redirect()-> route('vehicles.show')->with('success', 'Vehiculo actualizado exitosamente');
    }

    public function destroyVehicle($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();

        return redirect()-> route('vehicles.show')->with('success', 'Vehiculo eliminado exitosamente');
    }

    public function showVehicles()
    {
        $vehicles = auth()->user()->vehicles; // obtén los vehículos del usuario autenticado

        if($vehicles->isEmpty()) // si no tiene vehículos asociados
            return redirect()->route('addvehicle.show'); // redirige a la ruta para agregar un vehículo

        return view('vehicles.get-all-vehicles', compact('vehicles'));
    }
}
