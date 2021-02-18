<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
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
        $tbl=new Company;
        $tbl->CompanyNameFA  = $request->input('CompanyNameFA');
        $tbl->CompanyNameEN = $request->input('CompanyNameEN');
        $tbl->Companyurl = $request->input('Companyurl');
        $tbl->CompanyEmail = $request->input('CompanyEmail');
        $tbl->CompanyAddress = $request->input('CompanyAddress');
        $tbl->CompanyManager = $request->input('CompanyManager');
        $tbl->CompanyManagerPerCode = $request->input('CompanyManagerPerCode');
        

       
        /*if($files = $request->file('AttachFile')){
        $destinationPath = 'logo/'; // upload path
        $FlightDoc = 'logo'. "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $FlightDoc);
        $tbl->CompanyLogo = $FlightDoc;
       
        }*/

        if($tbl->save()){
            return back()->with('success','Company created successfully!');
        }else{
            return back()->with('error','Woops , Something is Worng');
        }
        
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
    $tbl = Company::first();
    return view('layouts.includes.Setting.Company',['info'=>$tbl]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
