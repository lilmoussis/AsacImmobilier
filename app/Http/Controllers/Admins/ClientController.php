<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
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
        return view('admins.clients.index', [
            'clients' => Client::orderByDesc('id')->get()
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
        return view('admins.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (count(Client::where('cni',$request->cni)->get())!=0) return back()->with('succes','CNI existe déjà !!!!') ;
        $client = new Client();
        $client->userid = session()->get('admin_id');
        $client->cni = $request->cni;
        $client->nom = $request->nom;
        $client->prenom1 = $request->prenom1;
        $client->prenom2 = $request->prenom2;
        $client->adresse = $request->adresse;
        $client->telephone = $request->telephone;
        $client->profession = $request->profession;
        $client->signature = $request->signature;
        $client->save();
        return redirect(route('admins.clients.index'))->with('succes' , 'Client créé avec succès');
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
        return view('admins.clients.edit', [
            'client' => Client::find($id),
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
        $client = Client::find($id);
        $client->userid = session()->get('admin_id');
        $client->cni = $request->cni;
        $client->nom = $request->nom;
        $client->prenom1 = $request->prenom1;
        $client->prenom2 = $request->prenom2;
        $client->adresse = $request->adresse;
        $client->telephone = $request->telephone;
        $client->profession = $request->profession;
        $client->signature = $request->signature;
        $client->save();
        return redirect(route('admins.clients.index'))->with('succes' , 'Client modifié avec succès');
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
        Client::find($id)->delete();
        return back()->with('succes','Suppression !!!!') ;
    }
}
