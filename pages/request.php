<?php
    include_once "./pages/connect.php";
    $conn = open();

    $email = $_POST["email"];
    $object = $_POST["object"];
    $request = $_POST["request"];

    $query = "INSERT INTO ";

    $conn->close();
    Location("header:../index.php");
?>
