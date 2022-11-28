@extends('template')

@section('content')
    <div class="mb-3 d-flex justify-content-end">
        <a href="{{ url('gallery') }}" class="btn btn-outline-warning me-3">Voir la Galerie d'images</a>
    </div>
   
    <form action="{{ url('gallery') }}" class="dropzone">
        {{ csrf_field() }}
    </form>
@endsection