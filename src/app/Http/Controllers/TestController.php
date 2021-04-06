<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

        
        // try{

            $request->validate([
                'name' => ['required'],
                'email' => ['required'],
                'password' => ['required'],

            ]);
            // throw new Exception('erro inesperado');
            return Redirect::route('about');

        // }catch(Exception $e){
        //     return Redirect::route('about');

        // }
    }
}
