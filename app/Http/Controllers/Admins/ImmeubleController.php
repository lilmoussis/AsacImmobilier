<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Immeuble;

class ImmeubleController extends Controller
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
        return view('admins.immeubles.index', [
            'immeubles' => Immeuble::orderByDesc('id')->get()
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
        return view('admins.immeubles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count(Immeuble::where('nom',$request->nom)->get())!=0) return back()->with('succes','CNI existe déjà !!!!') ;
        $immeuble = new Immeuble();
        $immeuble->userid = session()->get('admin_id');
        $immeuble->nom = $request->nom;
        $immeuble->adresse = $request->adresse;
        $immeuble->save();
        return redirect(route('admins.immeubles.index'))->with('succes' , 'avocat créé avec succès');
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
        return view('admins.immeubles.edit', [
            'immeuble' => Immeuble::find($id),
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
        $immeuble = Immeuble::find($id);
        $immeuble->userid = session()->get('admin_id');
        $immeuble->nom = $request->nom;
        $immeuble->adresse = $request->adresse;
        $immeuble->save();
        return redirect(route('admins.immeubles.index'))->with('succes' , 'avocat créé avec succès');
    
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
        Immeuble::find($id)->delete();
        return back()->with('succes','Suppression !!!!') ;
    }
}
