<?php 

require_once("base.php");
include_once 'DAO/editora_dao.php';
include_once 'model/editora.php';

$editora = NULL; 
if (isset($_GET['id'])){
  $editoraDAO = new EditoraDAO();
  $editora = $editoraDAO->pesquisarEditoraPorCodigo($_GET['id']);
  if($editora == NULL){
    echo "Editora não encontrada!";
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
<h4>Dados da editora </h4>
</div>

<dl class="row">
  <dt class="col-sm-3" style="padding-left: 70px">Id</dt>
  <dd class="col-sm-9"><?php echo $editora->getCodigo();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">Nome</dt>
  <dd class="col-sm-9"><?php echo $editora->getNome();?></dd>

  <dt class="col-sm-3" style="padding-left: 70px">Telefone</dt>
  <dd class="col-sm-9"><?php echo $editora->getTelefone();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">Email</dt>
  <dd class="col-sm-9"><?php echo $editora->getEmail();?></dd>
  <dt class="col-sm-3" style="padding-left: 70px">WebSite</dt>
  <dd class="col-sm-9"><?php echo $editora->getWebsite();?></dd>
</dl>
<div style="text-align: center;">
<button type="button" onclick="history.back()" class="btn btn-light">Voltar</button>
</div>
<body>
<html>
