<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promesse;
use App\Models\Avocat;
use App\Models\Appartement;
use App\Models\Client;

class PromesseController extends Controller
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
        return view('admins.promesses.index', [
            'promesses' => Promesse::orderByDesc('id')->get()
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
        return view(
            'admins.promesses.create',[
                'clients'=>Client::all(),
                'avocats'=>Avocat::all(),
                'appartements'=>Appartement::all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promesse = new Promesse();
        $promesse->userid = session()->get('admin_id');
        $promesse->appartementid = $request->appartementid;
        $promesse->clientid = $request->clientid;
        $promesse->avocatid = $request->avocatid;
        $promesse->prixht = $request->prixht;
        $promesse->tva = $request->tva;
        $promesse->prixttc = $request->prixttc;
        $promesse->avance = $request->avance;
        $promesse->etat = $request->etat;
        $promesse->save();
        return redirect(route('admins.promesses.index'))->with('succes' , 'Abrakada !!!!');
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
        return view('admins.promesses.edit', [
            'promesse' => Promesse::find($id),
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
        $promesse = Promesse::find($id);
        $promesse->userid = session()->get('admin_id');
        $promesse->appartementid = $request->appartementid;
        $promesse->clientid = $request->clientid;
        $promesse->avocatid = $request->avocatid;
        $promesse->prixht = $request->prixht;
        $promesse->tva = $request->tva;
        $promesse->prixttc = $request->prixttc;
        $promesse->avance = $request->avance;
        $promesse->etat = $request->etat;
        $promesse->save();
        return redirect(route('admins.promesses.index'))->with('succes' , 'Abrakada !!!!');
    
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
        Promesse::find($id)->delete();
        return back()->with('succes','Suppression !!!!') ;
    }
}
