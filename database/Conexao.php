<?php

    try {
        $bd = mysqli_connect('localhost', 'root', 'root', 'webaulabd');
        $bd->set_charset('utf-8');
    } catch (Exception $ex) {

    }

