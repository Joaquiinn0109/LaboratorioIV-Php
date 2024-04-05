@extends('layouts.app')


@section('content')
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Editar una publicación</h4>
        <p class="card-description text-center">
            Modifique los valores que desea actualizar
        </p>
        <form name="formulario" class="forms-sample" method="POST" action="{{ route('update.publicacion', ['id' => $publication->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="proposito" class="col-sm-4 col-form-label">Propósito</label>
                        <select class="form-control form-control-sm bg-light" id="proposito" name="proposito"  required>
                            <option selected>Seleccionar</option>
                            <option value="Invernada"{{ $publication->purpose == 'Invernada' ? 'selected' : '' }}>Invernada</option>
                            <option value="Faena"{{ $publication->purpose == 'Faena' ? 'selected' : '' }}>Faena</option>
                            <option value="Reproduccion"{{ $publication->purpose == 'Reproduccion' ? 'selected' : '' }}>Reproducción</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="categoria" class="col-sm-4 col-form-label">Categoría</label>
                        <select class="form-control form-control-sm bg-light" id="categoria" name="categoria" required>
                            <option selected>Seleccionar</option>
                            <option value="Terneros" {{ $publication->category == 'Terneros' ? 'selected' : '' }}>Terneros</option>
                            <option value="Terneras" {{ $publication->category == 'Terneras' ? 'selected' : '' }}>Terneras</option>
                            <option value="Terneras y terneros" {{ $publication->category == 'Terneras y terneros' ? 'selected' : '' }}>Terneras y terneros</option>
                            <option value="Novillitos" {{ $publication->category == 'Novillitos' ? 'selected' : '' }}>Novillitos</option>
                            <option value="Novillos y vaquillonas" {{ $publication->category == 'Novillos y vaquillonas' ? 'selected' : '' }}>Novillos y vaquillonas</option>
                            <option value="Novillos" {{ $publication->category == 'Novillos' ? 'selected' : '' }}>Novillos</option>
                            <option value="Toros" {{ $publication->category == 'Toros' ? 'selected' : '' }}>Toros</option>
                            <option value="Vacas de invernada" {{ $publication->category == 'Vacas de invernada' ? 'selected' : '' }}>Vacas de invernada</option>
                            <option value="Vacas cut" {{ $publication->category == 'Vacas cut' ? 'selected' : '' }}>Vacas cut</option>
                            <option value="Vaquillonas" {{ $publication->category == 'Vaquillonas' ? 'selected' : '' }}>Vaquillonas</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="raza" class="col-sm-4 col-form-label">Raza</label>
                        <select class="form-control form-control-sm bg-light" id="raza" name="raza" required>
                            <option selected>Seleccionar</option>
                            <option value="Angus" {{ $publication->breed == 'Angus' ? 'selected' : '' }}>Angus</option>
                            <option value="Braford" {{ $publication->breed == 'Braford' ? 'selected' : '' }}>Braford</option>
                            <option value="Brangus" {{ $publication->breed == 'Brangus' ? 'selected' : '' }}>Brangus</option>
                            <option value="Hereford" {{ $publication->breed == 'Hereford' ? 'selected' : '' }}>Hereford</option>
                            <option value="Holando" {{ $publication->breed == 'Holando' ? 'selected' : '' }}>Holando</option>
                            <option value="Jersey" {{ $publication->breed == 'Jersey' ? 'selected' : '' }}>Jersey</option>
                            <option value="Mestizo" {{ $publication->breed == 'Mestizo' ? 'selected' : '' }}>Mestizo</option>
                            <option value="Criollo" {{ $publication->breed == 'Criollo' ? 'selected' : '' }}>Criollo</option>
                            <option value="Otras" {{ $publication->breed == 'Otras' ? 'selected' : '' }}>Otras</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="edad" class="col-sm-4 col-form-label">Edad</label>
                        <select id="edad" class="form-control form-control-sm bg-light" aria-label="Edad" name="edad" required>
                            <option selected>Edad</option>
                            <option value="1 a 3 meses" {{ $publication->age == '1 a 3 meses' ? 'selected' : '' }}>1 a 3 meses</option>
                            <option value="3 a 6 meses" {{ $publication->age == '3 a 6 meses' ? 'selected' : '' }}>3 a 6 meses</option>
                            <option value="6 a 9 meses" {{ $publication->age == '6 a 9 meses' ? 'selected' : '' }}>6 a 9 meses</option>
                            <option value="9 a 12 meses" {{ $publication->age == '9 a 12 meses' ? 'selected' : '' }}>9 a 12 meses</option>
                            <option value="12 a 15 meses" {{ $publication->age == '12 a 15 meses' ? 'selected' : '' }}>12 a 15 meses</option>
                            <option value="15 a 18 meses" {{ $publication->age == '15 a 18 meses' ? 'selected' : '' }}>15 a 18 meses</option>
                            <option value="18 a 21 meses" {{ $publication->age == '18 a 21 meses' ? 'selected' : '' }}>18 a 21 meses</option>
                            <option value="21 a 24 meses" {{ $publication->age == '21 a 24 meses' ? 'selected' : '' }}>21 a 24 meses</option>
                            <option value="1 a 2 años" {{ $publication->age == '1 a 2 años' ? 'selected' : '' }}>1 a 2 años</option>
                            <option value="2 a 3 años" {{ $publication->age == '2 a 3 años' ? 'selected' : '' }}>2 a 3 años</option>
                            <option value="3 a 4 años" {{ $publication->age == '3 a 4 años' ? 'selected' : '' }}>3 a 4 años</option>
                            <option value="4 a 5 años" {{ $publication->age == '4 a 5 años' ? 'selected' : '' }}>4 a 5 años</option>
                            <option value="5 a 6 años" {{ $publication->age == '5 a 6 años' ? 'selected' : '' }}>5 a 6 años</option>
                            <option value="Mas de 7 años" {{ $publication->age == 'Mas de 7 años' ? 'selected' : '' }}>Mas de 7 años</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="cantidad" class="col-sm-4 col-form-label">Cantidad</label>
                        <input type="text" class="form-control form-control-sm" id="cantidad" placeholder="Cantidad de cabezas total" name="cantidad" value="{{ $publication->quantity }}" required>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="peso_promedio" class="col-sm-4 col-form-label">Peso promedio</label>
                        <input type="text" class="form-control form-control-sm" id="peso_promedio" placeholder="Peso promedio en kg" name="peso_promedio" value="{{ $publication->average_weight }}" required>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="preciokg" class="col-sm-4 col-form-label">Precio por kg</label>
                        <input type="text" class="form-control form-control-sm" id="preciokg" placeholder="Precio por kg" name="preciokg" value="{{ $publication->pricekg }}" required>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="estado_corporal" class="col-sm-4 col-form-label">Estado de Tropa</label>
                        <select class="form-control form-control-sm bg-light" id="estado_corporal" name="estado_corporal" required>
                            <option selected>Seleccionar</option>
                            <option value="Muy Bueno" {{ $publication->body_status == 'Muy Bueno' ? 'selected' : '' }}>Muy Bueno</option>
                            <option value="Bueno - Muy Bueno" {{ $publication->body_status == 'Bueno - Muy Bueno' ? 'selected' : '' }}>Bueno - Muy Bueno</option>
                            <option value="Bueno" {{ $publication->body_status == 'Bueno' ? 'selected' : '' }}>Bueno</option>
                            <option value="Regular - Bueno" {{ $publication->body_status == 'Regular - Bueno' ? 'selected' : '' }}>Regular - Bueno</option>
                            <option value="Regular" {{ $publication->body_status == 'Regular' ? 'selected' : '' }}>Regular</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="dieta" class="col-sm-4 col-form-label">Dieta Actual</label>
                        <select class="form-control form-control-sm bg-light" id="dieta" name="dieta" required>
                            <option selected>Seleccionar</option>
                            <option value="A Campo" {{ $publication->diet == 'A Campo' ? 'selected' : '' }}>A Campo</option>
                            <option value="A Campo + suplementación" {{ $publication->diet == 'A Campo + suplementación' ? 'selected' : '' }}>A Campo + suplementación</option>
                            <option value="Pasturas" {{ $publication->diet == 'Pasturas' ? 'selected' : '' }}>Pasturas</option>
                            <option value="Pasturas + suplementación" {{ $publication->diet == 'Pasturas + suplementación' ? 'selected' : '' }}>Pasturas + suplementación</option>
                            <option value="Verdeos de invierno" {{ $publication->diet == 'Verdeos de invierno' ? 'selected' : '' }}>Verdeos de invierno</option>
                            <option value="Feedlot" {{ $publication->diet == 'Feedlot' ? 'selected' : '' }}>Feedlot</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="estado_sanitario" class="col-sm-4 col-form-label">Estado sanitario</label>
                        <select class="form-control form-control-sm bg-light" id="estado_sanitario" name="estado_sanitario" required>
                            <option selected>Seleccionar</option>
                            <option value="Libre de brucelosis y tuberculosis" {{ $publication->health_status == 'Libre de brucelosis y tuberculosis' ? 'selected' : '' }}>Libre de brucelosis y tuberculosis</option>
                            <option value="Libre de brucelosis" {{ $publication->health_status == 'Libre de brucelosis' ? 'selected' : '' }}>Libre de brucelosis</option>
                            <option value="Libre de tuberculosis" {{ $publication->health_status == 'Libre de tuberculosis' ? 'selected' : '' }}>Libre de tuberculosis</option>
                            <option value="En saneamiento" {{ $publication->health_status == 'En saneamiento' ? 'selected' : '' }}>En saneamiento</option>
                            <option value="Sanidad Completa" {{ $publication->health_status == 'Sanidad Completa' ? 'selected' : '' }}>Sanidad Completa</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="consignatario" class="col-sm-4 col-form-label">Consignatario</label>
                        <select class="form-control form-control-sm bg-light" id="consignatario" name="consignatario_id" required>
                            @foreach($consignatarios as $consignatario)
                                <option value="{{ $consignatario->id }}" {{ $publication->consignee_id == $consignatario->id ? 'selected' : '' }}>{{ $consignatario->name }}</option>
                            @endforeach                                       
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="campo" class="col-sm-4 col-form-label">Campo</label>
                        <select class="form-control form-control-sm bg-light" id="campo" name="campo_id" required>
                            @foreach($campos as $campo)
                                <option value="{{ $campo->id }}" {{ $publication->field_id == $campo->id ? 'selected' : '' }}>{{ $campo->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <label for="imagenes" class="col-sm-4 col-form-label">Imágenes del lote</label>
                        <img src="{{ asset('storage/' . $publication->image_url) }}" alt="Imagen actual" width="100">
                        <input type="file" class="form-control form-control-sm" id="imagenes" name="imagenes[]" multiple>
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-6">
                        <button type="submit" class="btn btn-primary me-2" onclick="return confirm('¿Estás seguro de que quieres actualizar esta publicación?');"> Actualizar Publicación</button>
                        <a href="{{ route('my-posts.show') }}" class="btn btn-secondary">Cancelar</a>
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
