<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visite;
use App\Models\Client;
use App\Models\Appartement;

class VisiteController extends Controller
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
        return view('admins.visites.index', [
            'visites' => Visite::orderByDesc('id')->get()
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
        return view('admins.visites.create',[
            'clients'=>Client::all()],
            ['appartements'=>Appartement::all()
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
        $visite = new Visite();
        $visite->userid = session()->get('admin_id');
        $visite->clientid = $request->clientid;
        $visite->appartementid = $request->appartementid;
        $visite->remarque = $request->remarque;
        $visite->decision = $request->decision;
        $visite->save();
        return redirect(route('admins.visites.index'))->with('succes' , 'Visite créé avec succès');
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
        return view('admins.visites.edit', [
            'visite' => Visite::find($id),
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
        $visite = Visite::find($id);
        $visite->userid = session()->get('admin_id');
        $visite->clientid = $request->clientid;
        $visite->appartementid = $request->appartementid;
        $visite->remarque = $request->remarque;
        $visite->decision = $request->decision;
        $visite->save();
        return redirect(route('admins.visites.index'))->with('succes' , 'Visite créé avec succès');
    
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
        Visite::find($id)->delete();
        return back()->with('succes','Suppression !!!!') ;
    }
}
