@extends('layouts.app')

@section('title', 'Star Wars API homepage')

@section('content')
    <div class="container mt-4">
        <div class="row row-cols-3 g-4">
            <div class="col">
                <div class="p-3 border shadow-sm rounded text-center">
                    <a class="text-dark" href="{{ route('people.index') }}">
                        <p class="mb-2"><i class="fas fa-user fa-2x"></i></p>
                        <h2 class="h4">People</h2>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border shadow-sm rounded text-center">
                    <a class="text-dark" href="{{ route('planets.index') }}">
                        <p class="mb-2"><i class="fas fa-globe fa-2x"></i></p>
                        <h2 class="h4">Planets</h2>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="p-3 border shadow-sm rounded text-center">
                    <a class="text-dark" href="{{ route('species.index') }}">
                        <p class="mb-2"><i class="fas fa-user-secret fa-2x"></i></p>
                        <h2 class="h4">Species</h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection()
