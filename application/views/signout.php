<?php

    session_start();

    $_SESSION['npm_user'] = '';
    unset($_SESSION['npm_user']);
    session_unset();
    session_destroy();
    header('location:index.php');

?>
