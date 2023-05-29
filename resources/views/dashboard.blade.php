@extends('layouts.app')
@section('title', 'Dashboard')
@section('contents')
    @auth
        <h2>Selamat Datang, {{ Auth::user()->name }}</h2>
    @else
        <h2>Selamat Datang</h2>
    @endauth
@endsection
