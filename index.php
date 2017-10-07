<?php
$cities = array("Amsterdammer", "Berlin", "New York", "San Francisco", "Tokyo");

header('Content-Type: application/json');
echo json_encode($cities, JSON_PRETTY_PRINT);
?>
