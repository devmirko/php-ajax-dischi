<?php
include_once __DIR__ . '/db/data.php';

header('Content-Type: application/json');

echo json_encode($Album);


