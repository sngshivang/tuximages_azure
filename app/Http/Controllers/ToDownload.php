<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ToDownload extends Controller
{
    public function interceptid($id)
    {
        $file = fopen(public_path("json/distrolist.json"), "r");
        $jsoncont =  fread(($file), \filesize(public_path('json/distrolist.json')));
        //$qry = "select * from distrolist where sr = $id";
        //$output = DB::select($qry)[0];
        $djson = \json_decode($jsoncont);
        $trip = false;
        for ($i = 0 ; $i <count($djson); $i++)
        {
            $ext = $djson[$i];
            if ($ext->{'sr'} == $id){
                $trip = true;
            break;
            }

        }
        if ($trip == true)
        return View('downloadpage')->with('coreinfo',\json_encode($ext));
        else 
        echo('No matching signature for OSID. Contact administrator.');
        //echo ('<script> tesla();</script>');

    }
    public function graballopt()
    {
        $file = fopen(public_path("json/distrolist.json"), "r");
        $jsoncont =  fread(($file), \filesize(public_path('json/distrolist.json')));
        //$qry = "select * from distrolist where sr = $id";
        //$output = DB::select($qry)[0];
        echo($jsoncont);
    }
}
