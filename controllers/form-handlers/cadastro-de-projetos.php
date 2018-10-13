<?php
var_dump($_POST);

$nome_do_projeto = filter_input(INPUT_POST, 'nome_do_projeto', FILTER_SANITIZE_SPECIAL_CHARS);
$resumo_do_projeto = filter_input(INPUT_POST, 'resumo_do_projeto', FILTER_SANITIZE_SPECIAL_CHARS);
$turma_do_projeto = filter_input(INPUT_POST, 'turma_do_projeto', FILTER_SANITIZE_SPECIAL_CHARS);
$nome_dos_participantes = $_POST["nome_participante"];
$email_dos_participantes = $_POST["email_participante"];

require "../../model/Connection.php";
$connection = new Connection();

$connection->registerProject($nome_do_projeto,
        $resumo_do_projeto,
        $turma_do_projeto,
        $nome_dos_participantes,
        $email_dos_participantes);
$connection->closeConnection();

header("location: ../../view/pagina-inicial.php");
