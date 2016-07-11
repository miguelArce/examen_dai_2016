<?php
session_start();
$_SESSION['rut'] = "";
$_SESSION['nombre'] = "";
$_SESSION['tipo_usuario'] = "";


header ('Location: ../paginas/login.php');
