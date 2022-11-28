@extends('template')

@section('content')
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ url('/') }}" class="btn btn-outline-info me-3">Accueil</a>
    </div>

    <div class="row ">
        @foreach ($galleries as $gallery)
            <div class="card col-lg-4" style="width: 20rem;">
                <a href="{{ $gallery->file }}" data-lity>
                    <img src="{{ $gallery->file }}" class="card-img-top" alt="...">
                </a>
            </div>
        @endforeach
    </div>
@endsection