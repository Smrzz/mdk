<?php

    $connect = mysqli_connect('localhost', 'root', '', 'zxc');

    if (!$connect) {
        die('Error connect to DataBase');
    }