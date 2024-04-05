<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Request;
use App\Models\Sale;
use App\Models\User;
use App\Models\Person;
use App\Models\Publication;


class SellController extends Controller
{
   public function sellConfirmation($id, $publication_id){
    $request= Request::find($id);
    if ($request) {
        // Modificar el atributo (por ejemplo, cambiar el estado a confirmado)
        $request->status = true;
        $request->save(); // Guardar los cambios
    }

    // Buscar la venta por su ID y modificar un atributo
    $sale = Sale::where('publication_id', $publication_id)->first();

        if ($sale) {
            // Modificar el atributo de la venta (por ejemplo, cambiar el estado a procesado)
            $sale->confirmation = true;
            $sale->save(); // Guardar los cambios
        }

    return redirect()->back()->with('success2', 'Venta confirmada con exito');
   }
   public function sellShow()
   {
       $user = Auth::user();
   
       if ($user) {
           $person = $user->person;
   
           if ($person) {
               $sales = Sale::whereHas('publication', function ($query) use ($person) {
                   $query->where('consignee_id', $person->id);
               })->get();
   
               return view('consignee.show-sell', ['sales' => $sales]);
           }
       }
   
       return view('no-sales-found');
   }
   
   public function sellShowClient(){
         $user = Auth::user();
    
         if ($user) {
              $person = $user->person;
    
              if ($person) {
                $sales = Sale::whereHas('publication', function ($query) use ($person) {
                     $query->where('seller_id', $person->id);
                })->get();
    
                return view('users.show-sell', ['sales' => $sales]);
              }
         }
    
         return view('no-sales-found');
   }

   public function buyShowClient(){
    $user = Auth::user();

    if ($user) {
         $person = $user->person;

         if ($person) {
        $sales = Sale::where('client_id', $person->id)->get();
         }
         return view('users.show-buy', ['sales' => $sales]);
    }

    return view('no-sales-found');
   }
}
