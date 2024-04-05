<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\Field;
use Illuminate\Support\Facades\Auth;

class FieldsController extends Controller
{
    public function field()
    {
      
        $user = Auth::user(); // Obtener el usuario autenticado
        $person = $user->person; // Obtener la persona asociada al usuario

        return view('fields.add-field', compact('person'));
    }

    public function addFields(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'department' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);
    
        $field = Field::create($validatedData);
    
        // Obtener la persona asociada al usuario autenticado
        $person = auth()->user()->person;
    
        // Asociar el nuevo campo con la persona en la tabla people_fields
        if ($person) {
            $person->fields()->attach($field->id);
        }
    
        // Redirigir o devolver una respuesta según sea necesario
        return redirect()-> route('fields.show')->with('success', 'Campo agregado exitosamente');
    }

    public function editField($id)
    {
        $field = Field::find($id);
        return view('fields.edit-field', ['field' => $field]);
    }

    public function updateField(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'department' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'latitude' => 'required|string',
            'longitude' => 'required|string',
        ]);

        $field = Field::findOrFail($id);
        $field->update($validatedData);

        return redirect()-> route('fields.show')->with('success', 'Campo actualizado exitosamente');
    }

    public function destroyField($id)
    {
        $field = Field::findOrFail($id);
        $field->delete();

        return redirect()-> route('fields.show')->with('success', 'Campo eliminado exitosamente');
    }

    public function showFields()
    {
        $user = Auth::user(); // obtén el usuario actualmente autenticado

        // obtén los campos asociados a la persona del usuario
        $fields = $user->person->fields;

        if ($fields->isEmpty()) {
            return redirect()->route('addfields.show');
        }
    
        return view('fields.get-all-fields', compact('fields'));
    }
}
