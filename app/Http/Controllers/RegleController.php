<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Regle;
use App\User;
use PDF;

class RegleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idJdr = null,Request $request)
    {
        $regle1 =null;
        if($idJdr!=null || $idJdr =$request->input('idJdr'))
        {
            $regle1=Regle::find($idJdr);
        }
        $regles = Regle::orderBy('name')->get();
        $users=User::all();
        return view('regle',['regles'=>$regles,'users'=>$users,'regle1'=>$regle1]);
    }

    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $regle = new Regle;
        $regle->name=$request->name;
        $regle->typeJdr=$request->typeJdr;
        $regle->regleUrl=$request->regleUrl;
        $regle->WolrdMapUrl=$request->WolrdMapUrl;
        $regle->historyUrl=$request->historyUrl;
        $regle->creator=$request->creator;
        $regle->idAsso=$request->idAsso;
        $regle->save();
        return Regle::find($regle->id);

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
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $regle = new Regle;
        $regle->name=$request->name;
        $regle->typeJdr=$request->typeJdr;
        $regle->regleUrl=$request->regleUrl;
        $regle->WolrdMapUrl=$request->WolrdMapUrl;
        $regle->historyUrl=$request->historyUrl;
        $regle->creator=$request->creator;
        $regle->idAsso=$request->idAsso;
        $regle->save();
        return Regle::find($regle->id);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $regle = Regle::findOrFail($request->id);
        $regle->delete();
        return $request->id;
    }
}
