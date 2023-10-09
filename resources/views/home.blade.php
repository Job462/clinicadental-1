@extends('layouts.app')

@section('title','Home')


<body>
    
    <header>
        <h2 class="logo">Clinica Dental Sonrisitas</h2>
        <nav class="navigation">
            <a href="">Inicio</a>
            <a href="">Reservas</a>
            <a href="">Servicios</a>
            <a href="{{ route('login.index') }}" class="btn btnLogin">Iniciar Sesión</a>
            <a href="{{ route('register.index') }}" class="btn btnRegister">Registrarse</a>
        </nav>
    </header>
    <img class='img' src="{{ asset('images/background.jpg') }}" alt="">
    
    



</body>