<?php

    $connect = mysqli_connect('localhost', 'root', '', 'mew');

    if (!$connect) {
        die('Error connect to DataBase');
    }