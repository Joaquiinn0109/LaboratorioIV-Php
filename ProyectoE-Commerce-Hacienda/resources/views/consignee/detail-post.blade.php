@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-body">
           <!-- Product section-->
           <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0 img-fluid" src="{{ asset('storage/'.$publication->image_url) }}" alt="Imagen" style="width: 600px; height: 700px;"/></div>
                    <div class="col-md-6">
                        <div class="small mb-1">{{ $publication->purpose }}</div>
                        <h1 class="display-5 fw-bolder">{{ $publication->breed }}</h1>
                        <div class="fs-5 mb-5">
                            <span>Precio ${{ $publication->pricekg }}kg</span>
                            <span>Total: ${{ $publication->total}}</span>
                        </div>
                        <p class="lead">Cantidad: {{ $publication->quantity }}</p>
                        <p class="lead">Categoria: {{ $publication->category}}</p>
                        <p class="lead">Edad: {{ $publication->age}}</p>
                        <p class="lead">Peso promedio: {{ $publication->average_weight}}</p>
                        <p class="lead">Estado de salud: {{ $publication->health_status}}</p>
                        <p class="lead">Estado corporal: {{ $publication->body_status}}</p>
                        <p class="lead">Dieta:{{ $publication->diet}}</p>                   
                                               
                       
                        </div>
                    </div>
                 </div>
            </section>
        </div>
    </div>
@endsection