<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class CatalogController extends Controller
{
    public function show()
    {
        $publications = Publication::where('status', true)->get();

        // Pasar las publicaciones a la vista 'publications.index' (puedes cambiar el nombre de la vista según tu estructura)
        return view('mainviews.catalog', ['publications' => $publications]);
    }

    public function showDetail($id)
    {
        $publication = Publication::findOrFail($id); // Suponiendo que estás pasando el ID de la publicación como parámetro

        return view('mainviews.detail-post', ['publication' => $publication]);
    }
}
