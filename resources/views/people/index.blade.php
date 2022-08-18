@extends('layouts.app')

@section('title', 'Star Wars - People')

@section('content')
    <div class="container px-4">
        <div class="row row-cols-3 g-4">
            @foreach($people['results'] as $people)
                <div class="col">
                    <div class="p-3 border shadow-sm rounded">
                        <h2 class="h4 mb-4">{{ $people['name'] }}</h2>
                        <div class="row">
                            <div class="col-6">
                                <strong>Birth year</strong>
                            </div>
                            <div class="col-6">
                                {{ $people['birth_year'] }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <strong>Height</strong>
                            </div>
                            <div class="col-6">
                                {{ $people['height'] }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection()
