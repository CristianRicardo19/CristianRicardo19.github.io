<?php
    $con = mysqli_connect("localhost","root","","pedrocoffehouse");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MYSQL: " . mysqli_connect_error();
        exit();
    }
?>