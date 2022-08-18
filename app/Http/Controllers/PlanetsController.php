<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class PlanetsController extends Controller
{
    public function index(): View
    {
        $planets = Http::swapi()->get('/planets');
        return view('planets.index', compact('planets'));
    }
}
