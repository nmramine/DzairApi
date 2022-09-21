<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include "model.php";

(isset($_GET['code']))?$data = getWilaya($_GET['code']):$data = getWilaya();

$data_json = json_encode($data);
http_response_code(200);
echo $data_json;
?>
