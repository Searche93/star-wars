<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class SpeciesController extends Controller
{
    public function index(): View
    {
        $species = Http::swapi()->get('/species');
        return view('species.index', compact('species'));
    }
}
