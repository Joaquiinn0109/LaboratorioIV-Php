<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class ProfileController extends Controller
{
    /**
    * Muestra el perfil del usuario.
    */
    public function show(Request $request): View
    {
    return view('users.config-user', [
        'user' => $request->user(),
    ]);
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('users.update-user', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Verificar que la contraseña actual es correcta
        if ($request->filled('current_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'La contraseña actual es incorrecta']);
            }

            // Actualizar la contraseña
            $user->password = Hash::make($request->new_password);
        }

        $user->fill($request->validated());

        $emailChanged = $user->isDirty('email');
        if ($emailChanged) {
            $user->email_verified_at = null;
        }

        $user->save();

        // Desautenticar al usuario y redirigirlo a la página de inicio de sesión si cambió su contraseña o correo electrónico
        if ($request->filled('current_password') || $emailChanged) {
            Auth::logout();
            return redirect()->route('login');
        }

        return Redirect::route('config.edit')->with('status', 'profile-updated');
    }

        // En tu controlador ProfileController
    public function adminEdit(User $user): View
    {
        return view('admin.update-user-admin', [
            'user' => $user,
        ]);
    }

        /**
         * Update the user's profile information by the admin.
         */
        public function adminUpdate(UpdateUserRequest $request, User $user)
    {
        $validatedData = $request->validated();

        if (!empty($validatedData['new_password'])) {
            $user->password = Hash::make($validatedData['new_password']);
            $user->save();
            return redirect()->route('profile.adminedit', $user)->with('status', 'La contraseña se ha actualizado correctamente');
        }

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->save();

        return redirect()->route('profile.adminedit', $user)->with('status', 'El perfil se ha actualizado correctamente');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    /**
    * Elimina el perfil del usuario.
    */
    public function adminDestroy($id): RedirectResponse
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return Redirect::to('users')->with('success', 'Usuario eliminado con éxito');
        }

        return Redirect::to('users')->with('error', 'Usuario no encontrado');
    }
}
