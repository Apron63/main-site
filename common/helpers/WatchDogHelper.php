<?php
namespace common\helpers;
/**
 * Created by PhpStorm.
 * User: Zver
 * Date: 13.06.2017
 * Time: 23:29
 */
class WatchDogHelper
{
    public static function watch()
    {
        if(isset($_SESSION['watched']))
        {
            $_SESSION['watched'] = 'true';
            var_dump($_SESSION);
        }
    }
}