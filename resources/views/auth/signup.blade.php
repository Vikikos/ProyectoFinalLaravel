@extends('layout.layout')

@section('title', 'Registrarse')

@section('main')
<h1>Registrarse</h1>
<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" value="{{old('name')}}" >
    </div>
    @error('name') {{$message}} @enderror

    <div>
        <label for="email">Correo Electronico</label>
        <input type="text" name="email" id="email" value="{{old('email')}}" >
    </div>
    @error('email') {{$message}} @enderror

    <div>
        <label for="birthday">Fecha Nacimiento</label>
        <input type="text" name="birthday" id="birthday" placeholder="DD/MM/YYYY" value="{{old('birthday')}}">
    </div>
    @error('birthday') {{$message}} @enderror

    <div>
        <label for="password">Contraseña</label>
        <input type="text" name="password" id="password">
    </div>
    @error('password') {{$message}} @enderror

    <div>
        <label for="password_confirmation">Repitir Contraseña</label>
        <input type="text" name="password_confirmation" id="password_confirmation">
    </div>
    @error('password_confirmation') {{$message}} @enderror

    <div>
        <label for="photo">Foto(Opcional)</label>
        <input type="file" name="photo" id="photo">
    </div>
    <div>
        <input type="reset" value="Borrar Todo">
        <input type="submit" value="Registrarse">
    </div>
</form>
@endsection
