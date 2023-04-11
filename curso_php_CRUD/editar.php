<?php

include 'conexao.php';

$id = $_POST['idCadastro'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

$recebendo_cadastro = "UPDATE
tb_clientes
SET nome ='$nome', email ='$email', telefone ='$telefone'
WHERE id = '$id'";
$query_cadastros = mysqli_query($connx,$recebendo_cadastro) or die(mysqli_error($connx)); // sempre é necessario validar a querry

header('location: listagem.php') //tras de volta os dados que foram inseridos 

?>