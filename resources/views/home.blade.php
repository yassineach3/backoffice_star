@extends('layouts.app')

@section('content')
    <div class="container">
        @if(count($stars)>0)
            <h1 class="d-flex justify-content-center pt-4">Profile browser</h1>
        @else
            <h1 class="d-flex justify-content-center pt-4">
                <span class="badge badge-secondary">
                        No star found!
                    </span>
            </h1>
        @endif

        <div class="row pt-5">
            @foreach($stars as $star)
                <div class="col-sm-3 pb-4">
                    <div class="card" >
                        <img class="card-img-top img-fluid" src="{{ asset($star->image) }}"
                             style="height:100%; width: 100%"
                        >
                        <div class="card-body">
                            <h5 class="card-title">{{ strtoupper($star->nom) }} {{ $star->prenom }}</h5>
                            <p class="card-text">
                                {!! Str::limit($star->description) !!}
                            </p>
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <a href="{{ route('star.show', $star->id) }}" class="card-link btn btn-info">View</a>
                                </div>
                                @can('update-delete-star')
                                    <div class="col-4">
                                        <a href="{{ route('star.edit', $star->id) }}" class="card-link btn btn-success">Update</a>
                                    </div>
                                    <div class="col-4">
                                        <form action="{{route('star.destroy', $star->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
