<?php
    include_once "./connect.php";
    $conn = open();

    $email = $_POST["email"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $civilNumber = $_POST["civilNumber"];
    $comune = $_POST["comune"];
    $provincia = $_POST["provincia"];
    $regione = $_POST["regione"];
    $object = $_POST["object"];
    $request = $_POST["request"];
    $internal = $_POST["internal"];
    $date = date("Y-m-d");

    $query = "INSERT INTO assistenza(oggetto, richiesta, data, appuntamento) VALUES('$object', '$request', '$date', 1)";
    var_dump($query);
    $result = $conn->exec($query);


    $query = "INSERT INTO clienti(email, nomeLocale, via, numeroCivico, comune, provincia, regione, interno)  VALUES('$email', '$name', '$address', $civilNumber, '$comune', '$provincia', '$regione', '$internal')";
    $result = $conn->exec($query);

    $query = "SELECT MAX(id) AS id FROM assistenza";
    $result_assistenza = $conn->query($query);
    $query = "SELECT MAX(id) AS id FROM clienti";
    $result_cliente = $conn->query($query);

    if ($result_assistenza = $conn->query($query) && $result_cliente = $conn->query($query)) {
        $row_assistenza = $result->fetch(PDO::FETCH_ASSOC);
        $row_cliente = $result->fetch(PDO::FETCH_ASSOC);
        $query = "INSERT INTO clienti_assistenza(idCliente, idAssistenza) VALUES($row_cliente->id, $row_assistenza->id)";
        $result = $conn->exec($query);
    }

    $conn=null;
    header("Location: ../index.php");
?>
