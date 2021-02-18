<?php

namespace App\Imports;

use App\Models\personnel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PersonelImport implements ToModel
{


    protected $fillable = [
        'PersonnelCode' ,
        'Name'  ,
        'Family',
        'NatinalCode' ,
        'IdCode',
        'FatherName',
        'BornPlace',
        'Dateofbirth',
        'EdCertificate',
        'Address',
        'Email',
        'Phone',
        'Mobile',
        'JobTitle',
        'Unit',
        'Placeofwork' ,
        'ManagerId',
    
        ];
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new personnel([
            'PersonnelCode' => $row[0],
            'Name' => $row[1],
            'Family' => $row[2],
            'NatinalCode'=> $row[3],
            'IdCode'=> $row[4],
            'FatherName'=> $row[5],
            'BornPlace'=> $row[6],
            'Dateofbirth'=> $row[7],
            'EdCertificate'=> $row[8],
            'Address'=> $row[9],
            'Email'=> $row[10],
            'Phone'=> $row[11],
            'Mobile'=> $row[12],
            'JobTitle'=> $row[13],
            'Unit'=> $row[14],
            'Placeofwork'=>$row[15] ,
            'ManagerId'=> $row[16]
        ]);    
    }
}
