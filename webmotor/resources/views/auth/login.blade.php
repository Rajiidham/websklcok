@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">

    <div class="card">
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="" rows="3"></input>
                @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                    </div>
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input value="{{ old('password') }}" name="password" type="password" class="form-control" id="" rows="3"></input>
                @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                    </div>
                <button type="submit" class="btn btn-success">Login</button>
                <a href="{{ route('password.request') }}" class="btn btn-link"> Forgot Your Password</a>
            </form>
        </div>
    </div>
</div>

@endsection