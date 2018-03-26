<?php

namespace App\Http\Controllers;

use App\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TicketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket.registerTicketMobile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new Ticket($request->all());
        //Manipulando la imagen de arxchivo
        $photoFile = $request->file('photo');
        $nameFile = $photoFile->getClientOriginalName();

//        $pathFile = storage_path($pathStorage);
        $ticket->photo = Auth::user()->id.'-'.$nameFile;
        $x = $request->get('inputLat');
        $y = $request->get('inputLng');
        $ubication = [$x,$y];
        $ticket->x_position = $x;
        $ticket->y_position= $y;
        $ticket->state = 1;
        $ticket->user_id = Auth::user()->id;
        $pathStorage = Storage::disk('public')->put('photo', $photoFile);
        $ticket->save();
        dd($ticket);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(ticket $ticket)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(ticket $ticket)
    {
        //
    }

    public function Prueba()
    {
        $test = Ticket::find(1);
        dd($test);
    }
}
