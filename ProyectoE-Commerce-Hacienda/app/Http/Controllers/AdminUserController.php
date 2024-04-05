<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        $people = Person::doesntHave('user')->get();
        return view('admin.create-user', compact('roles', 'people'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);
        
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        $role = Role::findByName($request->role);
        $user->assignRole($role);

        // Crear una nueva persona vacía
        $person = new Person;

        // Asignar la persona al usuario
        $user->person()->save($person);

        return redirect()->route('users');
    }
}


