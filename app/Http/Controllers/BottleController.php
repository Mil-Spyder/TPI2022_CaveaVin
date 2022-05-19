<?php

namespace App\Http\Controllers;

use App\Models\Bottle;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;
use Symfony\Component\HttpFoundation\Session\Session;

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
        return view('bottles.index', compact('bottles'));
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
        
         $result=Bottle::create([
            'appelation'=> $request->appelation,
            'cuvee_name'=> $request->cuvee_name,
            'region'=> $request->region,
            'vintage'=> $request->vintage,
            'unit'=> $request->unit,
            'capacity'=> $request->capacity,
            'color'=> $request->color,
            'consumable_date'=> $request->consumable,
            'peak_date'=> $request->peak,
            'danger_date'=> $request->danger,
            'description'=> $request->description,
            'winemaker_id' =>$request->winemaker,
            'culture_id'=> $request->cultures,
            'grape_variety_id'=> $request->grape_variety,
            

        ]);
        
        if ($result) {
            return Redirect::to("/")->withSuccess("L'enseignant a été créé avec succès");
        } else {
            return Redirect::to("/")->withFail("L'enseignant n'a pas pu être créé");
        }

        
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
        $bottle = Bottle::findorFail($id);

        $result=$bottle->update([
            'id'=> $bottle->id,
            'appelation'=> $request->appelation,
            'cuvee_name'=> $request->cuvee_name,
            'region'=> $request->region,
            'vintage'=> $request->vintage,
            'unit'=> $request->unit,
            'capacity'=> $request->capacity,
            'color'=> $request->color,
            'consumable_date'=> $request->consumable,
            'peak_date'=> $request->peak,
            'danger_date'=> $request->danger,
            'description'=> $request->description,
            'winemaker_id' =>$request->winemaker,
            'culture_id'=> $request->cultures,
            'grape_variety_id'=> $request->grape_variety,
            

        ]);
        
        if ($result) {
            return Redirect::to("/")->withSuccess("L'enseignant a été créé avec succès");
        } else {
            return Redirect::to("/")->withFail("L'enseignant n'a pas pu être créé");
        }

    
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
        $result=$bottle ->delete();

        // redirect
        if ($result) {
            return Redirect::to("/")->withSuccess("L'enseignant a été créé avec succès");
        } else {
            return Redirect::to("/")->withFail("L'enseignant n'a pas pu être créé");
        }
    }
}
