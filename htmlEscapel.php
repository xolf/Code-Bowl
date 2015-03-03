<?php

function htmlEscape($var){

	if(is_array($var)){

		foreach ($var as $key => $value){

			$var[$key] = htmlspecialchars($value, ENT_QUOTES);

		}

	}else{

		$var = htmlspecialchars($var, ENT_QUOTES);

	}

	return $var;

}
