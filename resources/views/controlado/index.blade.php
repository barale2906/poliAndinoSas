@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1>Control</h1>
@stop

@section('content')
    <p>Bienvenido a tu panle de control.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
        )
    </script>
@stop
