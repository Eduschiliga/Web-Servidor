<?php

    session_start();
if(!empty($_SESSION['logado'])) {
    header('Location: ../views/pages/honorarios/index.php');
} else {
    header('Location: ../index.php');
}

?>