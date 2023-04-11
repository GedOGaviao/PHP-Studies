<?php
/*
estrutura de conexção bassica padrão
*/
$host = 'localhost';
$user = 'root';
$password = '';
$bd_name = 'agenda_php';
// aqui conecta 
$connx = mysqli_connect($host, $user, $password, $bd_name);

/* if ($connx) {
echo 'Conectou';
} else {
echo 'Erro';
} */

?>