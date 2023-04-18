<?php


namespace App\Http\Controllers;


use App\Models\Agence;
use Illuminate\Http\Request;


class AgenceController extends Controller
{

    /**
     * Affiche la liste des personnages
     */
    public function index()
    {

        $agences = Agence::all();
        return view('agence.index', compact('agences'));

    }


    /**
     * return le formulaire de creation d'un personange
     */
    public function create()
    {

        return view('agence.create');

    }


    /**
     * Enregistre un nouveau personnage dans la base de données
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom_ag'=>'required',
            'nom_cite'=> 'required',
            'province' => 'required'
        ]);


        $agence = new Agence([
            'nom_ag' => $request->get('nom_ag'),
            'nom_cite' => $request->get('nom_cite'),
            'province' => $request->get('province')
        ]);


        $agence->save();
        return redirect('/Agence')->with('success', 'Agence Ajouté avec succès');

    }


    /**
     * Affiche les détails d'un personnage spécifique
     */

    public function show($id)
    {

        $agence = Agence::findOrFail($id);
        return view('agence.show', compact('agence'));

    }


    /**
     * Return le formulaire de modification
     */

    public function edit($id)
    {

        $agence = Agence::findOrFail($id);

        return view('agence.edit', compact('agence'));

    }


    /**
     * Enregistre la modification dans la base de données
     */
    public function update(Request $request, $id)
    {

        $request->validate([

            'nom_ag'=>'required',
            'nom_cite'=> 'required',
            'province' => 'required'

        ]);




        $agence = Agence::findOrFail($id);
        $agence->nom_ag = $request->get('nom_ag');
        $agence->nom_cite = $request->get('nom_cite');
        $agence->province = $request->get('province');
     

        $agence->update();

        return redirect('/Agence')->with('success', 'Agence Modifié avec succès');

    }




    /**
     * Supprime le personnage dans la base de données
     */
    public function destroy($id)
    {

        $agence = Agence::findOrFail($id);
        $agence->delete();

        return redirect('/Agence')->with('success', 'Agence Modifié avec succès');

    }

}