<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Desistement;
use App\Models\Promesse;

class DesistementController extends Controller
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
        return view('admins.desistements.index', [
            'desistements' => Desistement::orderByDesc('id')->get()
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
        return view('admins.desistements.create', [
            'promesses'=>Promesse::all()
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
        if (count(Desistement::where('numero',$request->numero)->get())!=0) return back()->with('succes','CNI existe déjà !!!!') ;
        $desistement = new Desistement();
        $desistement->userid = session()->get('admin_id');
        $desistement->promesseid = $request->promesseid;
        $desistement->numero = $request->numero;
        $desistement->cause = $request->cause;
        $desistement->save();
        return redirect(route('admins.desistements.index'))->with('succes' , 'Abrakada !!!!');
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
        return view('admins.desistements.edit', [
            'desistement' => Desistement::find($id),
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
        $desistement = Desistement::find($id);
        $desistement->userid = session()->get('admin_id');
        $desistement->promesseid = $request->promesseid;
        $desistement->numero = $request->numero;
        $desistement->cause = $request->cause;
        $desistement->save();
        return redirect(route('admins.desistements.index'))->with('succes' , 'Abrakada !!!!');
    
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
        Desistement::find($id)->delete();
        return back()->with('succes','Suppression !!!!') ;
    }
}
