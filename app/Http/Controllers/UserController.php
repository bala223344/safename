<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\DB;

use App\Address;
use App\SafeUser;


class UserController extends Controller
{




 
    public function getProfileByAlias($alias) {
     ///   $user = SafeUser::fetchByAlias($alias);
        $user = SafeUser::where('public_profile_safename', $alias)->first();

        if($user) {
            
            $address = Address::where('cms_login_name', $user->cms_login_name)->get();
            $balances = array();
            foreach ($address as $key => $val) {
                
               
                if($val->type_id == 2) {//btc 
                    $balance =  json_decode(file_get_contents(
                        "https://api.blockcypher.com/v1/btc/main/addrs/{$val->address}/balance"), true);
                        $balances[$val->address] = ($balance['balance'] / (10**8));
                }elseif($val->type_id == 1) { //eth...
                    $balance =  json_decode(file_get_contents(
                        "https://api.blockcypher.com/v1/eth/main/addrs/{$val->address}/balance"), true);
                        $balances[$val->address] = ($balance['balance'] / (10**18));
                        

                }
               
            }
            
            return view('profile.details')->with('user', $user)->with('address', $address)->with('balances', $balances);
        }else {
            return view('profile.notfound')->with('alias', $alias);
        }
     
           
         
           

    }

 

  




}
