@extends('layouts.app')
@section('title',"@yield('title')")
@section('contents')
    <form action="@yield('form-action')" method="@yield('form-method')">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    @yield('card-title')
                </h6>
            </div>
            @csrf
            <div class="card-body">
                @yield('form-content')
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
@endsection
