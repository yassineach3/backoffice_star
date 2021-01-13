@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="d-flex justify-content-center pt-4">Update a star</h1>
        <form action="{{ route('star.update', $star->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nom</label>
                    <input type="text" name="nom" class="form-control" value="{{ $star->nom }}" required>
                    @error('nom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Prenom</label>
                    <input type="text" class="form-control" name="prenom" value="{{ $star->prenom }}" required>
                    @error('prenom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5" required>{{ $star->description }}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="file" name="image" class="form-control" accept="image/png, image/jpeg, image/jpg" required>
                    @error('file')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-4">
                    <img class="rounded float-left" src="{{ asset($star->image) }}"
                         style="width:80%;height:80%"
                    >
                </div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-primary">Update star</button>
                </div>
            </div>

        </form>

    </div>
@endsection
