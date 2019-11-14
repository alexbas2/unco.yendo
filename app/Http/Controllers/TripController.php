<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    //
    public function create(){
        return view('trip.create');
    }

    public function store(Request $request){
       // $hora = strtotime($request->hora);
        $trip=Trip::create([
            'calle'=>$request->calle,
            'fecha'=>$request->fecha,
            'hora'=>$request->hora,
            'user_id'=>auth()->user()->id,
            'numero'=>$request->numero,
            'lugares_disponibles'=>$request->lugares_disponibles
        ]);

        return response()->json(['trip'=>$trip],200);
    }

    public function solicitar(Request $request){
        return view('trip.solicitar');
    }

    public function viajes(Request $request){
        $viajes=Trip::where('fecha','=',$request->fecha)->get();

        return view('trip.index',['viajes'=>$viajes]);
    }

    public function show(Trip $trip){

        return view('trip.show',['viaje'=>$trip]);
    }
}
