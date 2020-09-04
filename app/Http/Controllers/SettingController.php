<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Room;

class SettingController extends Controller
{
    public function index(string $data)
    {
        return view('settings.rooms', array('data' => $data));
    }
}
