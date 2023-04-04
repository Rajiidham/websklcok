@extends('layouts.app')

@section('main')

<div class="border rounded mt-5 mx-auto d-flex flex-column align-items-stretch bg-dark" style="width: 380px;">
    <div class="d-flex justify-content-between flex-shrink-0 p-3 link-dark  border-bottom">
        <span class="fs-5 fw-semibold text-white">Motorcycle Lists</span>
        <a href="{{route ('motor.create') }}"><span class="btn btn-sm btn-primary">add</span></a>
    </div>

    @foreach($Motor as $data)
    <div class="list-group list-group-flush border-bottom scrollarea">


        <div class="list-group-item list-group-item-action py-3 lh-tight p-3" aria-current="true">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">{{ $data->pabrik}}</strong>
                <small>{{ $data->cc }}</small>
            </div>
            <div class="d-flex align-items-end justify-content-end">
                <small>{{ $data->horsepower }}</small>
            </div>
            <div class="d-flex align-items-end justify-content-end">
                <small>{{ $data->torsi }}</small>
            </div>
            <div class="col-10 mb-1 small">{{ $data->jenis }}.</div>
            <div class="group-action">
                <form action="{{ route('motor.destroy', $data->id )}}" method="POST">
                    @csrf @method('DELETE')

                    <a href="{{ route ('motor.edit', $data->id)}}" class="badge bg-info text-white">edit</a>
                    <button type="submit" class="badge bg-danger text-white">delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <div class="mt-4 d-flex justify-content-center">
        {{ $Motor->links('pagination::bootstrap-4') }}
    </div>

</div>

@endsection