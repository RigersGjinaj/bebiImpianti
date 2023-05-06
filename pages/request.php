<?php
    include_once "./connect.php";
    $conn = open();

    $email = checkName($_POST["email"]);
    $name = checkName($_POST["name"]);
    $address = checkName($_POST["address"]);
    $civilNumber = checkName($_POST["civilNumber"]);
    $comune = checkName($_POST["comune"]);
    $provincia = checkName($_POST["provincia"]);
    $regione = checkName($_POST["regione"]);
    $object = checkName($_POST["object"]);
    $request = checkName($_POST["request"]);
    $internal = checkName($_POST["internal"]);
    $date = date("Y-m-d");

    $query = "INSERT INTO assistenza(oggetto, richiesta, data) VALUES('$object', '$request', '$date')";
    $result = $conn->exec($query);

    $query = "INSERT INTO clienti(email, nomeLocale, via, numeroCivico, comune, provincia, regione, interno)  VALUES('$email', '$name', '$address', $civilNumber, '$comune', '$provincia', '$regione', '$internal')";
    $result = $conn->exec($query);

    $conn=null;
    header("Location: ../index.php");

    function checkName($name){
        $name = str_replace("'", "`", $name);
        return $name;
    }
?>
