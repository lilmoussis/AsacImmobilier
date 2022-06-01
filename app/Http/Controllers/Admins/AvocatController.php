<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avocat;

class AvocatController extends Controller
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
        return view('admins.avocats.index', [
            'avocats' => Avocat::orderByDesc('id')->get()
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
        return view('admins.avocats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count(Avocat::where('numautorisation',$request->numautorisation)->get())!=0) return back()->with('succes','CNI existe déjà !!!!') ;
        $avocat = new Avocat();
        $avocat->userid = session()->get('admin_id');
        $avocat->nom = $request->nom;
        $avocat->prenom = $request->prenom;
        $avocat->adresse = $request->adresse;
        $avocat->telephone1 = $request->telephone1;
        $avocat->telephone2 = $request->telephone2;
        $avocat->telephone3 = $request->telephone3;
        $avocat->numautorisation = $request->numautorisation;
        $avocat->signature = $request->signature;
        $avocat->save();
        return redirect(route('admins.avocats.index'))->with('succes' , 'Abrakada !!!!');
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
        return view('admins.avocats.edit', [
            'avocat' => Avocat::find($id),
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
        $avocat = Avocat::find($id);
        $avocat->userid = session()->get('admin_id');
        $avocat->nom = $request->nom;
        $avocat->prenom = $request->prenom;
        $avocat->adresse = $request->adresse;
        $avocat->telephone1 = $request->telephone1;
        $avocat->telephone2 = $request->telephone2;
        $avocat->telephone3 = $request->telephone3;
        $avocat->numautorisation = $request->numautorisation;
        $avocat->signature = $request->signature;
        $avocat->save();
        return redirect(route('admins.avocats.index'))->with('succes' , 'Abrakada !!!!');
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
        Avocat::find($id)->delete();
        return back()->with('succes','Suppression !!!!') ;
    }
}
