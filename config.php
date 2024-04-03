<?php

$host = 'localhost';
$user = 'root';
$senha = '';
$banco = 'alunos';

$conexao = new mysqli($host,$user,$senha,$banco);

if($conexao -> connect_errno)

//{
  //  echo"erro";

//} else{

  //  echo"deu certo";
//}

?>