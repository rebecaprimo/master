<?php
session_start();//Inicia uma nova sessão ou resume uma sessão existente

if( !isset($_SESSION['id']) ){//Informa se a variável foi iniciada, nesse caso não

    header('location: login.php');
    exit();
}