<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_tarefas';
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco );
if(!$conexao){
    die("<br> nao conectou!!! ERRO : " .
  mysql_connect_error());
}
?>