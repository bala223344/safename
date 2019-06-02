<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Address extends Model 
{


    protected $table = 'sws_address';
    protected $primaryKey = 'cms_login_name'; 

    public $timestamps = false;

   

  

}
