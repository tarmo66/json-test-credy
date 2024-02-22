<?php
require_once 'config.php';
require 'model.php';

$json = (json_decode(file_get_contents("php://input"), true));

$input = $json["data"][0];

insertData($input, $conn);