<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TestController extends Controller
{
    public function list(Request $request)
    {

    
        $event = [
            'id' => 1,
            'title' => 'testeVuJs',
            'start_date' => Carbon::now(),
            'description' => 'Este eh um teste de laravel Vuejs'
        ];

        $event = collect($event);
    
        return Inertia::render('Home', [
            'event' => $event->only(
                'id',
                'title',
                'start_date',
                'description'
            ),
        ]);
    }
}
