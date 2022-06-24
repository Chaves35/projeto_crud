<?php

include 'conexao.php';

    //recebendo os dados o form
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];

    // cadastrar no banco
    $query_cadastrar = "INSERT INTO cadastro_pessoas VALUES (
        null,
        '$nome',
        '$telefone',
        now()
    )";
    //conexão com o banco e salvar os dados
    $cadastrar_formulario = mysqli_query($connex, $query_cadastrar) or die(mysqli_error($connex));

    header('location: ../index.php'); 