<?php

include 'conexao.php'; // chamada do banco de dados 

$busca_cadastro = " SELECT * FROM tb_clientes";
$query_cadastro = mysqli_query($connx,$busca_cadastro);



?>

<!doctype html>
<html lang="en">

<head>
    <title>Cadastro De Cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!--modelo de tabela padrão  -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($receber_cadastro = mysqli_fetch_array($query_cadastro)) //busca um array dos elementos do meu bd 
                {
                    $id = $receber_cadastro['id'];
                    $nome = $receber_cadastro['nome'];
                    $email = $receber_cadastro['email'];
                    $telefone = $receber_cadastro['telefone'];
                ?>
                <tr>
                    <td scope="row"><?php echo $id;?></td>
                    <td><?php echo $nome;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $telefone;?></td>

                    <td>
                        <form action="editar.php" method="post">
                            <input type="hidden" name="idCadastro" value="<?php echo $id;?>"> 

                            <input type="text" name="nome" value="<?php echo $nome?>"> 

                            <input type="text" name="email" value="<?php echo $email?>"> 

                            <input type="text" name="tefone" value="<?php echo $telefone?>"> 

                            <input type="submit" value="Editar"> 
                        </form>
                    </td>

                    <td>
                        <form action="excluir.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id;?>"> 
                            <input type="submit" value="Excluir"> 
                        </form>
                    </td>
                </tr>

                <?php };?>  <!-- fechei meu while aqui -->

                <tr>
                    <form action="cadastro.php" method="post">
                        <td></td>
                        <td><input type="text" name="nome"> </td>
                        <td><input type="text" name="email"> </td>
                        <td><input type="text" name="telefone"> </td>
                        <td><input type="submit" value="Cadastro"> </td>
                    </form>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>