<?php

    $num_cadastrados = 0;

    $nomes = [];
    $emails = [];
    $nascimentos = [];
    $telefones = [];

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $nascimento = $_POST['nascimento'];
        $telefone = $_POST['telefone'];

        array_push($nomes[$num_cadastrados], $nome);
        array_push($emails[$num_cadastrados], $email);
        array_push($nascimentos[$num_cadastrados], $nascimento);
        array_push($telefones[$num_cadastrados], $telefone);

        $num_cadastrados++;

?>