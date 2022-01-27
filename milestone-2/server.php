<?php 
    require __DIR__ . '/database.php';

    $json = json_encode($database);

    header('Content-Type: application/json');
    echo $json;
    // var_dump($json);

?>