<?php

namespace App\Http\Controllers;

use App\Models\personnel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\PersonelImport;
use  DB;
use Hash ;

class PersonnelController extends Controller
{


    public function ShowPercode(){

       
       //$percode = $_GET['percode'];
      //$tbl = personnel::where('PersonnelCode',$percode )->first();
      // return view('components.personnel.PersonnelListTable',['per'=>$percode,'PerList'=>$tbl]);
      // return view('layouts.includes.Admin.personnel.PersonnelList',['per'=>$_GET['percode'],'PerList'=>$tbl]);
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
        $tbl=new personnel;
        $tbl->PersonnelCode = $request->input('PersonnelCode');
        $tbl->Name  = $request->input('ٔName');
        $tbl->Family = $request->input('Family');
        $tbl->NatinalCode = $request->input('NatinalCode');
        $tbl->IdCode = $request->input('IdCode');
        $tbl->FatherName = $request->input('FatherName');
        $tbl->BornPlace = $request->input('BornPlace');
        $tbl->Dateofbirth = $request->input('Dateofbirth');
        $tbl->EdCertificate = $request->input('EdCertificate');
        $tbl->Address  = $request->input('Address');
        $tbl->Email = $request->input('Email');
        $tbl->Phone = $request->input('Phone');
        $tbl->Mobile = $request->input('Mobile');
        $tbl->JobTitle = $request->input('JobTitle');
        $tbl->Unit = $request->input('Unit');
        $tbl->Placeofwork = $request->input('Placeofwork');
        $tbl->ManagerId = $request->input('ManagerId');

        if($tbl->save()){
            return back()->with('success','Personnel created successfully!');
        }else{
            return back()->with('error','Woops , Something is Worng');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function show(personnel $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function edit(personnel $personnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, personnel $personnel)
    {
        $id = $_POST['id'];
        $tbl=personnel::where('id',$id)->first();

        $tbl->PersonnelCode = $request->input('PersonnelCode');
        $tbl->Name  = $request->input('ٔName');
        $tbl->Family = $request->input('Family');
        $tbl->NatinalCode = $request->input('NatinalCode');
        $tbl->IdCode = $request->input('IdCode');
        $tbl->FatherName = $request->input('FatherName');
        $tbl->BornPlace = $request->input('BornPlace');
        $tbl->Dateofbirth = $request->input('Dateofbirth');
        $tbl->EdCertificate = $request->input('EdCertificate');
        $tbl->Address  = $request->input('Address');
        $tbl->Email = $request->input('Email');
        $tbl->Phone = $request->input('Phone');
        $tbl->Mobile = $request->input('Mobile');
        $tbl->JobTitle = $request->input('JobTitle');
        $tbl->Unit = $request->input('Unit');
        $tbl->Placeofwork = $request->input('Placeofwork');
        $tbl->ManagerId = $request->input('ManagerId');

        if($tbl->update()){
            return back()->with('success','Personnel Update successfully!');
        }else{
            return back()->with('error','Woops , Something is Worng');
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\personnel  $personnel
     * @return \Illuminate\Http\Response
     */
    public function destroy(personnel $personnel)
    {
        $id = $_POST['id'];
        $tbl=personnel::where('id',$id)->first();

        if($tbl->delate()){
            return back()->with('success','Personnel deleted successfully!');
        }else{
            return back()->with('error','Woops , Something is Worng');
        }
    }



    public function PersonnelList()
    {
        $tbl = personnel::all();
       return view('layouts.includes.Admin.personnel.PersonnelList',['PerList'=>$tbl]);
    }

    public function fileImport(Request $request) 
    {
        
        if(!empty($_POST['CleareList'])){
           $tbl = DB::table('personnels')->delete();
           DB::statement('ALTER TABLE personnels AUTO_INCREMENT = 1;');        
           Excel::import(new PersonelImport, $request->file('file')->store('temp'));
           return back();
        }else{
            Excel::import(new PersonelImport, $request->file('file')->store('temp'));
            return back();
        }

        
    }

    public function CreateUser(){

        $tblper = personnel::all();
        $cu = 1 ;
        foreach($tblper as $list){
            $cu += 1 ;
            
            $tbl = new User;
            $tbl->PerCode = $list->PersonnelCode;
            $tbl->name = $list->Name ;
            $tbl->email = 'email@gmail.com'.$cu;
            $tbl->password = Hash::make($list->NatinalCode);
            $tbl->save();

            /*$percode = $list->PersonnelCode;
            $name = $list->Name ;
            $pass = Hash::make($list->NatinalCode);
            
            DB::insert('INSERT INTO `users`(`PerCode`, `name`, `email`, `email_verified_at`, `password`, 
             `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`,`updated_at`) 
             VALUES 
            ($percode, $name,email@gmail.com,NULL,$pass
             ,NULL,NULL,NULL,CURRENT_DATE(),CURRENT_DATE())'
            );*/

        }

        
            

//CONCAT_WS(' ', $tblper->Name, $tblper->Family)
        

       
    }

    public function fileExport() 
    {
        return Excel::download(new PersonelImport, 'users-collection.xlsx');
    }    

}
