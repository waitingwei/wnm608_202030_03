<?php

include_once "../lib/php/functions.php";

$output = [];

$data = json_decode(file_get_contents("php://input"));

if(!isset($data->type)) {
	$output['error'] = "No Type";
} else switch($data->type) {
	case "all":
		$output['result'] =
			getRows(makeConn(),"SELECT * FROM `products`");
		break;
	case "fruit":
		$output['result'] =
			getRows(makeConn(),"SELECT * FROM `products` WHERE category='fruit'");
		break;

	default:
		$output['error'] = "Didn't Match Type";
}


echo (json_encode(
	$output,
	JSON_UNESCAPED_UNICODE|
	JSON_NUMERIC_CHECK
));