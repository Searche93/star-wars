@extends('layouts.app')

@section('title', 'Star Wars - Species')

@section('content')

    <div class="container px-4">
        <div class="row row-cols-3 g-4">
            @foreach($species['results'] as $specie)
                <div class="col">
                    <div class="p-3 border shadow-sm rounded">
                        <h2 class="h4 mb-4">{{ $specie['name'] }}</h2>
                        <div class="row">
                            <div class="col-6">
                                <strong>Average height</strong>
                            </div>
                            <div class="col-6">
                                {{ $specie['average_height'] }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Average lifespan</strong>
                            </div>
                            <div class="col-6">
                                {{ $specie['average_lifespan'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection()
