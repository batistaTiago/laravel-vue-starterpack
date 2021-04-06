<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    public function list(Request $request)
    {

        
        $user = 'Eumesmo';
        $event = [
            'id' => 1,
            'title' => 'testeVuJs',
            'start_date' => Carbon::now(),
            'description' => 'Este eh um teste de laravel Vuejs'
        ];

        $event = collect($event);
    
        return Inertia::render('Home', [
            'user' => $user,
            'event' => $event
        ]);
    }


    public function about(Request $request)
    {

        return Inertia::render('About');
    }

    public function register(Request $request)

    {
        return Inertia::render('Register');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
