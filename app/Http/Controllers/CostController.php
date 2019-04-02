<?php

namespace App\Http\Controllers;

use App\Cost;
use App\Employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CostController extends Controller
{
    public function entry(){

        $costs= Cost::all();
        $employes = Employe::all();

        return view('entry',compact('costs','employes'));


    }

    public function save(Request $request){

        $costs = new Cost();
        $costs->totalcost  = $request->totalcost;
        $costs->date = $request->date;
        $costs->description = $request->description;
        $costs->save();

        //$costs->employe()->attach($request->employe);

        $tcost = DB::table('costs')
            ->join('employes', 'employe.id', '=', 'costs.employe.id')

            ->select('employe.*', 'costs.  ')
            ->get();

        return redirect()->route('index');


    }

    public function show(){
        $costs = Cost::all();
        return view('show',compact('costs'));


    }
}
