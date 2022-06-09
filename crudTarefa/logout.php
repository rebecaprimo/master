<?php
session_start();
session_destroy();//destrói todos os dados registrados em uma sessão
header('location: login.php');