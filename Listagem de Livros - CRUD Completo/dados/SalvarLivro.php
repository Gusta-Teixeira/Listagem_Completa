<?php
include_once '../DAO/livro_dao.php';
include_once '../form/livros.php';
include_once '../form/autor.php';
$livrosDAO = new LivrosDAO ();
$livro = new Livro ();
$livro->setTitulo ( $_POST ['titulo'] );
$livro->setNumEdicao ( $_POST ['numEdicao'] );
$livro->setNPaginas ( $_POST ['nPaginas'] );
$livro->setIsbn ( $_POST ['isbn'] );
$livro->setAnoPublicacao ( $_POST ['anoPublicacao'] );
$livro->setEditora ( $_POST ['editora'] );


$id = $_POST['autor'];
$autor = new Autor();
$autor->setCodigo($id);
$livro->setAutor($autor);
$resultado = $livrosDAO->inserirLivro ( $livro );
if($resultado == True){
    header ( "Location: ../listar_Livros.php" );
} else{
    header ( "Location: ../listar_Livros.php?erro=salvar" );

}



?>
	
