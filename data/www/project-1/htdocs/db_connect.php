<?php
    $host = "localhost:" . $_ENV["HOST_PORT_MYSQL"];
    $user = $_ENV["MYSQL_USER"];
    $password = "";
    $database = $_ENV["MYSQL_TABLE_NAME"];

    $mysqli = new mysqli($host, $user, $password, $database);
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "<br>";
?>