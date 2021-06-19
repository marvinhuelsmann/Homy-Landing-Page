<?php
header('Access-Control-Allow-Origin: *');

$db = mysqli_connect($_ENV['DB_HOSTNAME'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_USERNAME']);

function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
    } elseif (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }

    return $ip;
}

$ip = getIp();


if (isset($_GET['mail'])) {

    $sql = "INSERT INTO `homy_newsletter` (`ip`, `email`) VALUES ('".mysqli_real_escape_string($db , $_GET['mail'])."', '".mysqli_real_escape_string($db , $ip)."')";
    if (mysqli_query($db, $sql)) {
        echo json_encode(['success' => 'email added']);

        return;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
}

http_response_code(401);

?>