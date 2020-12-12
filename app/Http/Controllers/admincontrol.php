<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

global $insermod;
$insermod = false;

class admincontrol extends Controller
{
    public function tesla()
    {
        echo('Windows');
    }
    public function adminservices($id, Request $req)
    {
        if ($id == 1 || $id == 3){
        $usr = $req->name;
        $inppwd = $req->ps;
        $qry = "select * from admin where usrnme = '$usr'";
        $users = DB::select($qry);
        if ($users!=null){
        $hashpwd = hash('sha512',$inppwd);
        $pwd = $users[0]->{'pwd'};
        if (\strtolower($hashpwd)=== \strtolower($pwd))
        {
            $req->session()->put('user',$usr);
            echo('true');
            if($id == 3)
            return('true');
        }
        else 
        echo('false');
        }
        else 
        echo('false');
        //echo (json_encode($users[0]));
        //echo($pwd.'\n'.$hashpwd);
    }
    else if ($id == 2)
    {
        $osid = $req->osidn;
        $file = fopen(public_path("json/distrolist.json"), "r");
        $len = -1;
        try{
        $jsoncont =  fread(($file), \filesize(public_path('json/distrolist.json')));
        $djson = \json_decode($jsoncont);
        $len = count($djson);
        $trip = false;
        for ($i = 0;$i < $len; $i++)
        {
            $ext = $djson[$i];
            if ($ext->{'sr'} == $osid)
            {
                $trip = true;
                echo(\json_encode($ext));
            break;
            }
        }
        }
        catch(\Exception $e)
        {
            \error_log($e);

        }
        if ($trip === false)
        echo("NOOSID");
    }
}
    public function registerlinks($id, Request $req)
    {
        global $insermod;
        $ses = $req->session()->get('user');
        if ($ses!=null){
        if ($id == 1){
        if ($insermod === false  && $req->{'tripvar'} == 'true'){
           $insermod = true;
        $this->registerlinks(2, $req);
        }
        $file = fopen(public_path("json/distrolist.json"), "r");
        $len = -1;
        try{
        $jsoncont =  fread(($file), \filesize(public_path('json/distrolist.json')));
        $djson = \json_decode($jsoncont);
        $len = count($djson);
        }
        catch(\Exception $e)
        {
            \error_log($e);

        }
        \fclose($file);
        if ($ses!=null && $this->backupdatabase()=== true){
            $qry = "select * from admin";
            $out = DB::select($qry);
            if ($insermod == true)
            $cq = $req->{'osid'};
            else{
            $cq = $out[0]->{'currq'};
            $cq++;
            $qry = "update admin set currq = $cq where usrnme = 'sng_shivang'";
            DB::insert($qry);
            }
            $objsec = new \stdClass();
            $objsec->sr = $cq;
            $objsec->distnm = $req->{'osfname'};
            $objsec->allurloptions = json_decode($req->{'oslnk'});
            $objsec->distfam = $req->{'osfam'};
            $objsec->lastupd = null;
            $djson [] = $objsec;
            $qry = "insert into distrolist (distnm, distfam, osid) values (?,?,?)";
            DB::insert($qry, [$req->{'osfname'}, $req->{'osfam'}, $cq]);
            $file = fopen(public_path("json/distrolist.json"), "w");
            \fwrite($file, \json_encode($djson));
            \fclose($file);
            //echo (\json_encode($djson));
            echo ('Process is successful');
        }
    }
    else if ($id == 2)
    {
        $trip = false;
        $file = fopen(public_path("json/distrolist.json"), "r");
        $len = -1;
        try{
        $jsoncont =  fread(($file), \filesize(public_path('json/distrolist.json')));
        $djson = \json_decode($jsoncont);
        $len = count($djson);
        $todel = $req->{'osid'};
        for ($i = 0 ; $i < $len; $i++)
        {
            $ext = $djson[$i];
            if ($ext->{'sr'} == $todel){
                unset($djson[$i]);
                $djson = \array_values($djson);
                $trip = true;
            break;
            }

        }
        \fclose($file);
        if ($trip == true && $this->backupdatabase()=== true){
            $file = fopen(public_path("json/distrolist.json"), "w");
            \fwrite($file, \json_encode($djson));
            \fclose($file);
            DB::delete('delete from distrolist where osid = ?',[$req->{'osid'}]);
            echo("Process completed successfully!");
        }
        else 
        echo("Invalid OSID. Value not found error.");
    }
        catch(\Exception $e)
        {
            \error_log($e);

        }
    }
}
else 
echo('Authorisation Unavailable. Please complete login.');
    }
    public static function global_values($inp)
    {
        $insormod = false;
        if ($inp!=null)
        $insormod = $inp;
        return ($insormod);
    }
    public function backupdatabase()
    {
        $path = 'json/backup/distrolist_'.time().'.json';
        $res = copy(public_path("json/distrolist.json"), public_path($path));
        if ($res === false)
        {
            \error_log("Backup file creation failure!");
        }
        return $res;
    }
    public function upd_json(Request $req)
    {
        if ($this->adminservices(3, $req) === 'true'){
            $this->backupdatabase();
            $file = $req->file('json');
            $destinationPath = \public_path('json');
            $file->move($destinationPath,$file->getClientOriginalName());
            echo('Operation Successful');
        }
        else 
        echo('Authentication Failure. Contact admin');

    }
}

