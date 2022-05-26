@extends('adminlte::page')

@section('title', 'admin')

@section('content_header')
    <h1>Admin</h1>
@stop

@section('content')
    <div id="app">
        <Index></Index>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}" defer></script>
@stop
