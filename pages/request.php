<?php
    include_once "./connect.php";
    $conn = open();

    $email = $_POST["email"];
    $name = $_POST["name"];
    $address = $_POST["address"];
    $civilNumber = $_POST["civilNumber"];
    $comune = checkName($_POST["comune"]);
    $provincia = checkName($_POST["provincia"]);
    $regione = checkName($_POST["regione"]);
    $object = $_POST["object"];
    $request = $_POST["request"];
    $internal = $_POST["internal"];
    $date = date("Y-m-d");

    $query = "INSERT INTO assistenza(oggetto, richiesta, data) VALUES('$object', '$request', '$date')";
    $result = $conn->exec($query);

    $query = "INSERT INTO clienti(email, nomeLocale, via, numeroCivico, comune, provincia, regione, interno)  VALUES('$email', '$name', '$address', $civilNumber, '$comune', '$provincia', '$regione', '$internal')";
    $result = $conn->exec($query);

    $query = "SELECT MAX(id) AS id FROM assistenza";
    $result_assistenza = $conn->query($query);
    $query = "SELECT MAX(id) AS id FROM clienti";
    $result_cliente = $conn->query($query);

    if ($result_assistenza && $result_cliente) {
        $row_assistenza = $result_assistenza->fetch(PDO::FETCH_ASSOC);
        $row_cliente = $result_cliente->fetch(PDO::FETCH_ASSOC);
        $query = "INSERT INTO clienti_assistenza(idCliente, idAssistenza) VALUES($row_cliente[id], $row_assistenza[id])";
        $result = $conn->exec($query);
    }

    $to = "matteottria@gmail.com";
    $subject = $object;
    $message = $request;
    $retval = mail ($to,$subject,$message);

    $conn=null;
    header("Location: ../index.php");

    function checkName($name){
        $name = str_replace("'", "`", $name);
        return $name;
    }
?>
