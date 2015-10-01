<?php
/**
 * Server-side script to perform database lookup for the number of songs by and artist.
 * Return JSON encoded object.
 */

$artistName = $_GET['name'];

try {
    $conn = new PDO('mysql:host=localhost;dbname=music', 'username', 'password');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare('SELECT count(*) as songCount FROM songs JOIN albums ON songs.album_id = albums.id
                              JOIN artists ON albums.artist_id = artists.id WHERE artists.name = :artistName');
    $stmt->execute((array('artistName' => $artistName)));
    echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));

} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>


