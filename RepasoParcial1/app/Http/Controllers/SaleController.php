<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        return view('sales.index');
    }
    public function create()
    {
        return view('sales.create');
    }
}