<?php

namespace App\Http\Livewire;

use Livewire\Component;
use DB;

class ContractTable extends Component
{
    public function render()
    {
               return view('layouts.includes.Admin.Contract.contract-table');
    }
}
