<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;


class MyPostController extends Controller
{
    public function posts(){
        $publicaciones = Publication::where('seller_id', auth()->user()->id)
                                    ->where('status', 1)
                                    ->get();
    
        return view('mainviews.my-posts', ['publicaciones' => $publicaciones]);
    }
    
    public function delete($id)
    {
        $publicacion = Publication::find($id);

        if ($publicacion) {
            $publicacion->delete();
            // Otra lógica adicional, como redireccionar con un mensaje de éxito
            return redirect()->back()->with('success', 'Publicación eliminada correctamente');
        }

        // En caso de que no se encuentre la publicación, puedes redirigir a una página de error o hacer algo similar
        return redirect()->back()->with('error', 'La publicación no se encontró o ya ha sido eliminada');
    }

    public function edit($id)
    {
        $publication = Publication::find($id);

        if ($publication) {
            $consigneeRole = Role::where('name', 'consignee')->first();
            $consignatarios = $consigneeRole->users()->with('person')->get();
            $user = Auth::user();
            $campos_usuario = []; // Inicializar la variable
            $campos_usuario = $user->person->fields;
            return view('mainviews.edit-publish', ['publication' => $publication, 'consignatarios' => $consignatarios, 'campos' => $campos_usuario]);
        }

        // En caso de que no se encuentre la publicación, puedes redirigir a una página de error o hacer algo similar
        return redirect()->back()->with('error', 'La publicación no se encontró o ya ha sido eliminada');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'proposito' => 'required',
            'categoria' => 'required',
            'raza' => 'required',
            'edad' => 'required',
            'cantidad' => 'required|integer',
            'peso_promedio' => 'required|numeric',
            'preciokg' => 'required|numeric',
            'estado_sanitario' => 'required',
            'dieta' => 'required',
            'estado_corporal' => 'required',
            'consignatario_id' => 'required|exists:users,id',
            'campo_id' => 'required|exists:fields,id',
            'imagenes.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $publication = Publication::find($id);
        $publication->purpose = $request->proposito;
        $publication->category = $request->categoria;
        $publication->breed = $request->raza;
        $publication->age = $request->edad;
        $publication->quantity = $request->cantidad;
        $publication->average_weight = $request->peso_promedio;
        $publication->pricekg = $request->preciokg;
        $total= $publication->pricekg * $publication->quantity * $publication->average_weight;
        $publication->total = $total;
        $publication->health_status = $request->estado_sanitario;
        $publication->body_status = $request->estado_corporal;
        $publication->diet = $request->dieta;
        $publication->consignee_id = $request->consignatario_id;
        $publication->field_id = $request->campo_id;
        $publication->status = true;
        $publication->date = now();
        $publication->seller_id = auth()->id();
        if ($request->hasFile('imagenes')) {
            $image = $request->file('imagenes')[0]; // Obtiene la primera imagen
            $path = $image->store('assets/img', 'public'); // Almacena la imagen en storage/app/public/assets/img
            // Guarda la ruta de la imagen en la publicación
            $publication->image_url = $path;
        }
        
        $publication->save();

        return redirect()->back()->with('success', 'Publicación actualizada correctamente');
    }
}
