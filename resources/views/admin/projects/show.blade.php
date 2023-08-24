@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div>
                        <h1>{{ $project->title }}</h1>
                    </div>
    
                    <div>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-primary">Tutti i progetti</a>
                    </div>
                </div>

                <div>
                    <img src="{{ asset('storage/'.$project->image) }}" width="500px">
                </div>

                <p>
                    {{ $project->content }}
                </p>
            </div>
        </div>
    </div>

@endsection