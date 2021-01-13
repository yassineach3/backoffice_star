@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="d-flex justify-content-center pt-4">Create new star</h1>
        <form action="{{ route('star.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required>
                    @error('nom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Prenom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
                    @error('prenom')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="inputAddress2">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5" placeholder="Description" required></textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="file" name="image" class="form-control" accept="image/png, image/jpeg, image/jpg" required>
                    @error('file')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Add star</button>
                </div>
            </div>

        </form>

    </div>
@endsection
