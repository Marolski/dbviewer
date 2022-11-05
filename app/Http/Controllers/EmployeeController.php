<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EmployeeModel;

class EmployeeController extends Controller
{
    public function getAllEmployee() {
        $employees =DB::table('employee')->get();
        return view('employees', compact('employees'));
    }
    public function addEmployee(Request $req) {
        $Employee = new EmployeeModel();
        $Employee->Imie=$req->name;
        $Employee->Nazwisko=$req->surname;
        $Employee->Pesel=$req->userId;
        $Employee->Adres=$req->adrees;
        $Employee->Telefon=$req->phone;
        $Employee->Stanowisko=$req->role;
        $Employee->save();
    }
}
