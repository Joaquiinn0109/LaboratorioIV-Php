@extends('layouts.app')

@section('content')
<h1>Home</h1>
@endsection

@section('sidebarcontent')
    </li>
    <li class="nav-item nav-category">Informacion Obtenida desde APIs</li>
    <li class="nav-item">
    <a class="nav-link" data-bs-toggle="collapse" href="#informacion-relevante" aria-expanded="false" aria-controls="informacion-relevante">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Rick and Murty</span>
        <i class="menu-arrow"></i> 
    </a>
    <div class="collapse" id="informacion-relevante">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"> <a class="nav-link" href="javascript:;">Episodios </a></li>
        <li class="nav-item"> <a class="nav-link" href="javascript:;">Locaciones</a></li>
        </ul>
    </div>
    </li>
@endsection