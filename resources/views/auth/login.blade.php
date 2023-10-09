@extends('layouts.app')
@section('title','Login')


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Larabel App </title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head> 
<body>
    <header>
        <div class="logo">
            <img src="{{ asset('images/54.png')}}" alt="">
            <h2>Clinica Dental Sonrisitas</h2>
        </div>
        <nav class="navigation">
            <a href="">Inicio</a>
            <a href="">Reservas</a>
            <a href="">Servicios</a>
            <a href="#" class="btn btnLogin">Iniciar Sesión</a>
            <a href="{{ route('register.index') }}" class="btn btnRegister">Registrarse</a>
        </nav>
    </header>
    <img class='img' src="{{ asset('images/background.jpg') }}" alt="">

    
    <div class="wrapper">
        <div class="form-box login">
            <h2>Iniciar Sesión</h2>
            <form action="" method="post">
                @csrf

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" required>
                    <label>Correo Electronico</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" required>
                    <label>Contraseña</label>
                </div>
                
                <div class="remember-forgot">
                    <label><input type="checkbox">Recuerdame</label>
                    <a href="#">Olvidaste tu Contraseña?</a>

                </div>
                <button class="btn1" type="submit">Ingresar</button>
                <div class="login-register">
                    <p>No tienes una cuenta? <a href="#" class="register-link">Registrarse</a></p>
                </div>

            </form>
        </div>
    </div>


</body> 

