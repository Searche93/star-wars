@extends('layouts.app')

@section('title', 'Star Wars - Planets')

@section('content')

    <div class="container px-4">
        <div class="row row-cols-3 g-4">
            @foreach($planets['results'] as $planet)
                <div class="col">
                    <div class="p-3 border shadow-sm rounded">
                        <h2 class="h4 mb-4">{{ $planet['name'] }}</h2>
                        <div class="row">
                            <div class="col-6">
                                <strong>Population</strong>
                            </div>
                            <div class="col-6">
                                {{ $planet['population'] }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Gravity</strong>
                            </div>
                            <div class="col-6">
                                {{ $planet['gravity'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection()
