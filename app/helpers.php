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

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}