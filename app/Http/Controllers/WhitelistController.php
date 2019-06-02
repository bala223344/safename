<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\DB;

use App\Whitelist;



class WhitelistController extends Controller
{





    public function create(){


        
        $wl = new Whitelist;

        $wl->type_id = Request::input('type_id');
        $wl->address = Request::input('address');
        $wl->requested = Request::input('requested');
        $wl->email = Request::input('email');
        $wl->discord = Request::input('discord');
        $wl->signup_from_url = Request::input('signup_from_url');

        $wl->save();
      

     

      return redirect("success");
     //return response()->json(array("fine" => "ttt"));

    }
    public function index() {
        return view('whitelist.index');
    }
    public function success() {
        return view('whitelist.success');
    }


 

  




}
