<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{

    public function show()
    {
        // Buscar la persona asociada al usuario actual
        $person = Auth::user()->person;

        // Pasar la persona a la vista
        return view('users.profile-user', ['person' => $person]);
    }

    public function updatePerson(Request $request)
    {
        // Buscar la persona asociada al usuario actual
        $person = Auth::user()->person;

        // Actualizar los detalles de la persona
        $person->firs_name = $request->firs_name;
        $person->last_name = $request->last_name;
        $person->dni = $request->dni;
        $person->address = $request->address;
        $person->phone_number = $request->phone_number;
        $person->business_name = $request->business_name;
        $person->cuil = $request->cuil;
        $person->city = $request->city;
        $person->province = $request->province;

        // Guardar la persona
        $person->save();

        return redirect()->back()->with('success', 'Datos actualizados de forma correcta!');
    }
}
