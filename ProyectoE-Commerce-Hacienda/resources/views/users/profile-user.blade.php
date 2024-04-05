@extends('layouts.app')


@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="card">
    <div class="card-body">
        <h4 class="card-title text-center">Perfil de Usuario</h4>
        <p class="card-description text-center">
            Información de tu perfil
        </p> 
        <form method="POST" action="{{ route('person.update') }}">
            @csrf     
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="firs_name" placeholder="First Name" value="{{ $person->firs_name }}" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Apellido</label>
                    <input type="text" class="form-control form-control-sm" name="last_name" placeholder="Last Name" value="{{ $person->last_name }}" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Dni</label>
                    <input type="text" class="form-control form-control-sm" name="dni" placeholder="DNI" value="{{ $person->dni }}" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Dirección</label>
                    <input type="text" class="form-control form-control-sm" name="address" placeholder="Address" value="{{ $person->address }}" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Telefono</label>
                    <input type="text" class="form-control form-control-sm" name="phone_number" placeholder="Phone Number" value="{{ $person->phone_number }}" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Razon Social</label>
                    <input type="text" class="form-control form-control-sm" name="business_name" placeholder="Business Name" value="{{ $person->business_name }}" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Cuil</label>
                    <input type="text" class="form-control form-control-sm" name="cuil" placeholder="Cuil" value="{{ $person->cuil }}" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Ciudad</label>
                    <input type="text" class="form-control form-control-sm" name="city" placeholder="City" value="{{ $person->city }}" required>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-6 text-left">
                    <label for="name">Provincia</label>
                    <input type="text" class="form-control form-control-sm" name="province" placeholder="Province" value="{{ $person->province }}" required>
                </div>
            </div>
            <div class="form-group d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Editar perfil</button>
            </div>
        </form>
    </div>
</div>    
@endsection


{{-- @section('content')
<div class="container">
    <h1>Perfil de {{ $user->name }}</h1>

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" readonly>
    </div>

    <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" readonly>
    </div>

    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Editar perfil</a>
</div>
@endsection --}}
