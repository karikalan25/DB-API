<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\employe;
use App\Models\experience;

class dummyAPI extends Controller
{
    function getdata(){
        return employe::all();
    }
}
