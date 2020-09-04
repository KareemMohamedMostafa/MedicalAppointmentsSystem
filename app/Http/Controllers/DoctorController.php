<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DoctorController extends Controller
{
    public function index()
    {
        $data = Doctor::paginate(5);

        return view('dashboard', array(
            'data' => $data
        ));
    }
}
