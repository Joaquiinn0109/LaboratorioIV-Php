<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use App\Models\Person;


class PublishController extends Controller
{
    public function showPublishForm()
    {


        $consigneeRole = Role::where('name', 'consignee')->first();
        $consignatarios = $consigneeRole->users()->with('person')->get();
        $user = Auth::user();
        $campos_usuario = []; // Inicializar la variable
    
        if ($user->person) {
            $campos_usuario = $user->person->fields;
        }
    
        return view('mainviews.publish', ['consignatarios' => $consignatarios, 'campos' => $campos_usuario]);
    }

    public function publish(Request $request)
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
        
        $publication = new Publication();
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
    
        return redirect()->route('my-posts.show')->with('success', 'Publicacion realizada con exito!');
    }
 
}
