<?php
    if(!isset($_SESSION)){
        session_start();
        $_SESSION['logado'] = $_SESSION['logado'] ?? false;
    }

?>