<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AjaxController extends Controller
{
    public function getisolist()
    {
        $users = DB::select('select * from distrolist');
        //$users = distrolist::select('*')->get(); 
        echo (json_encode($users));

    }
}
