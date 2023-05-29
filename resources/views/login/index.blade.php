@extends('app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            <br>
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form method="POST" action="{{ route('login.action') }}">
                @csrf
                <div class="nb-3">
                    <label>Email <span class="text-danger">*</span></label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" />
                </div>
                <br>
                <div class="nb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password" />
                </div>
                <br>
                <div class="nb-3">
                    <button class="btn btn-primary">
                        Login
                    </button>
                    <a class="btn btn-danger" href="{{ route('dashboard') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
