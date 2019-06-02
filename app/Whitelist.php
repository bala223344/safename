<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Whitelist extends Model 
{


    protected $table = 'sws_whitelist';
    protected $primaryKey = 'whitelist_id'; 

    public $timestamps = false;
   

  

}
