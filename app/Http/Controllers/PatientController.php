<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Patient;

class PatientController extends Controller
{

    public function index()
    {

        $result = Patient::orderBy('fullname', 'asc')->paginate(10000);

        return view('patient.list', array('results' => $result));
    }
}
