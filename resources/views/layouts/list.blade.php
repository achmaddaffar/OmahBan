@extends('includes.app')

@section('title', "@yield('title')")
@section('contents')
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="@yield('tambah-route')" class="btn btn-primary mb-3">Tambah</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            @yield('column-names')
                        </tr>
                    </thead>
                    <tbody>
                        @yield('table')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
