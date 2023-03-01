<?php
//heredoc
function geraEmail($nome): void
{
    $conteudoEmail = <<<Final
    ola Senhor $nome
    Estamos entrando em contado pois {motivo do contato}

    {assinatura}

    Final;

    echo $conteudoEmail;
}


geraEmail('Gustavo Henrique');
