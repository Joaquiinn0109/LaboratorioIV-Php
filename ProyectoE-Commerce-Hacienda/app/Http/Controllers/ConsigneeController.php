<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;
use App\Models\Publication;

class ConsigneeController extends Controller
{
    
    public function postAsignate()
    {
        $user = Auth::user();

        // Acceder a la persona asociada a este usuario
        $consignatario = $user->person;

        // Si se encontró la persona, obtener las publicaciones asignadas
        if ($consignatario) {
            $publicacionesAsignadas = $consignatario->publicationsAsignadas;
            return view('consignee.post-asignate', compact('publicacionesAsignadas'));
        }

    }
    public function showPostDetails($id)
    {

    $publication = Publication::findOrFail($id);
    return view('consignee.detail-post', compact('publication')); 

    }

    public function requestShow()
    {
        $consignatarioId = Auth::id();

        $publications = Publication::whereHas('requests', function ($query) use ($consignatarioId) {
            $query->where('consignee_id', $consignatarioId)->where('confirmation', true)->where('status', false);
        })->with('requests.client')->get();
        
        return view('consignee.request', compact('publications'));
    }
    public function requestShowConfirmation()
    {
        $consignatarioId = Auth::id();

        $publications = Publication::whereHas('requests', function ($query) use ($consignatarioId) {
            $query->where('consignee_id', $consignatarioId)->where('confirmation', false)->where('status', false);
        })->with('requests.client')->get();
        
        return view('consignee.confirmation', compact('publications'));
    }
}

