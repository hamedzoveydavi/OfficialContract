<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonnelSalary extends Model
{
    protected $fillable = [
        'PerCode',
        'Desc',
        'Price',
        'Priode'

        ];

    use HasFactory;
}
