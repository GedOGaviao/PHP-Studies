<?php

include 'conexao.php';

$id = $_POST['id'];

$recebendo_cadastro = "DELETE FROM tb_clientes WHERE id = '$id'";

$query_cadastros = mysqli_query($connx,$recebendo_cadastro); // sempre é necessario validar a querry

header('location: listagem.php') //tras de volta os dados que foram inseridos 

?>