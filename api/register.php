<?php

header("Access-Control-Allow-Origin: localhost:8085/php-auth/api/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include_once 'config/database.php';
include_once 'model/user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
$data = json_decode(file_get_contents("php://input"));

$user->firstname = $data->firstname;
$user->lastname = $data->lastname;
$user->email = $data->email;
$user->password = $data->password;

// create the user
if ( !empty($user->firstname) &&
    !empty($user->email) &&
    !empty($user->password) &&
    $user->create()) {
 
    http_response_code(200);
 
    echo json_encode(array("message" => "User created successfully."));
}
else {
    http_response_code(400);
    echo json_encode(array("message" => "Unable to create user."));
}
