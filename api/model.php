<?php

include "database.php";

function getWilaya($code=null){

$db = db_connect();

$singleQuery = 'SELECT * FROM Wilaya WHERE code = :code';
$allQuery =  'SELECT * FROM Wilaya';

if (isset($code)){
    $data = $db->prepare($singleQuery);
    $data -> bindParam('code', $code, PDO::PARAM_INT);
    $data -> execute();
    $results = $data->fetch(PDO::FETCH_ASSOC);
} else {
    $data = $db->prepare($allQuery);
    $data -> execute();
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
}

return $results;

}