<?php
    try {
        $bd = mysqli_connect('localhost', 'root', 'root', 'trabalhoweb');
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }