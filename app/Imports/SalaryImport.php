<?php

namespace App\Imports;

use App\Models\PersonnelSalary;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Hash;


class SalaryImport implements ToModel
{
    protected $fillable = [
        'PerCode',
        'Desc',
        'Price',
        'Priode'

        ];


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PersonnelSalary([
            'PerCode'=>$row[0],
            'Desc'=>$row[1],
            'Price'=>$row[2],
            'Priode'=>$row[3]   
            ]); 
    }
}
