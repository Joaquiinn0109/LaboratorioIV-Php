@extends('layouts.app')


@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Compras</h4>           
           
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                           <th>
                                Fecha
                           </th>
                            <th>
                                Nro. Lote
                            </th>
                            <th>
                                Consignatario
                            </th>
                            <th>
                                Vendedor
                            </th>
                    
                            <th>
                                Categoria
                            </th>
                            <th>
                                Cantidad
                            </th>
                            <th>
                                Precio kg
                            </th>
                            <th>
                                Total
                            </th>

                        
                    </thead>
                    <tbody>
                        
                        @foreach ($sales as $sale)
                        <tr>
                            <td>{{ $sale->date}}</td>
                            <td>{{ $sale->publication_id}}</td>
                            <td>{{ $sale->publication->consignee->firs_name}} {{ $sale->publication->consignee->last_name}}</td>
                            <td>{{ $sale->publication->seller->firs_name}} {{ $sale->publication->seller->last_name}}</td>
                           
                            <td>{{ $sale->publication->category}}</td>
                            <td>{{ $sale->publication->quantity}}</td>
                            <td>${{ $sale->publication->pricekg}}</td>    
                            <td>${{ $sale->publication->total}}</td>              
                        </tr>
                        @endforeach
                   

                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
  @endsection