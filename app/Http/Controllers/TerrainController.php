<?php

namespace App\Http\Controllers;

use App\Models\Terrain;
use Illuminate\Http\Request;

class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $terrains = Terrain::all();
        return view('terrain.index', compact('terrains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('terrain.create');
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
            'num_terrain'=>'required',
            'emplacement'=> 'required',
            'superficie' => 'required',
            'province' => 'required'
        ]);


        $terrain = new Terrain([
            'num_terrain' => $request->get('num_terrain'),
            'emplacement' => $request->get('emplacement'),
            'superficie' => $request->get('superficie'),
            'province' => $request->get('province')
        ]);


        $terrain->save();
        return redirect('/Terrain')->with('success', 'Terrain Ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $terrain = Terrain::findOrFail($id);
        return view('terrain.show', compact('terrain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $terrain = Terrain::findOrFail($id);
        return view('terrain.edit', compact('terrain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([

            'num_terrain'=>'required',
            'emplacement'=> 'required',
            'superficie' => 'required',
            'province' => 'required'

        ]);




        $terrain = Terrain::findOrFail($id);
        $terrain->num_terrain = $request->get('num_terrain');
        $terrain->emplacement = $request->get('emplacement');
        $terrain->superficie = $request->get('superficie');
        $terrain->province = $request->get('province');
     

        $terrain->update();

        return redirect('/Terrain')->with('success', 'Terrain Modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Terrain  $terrain
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $terrain = Terrain::findOrFail($id);
        $terrain->delete();

        return redirect('/Terrain')->with('success', 'Terrain Modifié avec succès');
    }
}
