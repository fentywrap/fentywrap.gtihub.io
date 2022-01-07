<?php

include "config.php";
session_start();
if ($_POST) {
    $name = $_SESSION['name'];
    $msg = $_POST['msg'];

    $sql = "INSERT INTO `chat3`(`name`, `message`) VALUES ('" . $name . "', '" . $msg . "')";

    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: chat3.php');
    } else {
        echo "Something went wrong";
    }
}
