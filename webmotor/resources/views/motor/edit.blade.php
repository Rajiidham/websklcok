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
            <form action="{{route('motor.update', $Motor->id)}}" method="POST">
                @csrf @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label">Pabrik</label>
                    <input type="text"  name="pabrik" value="{{ old('pabrik', $Motor->pabrik)}}" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jenis</label>
                    <input type="text"  name="jenis" value="{{ old('jenis', $Motor->jenis)}}" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kapasitas Mesin</label>
                    <input type="text"  name="cc" value="{{ old('cc', $Motor->cc)}}" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Horsepower</label>
                    <input type="text"  name="horsepower" value="{{ old('horsepower', $Motor->horsepower)}}" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Torsi</label>
                    <input type="text"  name="torsi" value="{{ old('torsi', $Motor->torsi)}}" class="form-control">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
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