<?php

namespace App\Http\Controllers;

use App\Models\contractPriodOfdat;
use Illuminate\Http\Request;
use App\Models\personnel;
use App\Models\PersonnelContract;
use DB;


class ContractPriodOfdatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $maxpriod = contractPriodOfdat::OrderBy('CounterOfPriod','desc')->first();

        $tbl = new contractPriodOfdat;
        $tbl->StartDateFa = $request->input('FromDate');
        $tbl->EndDateFa = $request->input('ToDate');
        $tbl->StartDateEn = date('Y-m-d') ;
        $tbl->EndDateEn = date('Y-m-d');
         if(!empty($maxpriod)){ 
             $tbl->CounterOfPriod = $maxpriod->CounterOfPriod + 1;
             //$this->CreatePersonnelContract();
        } else{
            $tbl->CounterOfPriod = '1';
        }
        $tbl->StatusPriod = '1';
        if($tbl->save()){
            return back()->with('success','Contract created successfully!');
        }else{
            return back()->with('error','Woops , Something is Worng');
        }
    }

    public function CreatePersonnelContract(){
        

        /*$tbl = DB::select(DB::raw("(SELECT `PersonnelCode`,`Name`,`Family`,`JobTitle`,`Unit`, `Placeofwork`,
        (select id FROM contract_priod_ofdats  ORDER BY id DESC LIMIT 1 ) as id,
        (select StartDateFa FROM contract_priod_ofdats  ORDER BY id DESC LIMIT 1) as StartDateFa,
        (select EndDateFa FROM contract_priod_ofdats  ORDER BY id DESC LIMIT 1) as EndDateFa
        from personnels)"));*/

        $tbl =DB::select('call CreatePersonelContract'); 
        return back()->with('success','Contract created successfully!');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contractPriodOfdat  $contractPriodOfdat
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
       /*$q = DB::select(DB::raw("(SELECT a.`id`,StartDateFa,EndDateFa ,COUNT(b.id) as CountContract,StatusPriod
        FROM `personnel_contracts` a , contract_priod_ofdats b WHERE 
        a.`ContractId` = b.`id`
        GROUP BY a.`id`)"));*/

        $q = contractPriodOfdat::all()->OrderBy('id','desc');
             
       return view('layouts.includes.Admin.Contract.contract-table',['tbl'=>$q]);
      }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contractPriodOfdat  $contractPriodOfdat
     * @return \Illuminate\Http\Response
     */
    public function edit(contractPriodOfdat $contractPriodOfdat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contractPriodOfdat  $contractPriodOfdat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contractPriodOfdat $contractPriodOfdat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contractPriodOfdat  $contractPriodOfdat
     * @return \Illuminate\Http\Response
     */
    public function destroy(contractPriodOfdat $contractPriodOfdat)
    {
        //
    }
}
