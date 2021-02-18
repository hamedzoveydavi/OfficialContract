<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\PersonnelSalaryController;
use App\Http\Controllers\ContractPriodOfdatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::user();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile', function () {
    return view('profile.show');
})->name('profile');

Route::get('/Params', function () {
    return view('layouts.includes.Params.params');
})->name('Params');

Route::get('/Contract', function () {
    return view('layouts.includes.Admin.Contract.ContractCreate');
})->name('Contract');


//Route::get('Contract',[ContractPriodOfdatController::class ,'show'])->name('Contract');


Route::get('Company',[CompanyController::class ,'show'])->name('Company');

Route::POST('CompanyInfo',[CompanyController::class ,'store'])->name('CompanyInfo');

Route::get('/personnel', function () {
    return view('layouts.includes.Admin.personnel.personnel');
})->name('personnel');

Route::POST('personnelStore',[PersonnelController::class ,'store'])->name('personnelStore');

Route::get('PersonnelList', [PersonnelController::class, 'PersonnelList'])->name('PersonnelList');
Route::post('file-import', [PersonnelController::class, 'fileImport'])->name('file-import');

Route::post('Salary-import', [PersonnelSalaryController::class, 'SalaryImport'])->name('Salary-import');

Route::get('PersonelSalary', [PersonnelController::class, 'ShowPercode'])->name('PersonelSalary');

/*Route::get('/Percodepass', function () {
    return view('components.personnel.EmploymentHokmList',['per'=>$_GET['PerCode']]);
})->name('Percodepass');*/

Route::post('ContractOfPriod', [ContractPriodOfdatController::class, 'store'])->name('ContractOfPriod');

Route::get('CreatePersonelContract', [ContractPriodOfdatController::class, 'CreatePersonnelContract'])->name('CreatePersonelContract');

Route::get('CreateUser', [PersonnelController::class, 'CreateUser'])->name('CreateUser');
