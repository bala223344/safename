<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SafeUser extends Model 
{


    protected $table = 'sws_user';
    protected $primaryKey = 'cms_login_name'; 

    public $timestamps = false;

    public function addresses() {
        return $this->hasMany('App\Address');
    }




}
