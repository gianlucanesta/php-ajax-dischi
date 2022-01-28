<?php
require __DIR__ . '/database.php';

$selected_genre = $_GET['genre'];

if(empty($selected_genre)) {
    // Se genere è vuoto o non definito stampo tutti i dischi
    $json = json_encode($database);
} else {
    // Se invece il genere mi viene passato:
    // filtro i dischi
    $filtered_albums = [];
    foreach($database as $album) {
        // Pusho il disco nell'array dei dischi filtrati solo se il genere corrisponde
        if($album['genre'] === $selected_genre) {
            $filtered_albums[] = $album;
        }
    }

    $json = json_encode($filtered_albums);
}

header('Content-Type: application/json');

echo $json;
?>