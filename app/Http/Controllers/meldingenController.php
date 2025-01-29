<?php

//Variabelen vullen
$attractie = $_POST['attractie'];
// $type = $_POST['type'];
$type = "bbbbb";
$capaciteit = $_POST['capaciteit'];
$melder = $_POST['melder'];

echo $attractie . " / " . $capaciteit . " / " . $melder;

//1. Verbinding
require_once '../../../config/conn.php';

//2. Query
// $query = "INSERT INTO meldingen (attractie, type, melder) VALUES(:attractie, :type, :melder)";
$query = "SELECT * FROM meldingen";

//3. Prepare
$statement = $conn->prepare($query);

//4. Execute

// $statement->execute([
//     ":attractie" => $attractie,
//     ":type" => $type,
//     ":melder" => $melder,
// ]);

$statement->execute();

$items = $statement->fetchAll(PDO::FETCH_ASSOC);

print_r($items);
// header("location:../../../resources/views/meldingen/index.php");