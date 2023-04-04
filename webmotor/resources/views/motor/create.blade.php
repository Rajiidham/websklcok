@extends('layouts.app')

@section('main')

<div class="mt-5 mx-auto" style="width: 380px">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="card">
        <div class="card-body">
            <form action="{{route ('motor.add')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Pabrik</label>
                    <input required name="pabrik" type="text" value="{{ old('pabrik') }}" class="form-control">
                    @error('pabrik')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jenis</label>
                    <input required name="jenis" type="text" value="{{ old('jenis') }}" class="form-control">
                    @error('jenis')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">CC</label>
                    <input required name="cc" type="text" value="{{ old('cc') }}" class="form-control">
                    @error('cc')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Horsepower</label>
                    <input required name="horsepower" type="text" value="{{ old('horsepower') }}" class="form-control">
                    @error('horsepower')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">torsi</label>
                    <input required name="torsi" type="text" value="{{ old('torsi') }}" class="form-control">
                    @error('torsi')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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