<?php
session_start();

require 'config.php';
require 'idiorm.php';

ORM::configure('mysql:host='.DB_HOST.';dbname='.DB_NAME);
ORM::configure('username', USERNAME);
ORM::configure('password', PASSWORD);

// $conn = new mysqli("localhost", "root", "", "motolite"); // or your actual DB name

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = ORM::for_table("users")->create();
    $user->first_name= trim($_POST["first_name"]);
    $user->last_name= trim($_POST["last_name"]);
    $user->middle_name= trim($_POST["middle_name"]);
    $user->email_address= trim($_POST["email_address"]);
    $user->password= trim($_POST["password"]);
    $user->phone_number= trim($_POST["phone_number"]);
    $user->user_type= "u";
    $user->address1= trim($_POST["address1"]);
    $user->address2= trim($_POST["address2"]);
    $user->city= trim($_POST["city"]);
    $user->country= trim($_POST["country"]);
    $user->zipcode= trim($_POST["zip_code"]);
    $user->save();

    header("Location: login.php");
    die();
//    // $username = $_POST["name"];
//     $email = $_POST["email"];
//     $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

//     $user = ORM::for_table("users")->create();
//     $user->first_name
//     $user->last_name
//     $user->

    // $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    // $stmt->bind_param("sss", $username, $email, $password);
    // $stmt->execute();

    $_SESSION["login"]= true;
    $_SESSION["username"] = $username;

    header("Location: index.php");
    exit();
}