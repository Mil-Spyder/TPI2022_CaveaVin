<?php

namespace App\Http\Controllers;

use App\Models\Bottle;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;

class BottleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bottles =Bottle::all();
        return view('bottles.index', $bottles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bottles.create');
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
        $result =  Bottle::create([
            'unit'=> 'required',
            'description' =>'required',
            'vintage' =>'required',
            'cuve_name' =>'required',
            'appelation' => 'required',
            'capacity' =>'required',
            'color'=>'required',
            'consumable_date'=> 'required',
            'peak_date'=>'required',
            'danger_date'=>'required',
            'peak_date'=>'required',
        ]);
        if ($result){

            return Redirect::to("")withSuccess("la bouteille ajouté avec succés !");

        }else{
            return Redirect::to("")->WithFail("la bouteille n'a pas pu être ajouté");
        }
        ;

        
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
        $bottles = Bottle::findOrFail($id);

        return view('bottles.show')->with('bottle', $bottles);
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
        $bottles = Bottle::findorFail($id);

        return view('bottles.edit')->with('bottle', $bottles);
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
        //
        $result =  Bottle::update([
            'unit'=> 'required',
            'description' =>'required',
            'vintage' =>'required',
            'cuve_name' =>'required',
            'appelation' => 'required',
            'capacity' =>'required',
            'color'=>'required',
            'consumable_date'=> 'required',
            'peak_date'=>'required',
            'danger_date'=>'required',
            'peak_date'=>'required',
        ]);
        if ($result){
            return Redirect::to("")withSuccess("la bouteille a été modifiée avec succés !");

        }else{
            return Redirect::to("")->WithFail("la bouteille n'a pas pu être modifiée");
        }
        ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $bottle = Bottle::findorFail($id);
        $bottle ->delete();

        // redirect
        Session::flash('message', 'la bouteille a bien été supprimée');
        return Redirect::to('bottles');
    }
}
