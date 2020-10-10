<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
@extends('layouts.app')

@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

<body>
    @section('content')
    <section class="principal">
        <div class="container">
            <div class="row">
                <div class="imagen col-lg-6">
                    <img src="{{asset('img/pexels-photo-3793316.webp')}}" class="img-fluid mt-4" alt="" width="300"
                        height="300">
                </div>

                <div class="formulario col-lg-6">
                    <div class="titulo mt-4">
                        <h2 class="text-center">Registrate a nuestros hoteles</h2>
                    </div>
                    <form class="mt-4" action="">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2"><label for="">Nombres</label></div>
                                <div class="col-10"><input type="text" class="form-control" placeholder="nombres">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2"><label for="">Apellidos</label></div>
                                <div class="col-10"><input type="text" class="form-control" placeholder="Apellidos">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2"><label for="">Correo</label></div>
                                <div class="col-10"><input type="text" class="form-control"
                                        placeholder="expample@correo.com"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2"><label for="">Contraseña</label></div>
                                <div class="col-10"><input type="text" class="form-control" placeholder="*******">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2"><label for="">Correo</label></div>
                                <div class="col-10"><input type="text" class="form-control"
                                        placeholder="expample@correo.com"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-2"><label for="">Identificacion</label></div>
                                <div class="col-10"><input type="text" class="form-control"
                                        placeholder="Cedula/Cedula Extranjero"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Registrarme" name="" id=""
                                class="btn btn-outline-info btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endsection
</body>

</html>