<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnel extends Model
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


    use HasFactory;
}
