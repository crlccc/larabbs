<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-08-20
 * Time: 11:00
 */


function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}