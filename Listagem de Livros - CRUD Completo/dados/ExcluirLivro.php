<?php
include_once '../DAO/livro_dao.php';
$livrosDAO = new LivrosDAO ();
$id = $_GET ['id'];
$livrosDAO->excluirLivro ( $id );
header ( "Location: ../listar_Livros.php" )?>