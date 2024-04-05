@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Publicar un Lote</h4>
        <p class="card-description text-center">
            Ingresa los datos de la publicación
        </p>
            <form name="formulario" class="forms-sample" method="POST" action="{{ route('publish.post') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="proposito" class="col-sm-4 col-form-label">Propósito</label>
                        <select class="form-control form-control-sm bg-light" id="proposito" name="proposito" required>
                            <option selected>Seleccionar</option>
                            <option value="Invernada">Invernada</option>
                            <option value="Faena">Faena</option>
                            <option value="Reproduccion">Reproducción</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="categoria" class="col-sm-4 col-form-label">Categoría</label>
                        <select class="form-control form-control-sm bg-light" id="categoria" name="categoria" required>
                            <option selected>Seleccionar</option>
                            <option value="Terneros">Terneros</option>
                            <option value="Terneras">Terneras</option>
                            <option value="Terneras y terneros">Terneras y terneros</option>
                            <option value="Novillitos">Novillitos</option>
                            <option value="Novillos y vaquillonas">Novillos y vaquillonas</option>
                            <option value="Novillos">Novillos</option>
                            <option value="Toros">Toros</option>
                            <option value="Vacas de invernada">Vacas de invernada</option>
                            <option value="Vacas cut">Vacas cut</option>
                            <option value="Vaquillonas">Vaquillonas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="raza" class="col-sm-4 col-form-label">Raza</label>
                        <select class="form-control form-control-sm bg-light" id="raza" name="raza" required>
                            <option selected>Seleccionar</option>
                            <option value="Angus">Angus</option>
                            <option value="Braford">Braford</option>
                            <option value="Brangus">Brangus</option>
                            <option value="Hereford">Hereford</option>
                            <option value="Holando">Holando</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Mestizo">Mestizo</option>
                            <option value="Criollo">Criollo</option>
                            <option value="Otras">Otras</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="edad" class="col-sm-4 col-form-label">Edad</label>
                        <select id="edad" class="form-control form-control-sm bg-light" aria-label="Edad" name="edad" required>
                            <option selected>Edad</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="cantidad" class="col-sm-4 col-form-label">Cantidad</label>
                        <input type="text" class="form-control form-control-sm" id="cantidad" placeholder="Cantidad de cabezas total" name="cantidad" required>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="peso_promedio" class="col-sm-4 col-form-label">Peso promedio</label>
                        <input type="text" class="form-control form-control-sm" id="peso_promedio" placeholder="Peso promedio en kg" name="peso_promedio" required>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="preciokg" class="col-sm-4 col-form-label">Precio por kg</label>
                        <input type="text" class="form-control form-control-sm" id="preciokg" placeholder="Precio por kg" name="preciokg" required>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="estado_corporal" class="col-sm-4 col-form-label">Estado de Tropa</label>
                        <select class="form-control form-control-sm bg-light" id="estado_corporal" name="estado_corporal" required>
                            <option selected>Seleccionar</option>
                            <option value="Muy Bueno">Muy Bueno</option>
                            <option value="Bueno - Muy Bueno">Bueno - Muy Bueno</option>
                            <option value="Bueno">Bueno</option>
                            <option value="Regular - Bueno">Regular - Bueno</option>
                            <option value="Regular">Regular</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="dieta" class="col-sm-4 col-form-label">Dieta Actual</label>
                        <select class="form-control form-control-sm bg-light" id="dieta" name="dieta" required>
                            <option selected>Seleccionar</option>
                            <option value="A Campo">A Campo</option>
                            <option value="A Campo + suplementación">A Campo + suplementación</option>
                            <option value="Pasturas">Pasturas</option>
                            <option value="Pasturas + suplementación">Pasturas + suplementación</option>
                            <option value="Verdeos de invierno">Verdeos de invierno</option>
                            <option value="Feedlot">Feedlot</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="estado_sanitario" class="col-sm-4 col-form-label">Estado sanitario</label>
                        <select class="form-control form-control-sm bg-light" id="estado_sanitario" name="estado_sanitario" required>
                            <option selected>Seleccionar</option>
                            <option value="Libre de brucelosis y tuberculosis">Libre de brucelosis y tuberculosis</option>
                            <option value="Libre de brucelosis">Libre de brucelosis</option>
                            <option value="Libre de tuberculosis">Libre de tuberculosis</option>
                            <option value="En saneamiento">En saneamiento</option>
                            <option value="Sanidad Completa">Sanidad Completa</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="consignatario" class="col-sm-4 col-form-label">Consignatario</label>
                        <select class="form-control form-control-sm bg-light" id="consignatario" name="consignatario_id" required>
                            @foreach($consignatarios as $consignatario)
                                <option value="{{ $consignatario->id }}">{{ $consignatario->name }}</option>
                            @endforeach                                       
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="campo" class="col-sm-4 col-form-label">Campo</label>
                        <select class="form-control form-control-sm bg-light" id="campo" name="campo_id" required>
                            @foreach($campos as $campo)
                                <option value="{{ $campo->id }}">{{ $campo->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="imagenes" class="col-sm-4 col-form-label">Imágenes del lote</label>
                        <input type="file" class="form-control form-control-sm" id="imagenes" name="imagenes[]" multiple required>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary me-2" onclick="return confirm('¿Estás seguro de que quieres realizar esta publicación?');"> Publicar</button>
                        <button class="btn btn-secondary btn-block" onclick="window.location.href = '{{ route('my-posts.show') }}'">Cancelar</button>
                    </div>
                </div>
            </form>

        </div>
    <script>
        document.getElementById("categoria").addEventListener("change", function() {
            const categoriaSelect = document.getElementById("categoria");
            const edadSelect = document.getElementById("edad");
    
            // Borra todas las opciones anteriores en el select de edad
            edadSelect.innerHTML = "";
    
            // Obtiene la categoría seleccionada
            const categoria = categoriaSelect.value;
    
            // Agrega opciones de edad según la categoría seleccionada
            if (categoria === "Terneros" ||categoria === "Terneras" || categoria === "Terneras y terneros") {
                // Opciones para terneros
                const opcionesEdad = ["1 a 3 meses", "3 a 6 meses", "6 a 9 meses", "9 a 12 meses", "12 a 15 meses", "15 a 18 meses" , "18 a 21 meses", "21 a 24 meses"];
                opcionesEdad.forEach(function(opcion) {
                    const option = document.createElement("option");
                    option.text = opcion;
                    edadSelect.add(option);
                });
            } else if (categoria === "Novillitos" ||categoria === "Novillos y vaquillonas" ||categoria === "Novillos" ||categoria === "Toros" ||categoria === "Vacas de invernada"||categoria === "Vacas cut"||categoria === "Vaquillonas") {
                // Opciones para toros
                const opcionesEdad = ["1 a 2 años", "2 a 3 años", "3 a 4 años","4 a 5 años","5 a 6 años", "Mas de 7 años"];
                opcionesEdad.forEach(function(opcion) {
                    const option = document.createElement("option");
                    option.text = opcion;
                    edadSelect.add(option);
                });
            }
        });
    </script>
</div>
@endsection


{{-- @section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <div class="card">
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-center">
                        <form name="formulario" class="col-md-8" method="POST" action="{{ route('publish.post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row" id="primerFormulario">
                                <div class="container border rounded mb-3 p-3">
                                    <div class="mb-3">
                                        <h5 class="inline-title mb-0">Publicar lote para</h5>
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select" aria-label="Seleccionar" name="proposito" required>
                                            <option selected>Seleccionar</option>
                                            <option value="Invernada">Invernada</option>
                                            <option value="Faena">Faena</option>
                                            <option value="Reproduccion">Reproducción</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="container border rounded mb-3 p-3">
                                    <div class="mb-3">
                                        <h5 class="inline-title mb-0">Información de la tropa</h5>
                                    </div>
                                    <div class="mb-3">
                                        <select id="categoria" class="form-select mb-3" aria-label="Categoría" name="categoria" required>
                                            <option selected>Categoría</option>
                                            <option value="Terneros">Terneros</option>
                                            <option value="Terneras">Terneras</option>
                                            <option value="Terneras y terneros">Terneras y terneros</option>
                                            <option value="Novillitos">Novillitos</option>
                                            <option value="Novillos y vaquillonas">Novillos y vaquillonas</option>
                                            <option value="Novillos">Novillos</option>
                                            <option value="Toros">Toros</option>
                                            <option value="Vacas de invernada">Vacas de invernada</option>
                                            <option value="Vacas cut">Vacas cut</option>
                                            <option value="Vaquillonas">Vaquillonas</option>
                                        </select>
                                        <select class="form-select mb-3" aria-label="Raza" name="raza" required>
                                            <option selected>Raza</option>
                                            <option value="Angus">Angus</option>
                                            <option value="Braford">Braford</option>
                                            <option value="Brangus">Brangus</option>
                                            <option value="Hereford">Hereford</option>
                                            <option value="Holando">Holando</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Mestizo">Mestizo</option>
                                            <option value="Criollo">Criollo</option>
                                            <option value="Otras">Otras</option>
                                        </select>
                                        <select id="edad" class="form-select mb-3" aria-label="Edad" name="edad" required>
                                            <option selected>Edad</option>
                                        </select>
                                        <div class="mb-3">
                                            <input type="text" class="form-control mb-3" id="exampleInputCabezas" aria-describedby="emailHelp" placeholder="Cantidad de cabezas total" name="cantidad" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control mb-3" id="exampleInputPeso" aria-describedby="emailHelp" placeholder="Peso promedio en kg" name="peso_promedio" required>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control mb-3" id="exampleInputPrecio" aria-describedby="emailHelp" placeholder="Precio por kg" name="preciokg" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="container border rounded mb-3 p-3">
                                    <div class="mb-3">
                                        <h5 class="inline-title mb-0">Estado de Tropa</h5>
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select mb-3" aria-label="Estado Corporal" name="estado_corporal" required>
                                            <option selected>Estado Corporal</option>
                                            <option value="Muy Bueno">Muy Bueno</option>
                                            <option value="Bueno - Muy Bueno">Bueno - Muy Bueno</option>
                                            <option value="Bueno">Bueno</option>
                                            <option value="Regular - Bueno">Regular - Bueno</option>
                                            <option value="Regular">Regular</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select mb-3" aria-label="Dieta Actual" name="dieta" required>
                                            <option selected>Dieta Actual</option>
                                            <option value="A Campo">A Campo</option>
                                            <option value="A Campo + suplementación">A Campo + suplementación</option>
                                            <option value="Pasturas">Pasturas</option>
                                            <option value="Pasturas + suplementación">Pasturas + suplementación</option>
                                            <option value="Verdeos de invierno">Verdeos de invierno</option>
                                            <option value="Feedlot">Feedlot</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <select class="form-select mb-3" aria-label="Estado sanitario" name="estado_sanitario" required>
                                            <option selected>Estado sanitario</option>
                                            <option value="Libre de brucelosis y tuberculosis">Libre de brucelosis y tuberculosis</option>
                                            <option value="Libre de brucelosis">Libre de brucelosis</option>
                                            <option value="Libre de tuberculosis">Libre de tuberculosis</option>
                                            <option value="En saneamiento">En saneamiento</option>
                                            <option value="Sanidad Completa">Sanidad Completa</option>
                                        </select>
                                    </div>
                                </div>    
                                <div class="container border rounded mb-3 p-3"> 
                                    <div class="mb-3">
                                        <label for="consignatario">Consignatario</label>
                                        <select id="consignatario" name="consignatario_id" class="form-control" required>
                                            @foreach($consignatarios as $consignatario)
                                                <option value="{{ $consignatario->id }}">{{ $consignatario->name }}</option>
                                            @endforeach                                       
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="campo">Campo</label>
                                        <select id="campo" name="campo_id" required class="form-control">
                                            @foreach($campos as $campo)
                                                <option value="{{ $campo->id }}">{{ $campo->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>            
                                    <div class="mb-3">
                                        <label for="imagenes">Imágenes del lote</label>
                                        <input type="file" id="imagenes" name="imagenes[]" multiple class="form-control" required>
                                    </div>
                                </div>    
                                <div>
                                    <button type="submit" class="btn btn-primary btn-block">Publicar</button>
                                </div>                                       
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     
        <script>
            document.getElementById("categoria").addEventListener("change", function() {
                const categoriaSelect = document.getElementById("categoria");
                const edadSelect = document.getElementById("edad");
        
                // Borra todas las opciones anteriores en el select de edad
                edadSelect.innerHTML = "";
        
                // Obtiene la categoría seleccionada
                const categoria = categoriaSelect.value;
        
                // Agrega opciones de edad según la categoría seleccionada
                if (categoria === "Terneros" ||categoria === "Terneras" || categoria === "Terneras y terneros") {
                    // Opciones para terneros
                    const opcionesEdad = ["1 a 3 meses", "3 a 6 meses", "6 a 9 meses", "9 a 12 meses", "12 a 15 meses", "15 a 18 meses" , "18 a 21 meses", "21 a 24 meses"];
                    opcionesEdad.forEach(function(opcion) {
                        const option = document.createElement("option");
                        option.text = opcion;
                        edadSelect.add(option);
                    });
                } else if (categoria === "Novillitos" ||categoria === "Novillos y vaquillonas" ||categoria === "Novillos" ||categoria === "Toros" ||categoria === "Vacas de invernada"||categoria === "Vacas cut"||categoria === "Vaquillonas") {
                    // Opciones para toros
                    const opcionesEdad = ["1 a 2 años", "2 a 3 años", "3 a 4 años","4 a 5 años","5 a 6 años", "Mas de 7 años"];
                    opcionesEdad.forEach(function(opcion) {
                        const option = document.createElement("option");
                        option.text = opcion;
                        edadSelect.add(option);
                    });
                }
            });
        </script>

    </div>
</div>         
@endsection --}}
