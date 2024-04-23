<?php 
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET");
include('inc/array.php'); 
echo '{"wofchars":' . json_encode($array) . '}';

?>