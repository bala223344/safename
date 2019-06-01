<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\DB;

use App\Address;
use App\SafeUser;

class SafeNameController extends Controller
{
    public function details($addr) {

        

        $a = DB::select('SELECT * FROM sws_address  
                            INNER JOIN sws_user on sws_address.cms_login_name = sws_user.cms_login_name 
                            WHERE address = ?;', [$addr]);


        $valid_record = null;

      
        if($a && $a[0])  {


            //just take the first record for now..if there isn't any eligible recs this will stay
            $valid_record = $a[0];
   
            foreach($a as $key => $val) {
                
                if($val->public_profile_set != 'yes' || $val->public_profile_enabled != 'yes' || $val->address_safename_enabled == 'no') {
                    $val->public_profile_safename = null; 
                    $val->address_safename = null; 
                }
                // this is the preffered address..no more looping
                if($val->address_status == "secure") {
                    $valid_record = $val;
                    break;
                }

                //will be overwritten if one more comes as 'secure'..otherwise this is good to show
                if($val->address_status == "verified") {
                    $valid_record = $val;
                }
            }
          
        }

       
        return response()->json($valid_record);
    }
    public function alias($alias) {

       $a = DB::select('SELECT * FROM sws_user   
                           INNER JOIN sws_address on sws_address.cms_login_name = sws_user.cms_login_name 
                           WHERE public_profile_safename = ?;', [$alias]);

        //   return response()->json([
        //     'name' => 'Abigail',
        //     'state' => 'CA'
        //   ])
        //                 ->withHeaders([
        //                     'Content-Type'=> 'application/json',
        //                     'X-Content-Type-Options' => 'nosniff',
                            
        //                 ]);





        // $recs = array();
        // $valid_record = null;
        //     //just take the first record for now..if there isn't any eligible recs this will stay
        //     $valid_record = $a[0];
   
        //     foreach($a as $key => $val) {
                
        //         if($val->public_profile_set != 'yes' || $val->public_profile_enabled != 'yes' || $val->address_safename_enabled == 'no') {
        //             $val->public_profile_safename = null; 
        //             $val->address_safename = null; 
        //         }
                
        //         $recs [] = $val;
                
        //     }
          

        return response()->json($a);
    }

    public function fetchAndInsertScam(){
     //   return response()->json(array('addr'=> '$res'));
        $results =  json_decode(file_get_contents(
            'https://etherscamdb.info/api/scams/'), true);
           
        $recs_inserted = 0;    
          //  print_r($results)
       if($results['result']) {
           
        foreach($results['result'] as $val) {


           $user_id = null; 
           if(isset($val['addresses']))
           foreach($val['addresses'] as $addr) {


            $res = \App\Address::where('address', $addr)->first(); 
            //found..do nothing
            if($res) {
                 //$user_id = $res->user_id;
            }else {

                //user id not assigned yet
                if(!$user_id) {
                    //scam names sometimes are url and goes beyond 100
                    $name = substr($val['name'],0,98);

                     //check if user exists
                    $res = \App\SafeUser::where('alias', $name)->first(); 
                
                    if($res) {
                        $user_id = $res->id;
                    }else {
                        //doesn't exists 
                        $user = new \App\SafeUser;
                        $user->alias = $name;
                        $user->save();
                        $user_id = $user->id;

                    }

                }



                $addrObj = new \App\Address;
                $addrObj->user_id = $user_id;
                $addrObj->address = $addr;
                $addrObj->status = 0;
                if( strlen($addr) == 42 && substr( $addr, 0, 2 ) === "0x") {
                    $type = 1;
                }
                else {
                    $type = 2;
                }
                $addrObj->type_id = $type;
                $recs_inserted++;
                $addrObj->save();

           }

                
            }
           
        }

       }

       return response()->json(array('done'=> $recs_inserted. ' adresses inserted.'));
       exit;
    }
}
