<?php 

require_once("base.php");
include_once 'DAO/livro_dao.php';
include_once 'model/livros.php';




$livro = NULL; 
if (isset($_GET['id'])){
  $livroDAO = new LivrosDAO();
  $livro = $livroDAO->pesquisarLivroPorCodigo($_GET['id']);
  if($livro == NULL){
    echo "livro não encontrado!";
    die(); 
  }
}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DAO demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  </head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<br>
<div style="text-align: center;">
<h4>Dados do Livro </h4>
</div>

<dl class="row">
  <dt class="col-sm-3" style="padding-left: 70px">Id</dt>
  <dd class="col-sm-9"><?php echo $livro->getCodigo();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">Título</dt>
  <dd class="col-sm-9"><?php echo $livro->getTitulo();?></dd>

  <dt class="col-sm-3" style="padding-left: 70px">ISBN</dt>
  <dd class="col-sm-9"><?php echo $livro->getIsbn();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">Num. Páginas</dt>
  <dd class="col-sm-9"><?php echo $livro->getNPaginas();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">Ano Publicação</dt>
  <dd class="col-sm-9"><?php echo $livro->getAnoPublicacao();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">Edição</dt>
  <dd class="col-sm-9"><?php echo $livro->getNumEdicao();?></dd>
</dl>
<div style="text-align: center;">
<button type="button" onclick="history.back()" class="btn btn-light">Voltar</button>
</div>
<body>
<html>
