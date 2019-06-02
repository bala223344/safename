<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

class Helper
{
  public static function avatar($avatar)
    {
      //  echo file_exists(public_path('/uploads/avatars/'.$avatar));exit;
        if($avatar) {
            if (file_exists(public_path('/uploads/avatars/'.$avatar))) {
                return '/uploads/avatars/'.($avatar);
            }else {
                return '/uploads/avatars/no-avatar.svg';
            }
        }
        return '/uploads/avatars/no-avatar.svg';

    }



}
