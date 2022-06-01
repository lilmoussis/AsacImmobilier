<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appartement;
use App\Models\Immeuble;

class AppartementController extends Controller
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
        return view('admins.appartements.index', [
            'appartements' => Appartement::orderByDesc('id')->get()
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
        return view('admins.appartements.create', [
            'immeubles'=>Immeuble::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count(Appartement::where('numappart',$request->numappart)->get())!=0) return back()->with('succes','CNI existe déjà !!!!') ;
        $appartement = new Appartement();
        $appartement->userid = session()->get('admin_id');
        $appartement->immeubleid = $request->immeubleid;
        $appartement->numetage = $request->numetage;
        $appartement->numappart = $request->numappart;
        $appartement->superficie = $request->superficie;
        $appartement->nbrechambre = $request->nbrechambre;
        $appartement->prix = $request->prix;
        $appartement->etat = $request->etat;
        $appartement->save();
        return redirect(route('admins.appartements.index'))->with('succes' , 'Abrakada !!!!');
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
        return view('admins.appartements.edit', [
            'appartement' => Appartement::find($id),
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
        $appartement = Appartement::find($id);
        $appartement->userid = session()->get('admin_id');
        $appartement->immeubleid = $request->immeubleid;
        $appartement->numetage = $request->numetage;
        $appartement->numappart = $request->numappart;
        $appartement->superficie = $request->superficie;
        $appartement->nbrechambre = $request->nbrechambre;
        $appartement->prix = $request->prix;
        $appartement->etat = $request->etat;
        $appartement->save();
        return redirect(route('admins.appartements.index'))->with('succes' , 'Abrakada !!!!');
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
        Appartement::find($id)->delete();
        return back()->with('succes','Suppression !!!!') ;
    }
}
