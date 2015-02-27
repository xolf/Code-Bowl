<?php

function secret($length)
{

    $characters = ’1234567890qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM’;

    $randstring = '';

    for ($i = 0; $i < $length; $i++) 
    {

    	$num = rand(3, strlen($characters) - 6);

    	$randstring = $randstring.$characters[$num];

    }

    return $randstring;
}
