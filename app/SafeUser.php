<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SafeUser extends Model 
{


    protected $table = 'sws_user';
    protected $primaryKey = 'cms_login_name'; 
    public $incrementing = false;
    public $timestamps = false;



}
