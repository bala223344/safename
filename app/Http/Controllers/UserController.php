<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\DB;

use App\Address;
use App\SafeUser;


class UserController extends Controller
{




 
    public function getProfileByAlias($alias) {
        $user = SafeUser::where('public_profile_safename', $alias)->first();

        if($user) {
            
            $address = Address::where('cms_login_name', $user->cms_login_name)->get();
            $balances = array();
            $explorers = array();
            foreach ($address as $key => $val) {
               
                if($val->type_id == 2) {//btc 
                    $balance =  json_decode(file_get_contents(
                        "https://api.blockcypher.com/v1/btc/main/addrs/{$val->address}/balance"), true);
                    $balances[$val->address] = ($balance['balance'] / (10**8));
                    $explorers[$val->address] = "https://live.blockcypher.com/btc/address/{$val->address}";

                }elseif($val->type_id == 1) { //eth...
                    $balance =  json_decode(file_get_contents(
                        "https://api.etherscan.io/api?module=account&action=balance&address={$val->address}&tag=latest&apikey=I8IRYRHYI6DE71J3K9MSX3ANH7RQSCMC6F"), true);
                    $balances[$val->address] = ($balance['result'] / (10**18));
                    $explorers[$val->address] = "ethereum: {$val->address}";

                }
               
            }

            
            return view('profile.details')->with('user', $user)->with('address', $address)->with('balances', $balances)->with('explorers', $explorers);
        }else {
            return view('profile.notfound')->with('alias', $alias);
        }
     
           
         
           

    }

 

  




}
