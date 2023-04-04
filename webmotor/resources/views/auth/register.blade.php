@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
    <div class="card">
        <div class="card-body">
            <form action="{{route ('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input name="name" type="text" value="{{ old('name') }}" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input  name="email" type="email" value="{{ old('email') }}" class="form-control">
                    @error('email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input  name="password" type="password" value="{{ old('password') }}" class="form-control">
                    @error('password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Confirm password</label>
                    <input  name="password_confirmation" type="password" 
                    class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
                @error('activity')
                <span class="text-danger">
                    {{ $message }}
                </span>
                @enderror
            </form>
        </div>
    </div>
</div>

@endsection