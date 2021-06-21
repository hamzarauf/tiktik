<?php
header("Content-Type: application/json");
include "vendor/autoload.php";
$api = new \Sovit\TikTok\Api();
$result = $api->getUserFeed("jannatmirza");
echo json_encode($result,JSON_PRETTY_PRINT);
