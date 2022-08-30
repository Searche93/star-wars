<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class PeopleController extends Controller
{

    public function index(): View
    {
        $people = Http::swapi()->get('/people');
        return view('people.index', compact('people'));
    }

}
