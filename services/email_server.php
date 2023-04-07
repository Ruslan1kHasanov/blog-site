<?php

$user = '';
$email = '';


$user = $_POST["name"];
$email = $_POST["email"];

$data = array(
    "name" => $user,
    "email" => $email
);

echo json_encode($data, JSON_UNESCAPED_UNICODE);

exit();

header('Content-Type: application/json; charset=utf-8');

$obj = json_decode(file_get_contents('php://input'), JSON_UNESCAPED_UNICODE);

echo json_encode($obj, JSON_UNESCAPED_UNICODE);

exit();