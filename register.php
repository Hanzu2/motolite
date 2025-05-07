<?php
session_start();
$conn = new mysqli("localhost", "root", "", "motolite"); // or your actual DB name

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);
    $stmt->execute();

    $_SESSION["logged_in"] = true;
    $_SESSION["username"] = $username;

    header("Location: index.php");
    exit();
}