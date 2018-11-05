<?php

$id = filter_input(INPUT_POST, 'id_image', FILTER_SANITIZE_NUMBER_INT);


require "../../model/Connection.php";
$connection = new Connection();

$connection->updateImage($id, $_FILES['imagem']['tmp_name']);

header('Location: ../../view/administracao.php');