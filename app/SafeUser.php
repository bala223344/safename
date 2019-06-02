<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SafeUser extends Model 
{


    protected $table = 'sws_user';
    protected $primaryKey = 'cms_login_name'; 

    public $timestamps = false;



    public static function fetchByAlias($alias) {
        $a = DB::select('SELECT * FROM sws_user   
        INNER JOIN sws_address on sws_address.cms_login_name = sws_user.cms_login_name 
        WHERE public_profile_safename = ?;', [$alias]);

        return $a ;
    }


}
