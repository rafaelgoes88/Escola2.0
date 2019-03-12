<?php
$db = NULL;
$conexao = NULL;
$conexao = mysqli_connect('localhost','root','') or die(mysqli_error());
$db = mysqli_select_db($conexao,'escola');
?>