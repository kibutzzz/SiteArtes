<?php

$id = filter_input(INPUT_POST, 'integrante_id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome_do_integrante', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email_do_integrante', FILTER_SANITIZE_SPECIAL_CHARS);

require "../../model/Connection.php";
$connection = new Connection();

$connection->updateMemberInfo($id, $nome, $email);

header('Location: ../../view/administracao.php');