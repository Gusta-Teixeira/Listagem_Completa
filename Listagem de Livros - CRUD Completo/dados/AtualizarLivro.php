<?php
include_once '../DAO/livro_dao.php';
include_once '../form/livros.php';
$livrosDAO = new LivrosDAO ();
$livro = new Livro ();
$livro->setCodigo ( $_POST ['codigo'] );
$livro->setTitulo ( $_POST ['titulo'] );
$livro->setNumEdicao ( $_POST ['numEdicao'] );
$livro->setNPaginas ( $_POST ['nPaginas'] );
$livro->setIsbn ( $_POST ['isbn'] );
$livro->setAnoPublicacao ( $_POST ['anoPublicacao'] );
$livro->setEditora ( $_POST ['editora'] );

$autor_id = $_POST ['autor'];
$autor = new Autor();
$autor->setCodigo($autor_id);
$livro->setAutor($autor);


$resultado=$livrosDAO->editarLivro ( $livro );


header ( "Location: ../listar_Livros.php" )?>
	
