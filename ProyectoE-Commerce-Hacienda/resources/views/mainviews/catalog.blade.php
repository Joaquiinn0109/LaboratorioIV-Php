 
 @extends('layouts.app')


 @section('content')

<div class="card">
    <div class="card-body">
 
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($publications as $publication)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top img-fluid" src="{{ asset('storage/'.$publication->image_url) }}" alt="Imagen" style="width: 400px; height: 300px;"/>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $publication->breed }}</h5>
                                    <!-- Product price-->
                                    <p>{{ $publication->category}}</p>
                                    <p>${{ $publication->pricekg}} por kg</p>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                                <a class="btn btn-outline-dark mt-auto " href="{{ route('detail-post.show', ['id' => $publication->id]) }}">
                                    Descripcion
                                </a>
                            </div>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </section>
    </div>
</div>  


 <!-- Bootstrap core JS-->

 <!-- Core theme JS-->

@endsection