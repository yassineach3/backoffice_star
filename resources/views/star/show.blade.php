@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{ asset($star->image) }}"
             class="rounded mx-auto d-block mt-lg-5"
             style="width:25%; height:25%">

        <div class="row justify-content-center pt-5">
            <div class="col-lg-8 col-md-8 col-12">
                <h2>{{ strtoupper($star->nom) }} {{ ucfirst($star->prenom) }} :</h2>
                <p> {!! $star->description !!} </p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="{{route('star.index')}}" class="btn btn-info"> Back</a>
            </div>
        </div>

    </div>
@endsection
