<?php

function myMail($to, $subject, $message, $from)
{

	$header  = 'MIME-Version: 1.0' . "\r\n";

	$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$header .= 'From: ' . $from . "\r\n";

	mail($to, $subject, $message, $header);

}
