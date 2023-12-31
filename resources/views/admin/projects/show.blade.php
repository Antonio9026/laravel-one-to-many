@extends('layouts.app')

@section('content')
    <div class="routes">
        <a href="{{ route('admin.projects.index') }}"><button>torna indietro</button></a>
    </div>
    <div class="container-show">
        <div class="card-wrapper-show">
            <div class="card_show">

                <div class="img-container-show">
                    <img src="{{ asset("/storage/" .$project->image ) }}" alt="">
                </div>

                <div class="series">
                    <h1>{{ $project->title }}</h1>
                    <p>{{ $project->description }}</p>
                    <a href="{{ $project->github_link }}"><i class="fa-brands fa-github"></i></a>
                </div>
               

            </div>
        </div>
    </div>
    
@endsection
