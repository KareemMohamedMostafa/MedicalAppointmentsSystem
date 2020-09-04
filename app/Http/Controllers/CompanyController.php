<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CompanyController extends Controller
{
    protected $table = 'companys';

    public function  rooms()
    {

        return $this->hasMany('App\Room')->orderby('id', 'desc');
    }

    public function specialtys()
    {

        return $this->hasMany('App\Specialty')->orderby('id', 'desc');
    }
}
