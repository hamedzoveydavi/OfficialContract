<?php

namespace App\Http\Controllers;

use App\Models\PersonnelSalary;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\SalaryImport;
use DB;

class PersonnelSalaryController extends Controller
{

    public function SalaryImport(Request $request){

        if(!empty($_POST['CleareList'])){
            $tbl = DB::table('personnel_salaries')->delete();
            DB::statement('ALTER TABLE personnel_salaries AUTO_INCREMENT = 1;');        
            Excel::import(new SalaryImport, $request->file('file')->store('temp'));
            return back();
        }else{
         
           Excel::import(new SalaryImport, $request->file('file')->store('temp'));
           return back();
        }
    }


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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PersonnelSalary  $personnelSalary
     * @return \Illuminate\Http\Response
     */
    public function show(PersonnelSalary $personnelSalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PersonnelSalary  $personnelSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonnelSalary $personnelSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PersonnelSalary  $personnelSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonnelSalary $personnelSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PersonnelSalary  $personnelSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonnelSalary $personnelSalary)
    {
        //
    }
}
