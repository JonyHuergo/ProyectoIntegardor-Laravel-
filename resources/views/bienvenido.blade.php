@extends('layouts.default')
@php
/*
session_start();
if(!isset($_SESSION["registrado"])){
  header("Location: ingresar.php");
}*/
@endphp
@section('title', 'Bienvenido')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bienvenidoStyle.css') }}">
@endsection
@section('content')
<h1>Bienvenido</h1>
                <span><h3>¡Gracias por haberte logueado <?='Usuario'/*$_SESSION["usuario"]*/?>!</h3></span>
@stop