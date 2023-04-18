<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $logements = Logement::all();
        return view('logement.index', compact('logements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('logement.create');
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
            'num_logement'=>'required',
            'type_vente'=> 'required',
            'terrain' => 'required',
            'prix' => 'required'
        ]);


        $logement = new Logement([
            'num_logement' => $request->get('num_logement'),
            'type_vente' => $request->get('type_vente'),
            'terrain' => $request->get('terrain'),
            'prix' => $request->get('prix')
        ]);


        $logement->save();
        return redirect('/Logement')->with('success', 'Logement Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logement  $logement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $logement = Logement::findOrFail($id);
        return view('logement.show', compact('logement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logement  $logement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logement = Logement::findOrFail($id);
        return view('logement.edit', compact('logement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logement  $logement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'num_logement'=>'required',
            'type_vente'=> 'required',
            'terrain' => 'required',
            'prix' => 'required'

        ]);




        $logement = Logement::findOrFail($id);
        $logement->num_logement = $request->get('num_logement');
        $logement->type_vente = $request->get('type_vente');
        $logement->terrain = $request->get('terrain');
        $logement->prix = $request->get('prix');
     

        $logement->update();

        return redirect('/Logement')->with('success', 'Logement Modifié avec succès');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logement  $logement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $logement = Logement::findOrFail($id);
        $logement->delete();

        return redirect('/Logement')->with('success', 'Logement Modifié avec succès');
    }
}
