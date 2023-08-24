@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1>Inserisci un nuovo progetto</h1>
                    </div>
    
                    <div>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-primary">Tutti i progetti</a>
                    </div>
                </div>

                <div>
                    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-4">
                            <label class="contol-lable">Titolo</label>
                            <input class="form-control @error ('title')is-invalid @enderror" type="text" name="title" id="title" placeholder="Titolo" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label class="contol-lable">Immagine</label>
                            <input type="file" class="form-control @error ('image') is-invalid @enderror" name="image" id="image">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label class="contol-lable">Contenuto</label>
                            <textarea class="form-control" name="content" id="content" placeholder="Contenuto">{{ old('content') }}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <button class="btn btn-sm btn-success" type="submit">Salva</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection