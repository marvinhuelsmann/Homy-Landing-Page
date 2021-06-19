<?php
header('Access-Control-Allow-Origin: *');

$db = mysqli_connect($_ENV['DB_HOSTNAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_USERNAME']);
$user_check_query = "SELECT * FROM homy_work";

$db_erg = mysqli_query($db, $user_check_query);

while ($row = mysqli_fetch_array($db_erg, MYSQLI_ASSOC)) {
    echo json_encode([
        'workState' => $row['percent']
    ]);
    return;
}

http_response_code(401);
header('Content-Type: application/json');

?>