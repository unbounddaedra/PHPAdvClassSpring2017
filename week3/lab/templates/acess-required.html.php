<?php

session_start();

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] <= 0) {
    exit("Access restricted");
}
else {
    echo "Access granted";
}
?>