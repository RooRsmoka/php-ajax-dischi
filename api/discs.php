<?php

include "../database/discsDb.php";

header('Content-Type: application/json');

echo json_encode($discs);
?>