<?php defined('BASEPATH') OR exit('No direct script access allowed');

function input($value)
{
    $data = addslashes(stripslashes(trim($value)));
    return $data;
}