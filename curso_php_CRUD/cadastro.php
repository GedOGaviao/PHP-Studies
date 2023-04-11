<?php

include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$recebendo_cadastro = "INSERT INTO 
tb_clientes
VALUES ('','$nome','$email','$telefone')";
$query_cadastros = mysqli_query($connx,$recebendo_cadastro); // sempre é necessario validar a querry

header('location: listagem.php') //tras de volta os dados que foram inseridos 

?>