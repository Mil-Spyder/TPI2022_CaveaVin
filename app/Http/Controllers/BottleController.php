<?php

namespace App\Http\Controllers;

use App\Models\Bottle;
use App\Models\Comment;
use App\Models\GrapeVariety;
use App\Notifications\DateAlertNotification;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Contracts\Service\Attribute\Required;
use Symfony\Component\HttpFoundation\Session\Session;
use Barryvdh\DomPDF\PDF;

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
        $comments =Comment::all();
        $bottles = Bottle::all();
        return view('bottles.index', compact('bottles','comments'));
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
        //TO-DO Validation

        $request->validate([
            'appelation' => 'required',
            'cuvee_name'  => 'required',
            'region'  => 'required',
            'vintage' => 'required|integer|min:1940|max:2100',
            'capacity' => 'required|integer|min:0|max:100',
            'unit' => 'required|integer|min:0|max:999',
            'color' => 'required',
            'description' => 'required',

        ]);

        $result = Bottle::create([
            'appelation' => $request->appelation,
            'cuvee_name' => $request->cuvee_name,
            'region' => $request->region,
            'vintage' => $request->vintage,
            'unit' => $request->unit,
            'capacity' => $request->capacity,
            'color' => $request->color,
            'consumable_date' => $request->consumable,
            'peak_date' => $request->peak,
            'danger_date' => $request->danger,
            'description' => $request->description,
            'winemaker_id' => $request->winemaker,
            'culture_id' => $request->cultures,
            'grape_variety_id' => $request->grape_variety,


        ]);

        $dates = [
            'peak_date' =>$request->peak,
            'consumable_date' =>$request->consumable,
            'danger_date' =>$request->danger
        ];

        

        if ($result) {
            return Redirect::to("/")->withSuccess("la bouteille a ??t?? cr??e avec succ??s");
        } else {
            return Redirect::to("/")->withFail("la bouteille n'a pas ??t?? cr??e");
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
        $grape_varieties = GrapeVariety::all();
        return view('bottles.show')->with('bottle', $bottles)->with('grape_variety',$grape_varieties);
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
        
        $request->validate([
            'appelation' => 'required',
            'cuvee_name'  => 'required',
            'region'  => 'required',
            'vintage' => 'required|integer|min:1940|max:2100',
            'capacity' => 'required|integer|min:0|max:100',
            'unit' => 'required|integer|min:0|max:575',
            'color' => 'required',
            'description' => 'required',

        ]);
        
        $bottle = Bottle::findorFail($id);
        $result = $bottle->update([
            'id' => $bottle->id,
            'appelation' => $request->appelation,
            'cuvee_name' => $request->cuvee_name,
            'region' => $request->region,
            'vintage' => $request->vintage,
            'unit' => $request->unit,
            'capacity' => $request->capacity,
            'color' => $request->color,
            'consumable_date' => $request->consumable,
            'peak_date' => $request->peak,
            'danger_date' => $request->danger,
            'description' => $request->description,
            'winemaker_id' => $request->winemaker,
            'culture_id' => $request->cultures,
            'grape_variety_id' => $request->grape_variety,


        ]);

        if ($result) {

            $message=session()->flash('success',"la bouteille a ??t?? modifi??e avec succ??s");

            return Redirect::to("/")->with('message');
        } else {
            return Redirect::to("/")->with('fail',"la bouteille n'a pas ??t?? modifi??e");
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
        $result = $bottle->delete();

        // redirect
        if ($result) {
            return Redirect::to("/")->withSuccess("la bouteille a ??t?? supprim??e");
        } else {
            return Redirect::to("/")->withFail("la bouteille n'a pas ??t?? supprimer");
        }
    }

    public function createPDF() {
        // retreive all records from db
        $bottles = Bottle::all();
        // share data to view
        view()->share('bottles',$bottles);

        $pdf = PDF::loadView('pdf_view',$this[$bottles] );

        // download PDF file with download method
        return $pdf->download('d??tails.pdf');
      }

    public function Alert()
    {
        
    }
}
