<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directeur;

class DirecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!session()->has('admin_id')) {
            return redirect(route('admins.login')); 
        }
        return view('admins.directeurs.index', [
            'directeurs' => Directeur::orderByDesc('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!session()->has('admin_id')) {
            return redirect(route('admins.login')); 
        }
        return view('admins.directeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count(Directeur::where('cni',$request->cni)->get())!=0) return back()->with('succes','CNI existe déjà !!!!') ;
        $directeur = new Directeur();
        $directeur->userid = session()->get('admin_id');
        $directeur->cni = $request->cni;
        $directeur->nom = $request->nom;
        $directeur->prenom = $request->prenom;
        $directeur->adresse = $request->adresse;
        $directeur->telephone = $request->telephone;
        $directeur->cni = $request->cni;
        $directeur->signature = $request->signature;
        $directeur->save();
        return redirect(route('admins.directeurs.index'))->with('succes' , 'Directeur créé avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!session()->has('admin_id')) {
            return redirect(route('admins.login')); 
        }
        return view('admins.directeur.edit', [
            'directeur' => Directeur::find($id),
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $directeur = Directeur::find($id);
        $directeur->userid = session()->get('admin_id');
        $directeur->cni = $request->cni;
        $directeur->nom = $request->nom;
        $directeur->prenom = $request->prenom;
        $directeur->adresse = $request->adresse;
        $directeur->telephone = $request->telephone;
        $directeur->cni = $request->cni;
        $directeur->signature = $request->signature;
        $directeur->save();
        return redirect(route('admins.directeurs.index'))->with('succes' , 'Directeur créé avec succès');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!session()->has('admin_id')) {
            return redirect(route('admins.login')); 
        }
        Directeur::find($id)->delete();
        return back()->with('succes','Suppression !!!!') ;
    }
}
