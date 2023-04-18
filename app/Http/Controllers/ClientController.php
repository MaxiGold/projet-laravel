<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_client'=>'required',
            'adresse_client'=> 'required',
            'lieu_travail' => 'required'
        ]);


        $client = new Client([
            'nom_client' => $request->get('nom_client'),
            'adresse_client' => $request->get('adresse_client'),
            'lieu_travail' => $request->get('lieu_travail')
        ]);


        $client->save();
        return redirect('/Client')->with('success', 'Client Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $client = Client::findOrFail($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nom_client'=>'required',
            'adresse_client'=> 'required',
            'lieu_travail' => 'required'

        ]);




        $client = Client::findOrFail($id);
        $client->nom_client = $request->get('nom_client');
        $client->adresse_client = $request->get('adresse_client');
        $client->lieu_travail = $request->get('lieu_travail');
     

        $client->update();

        return redirect('/Client')->with('success', 'Client Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect('/Client')->with('success', 'Client Modifié avec succès');
    }
}
