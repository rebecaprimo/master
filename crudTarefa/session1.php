<?php
session_start();

$_SESSION['nome'] = 'Rebeca';

echo $_SESSION['nome'];