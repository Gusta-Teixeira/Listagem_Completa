
<?php



session_start();

if(isset($_SESSION['autenticado'])==true && $_SESSION['autenticado']==true){
	header('Location: index.php');
	
}

$mensagem = "";
if(isset($_SESSION['erro'])==true){
$mensagem  = $_SESSION['erro'];
session_destroy();
}

$login = '';
$selecionado = '';
if(isset($_COOKIE['login']))
{ 
	$login = $_COOKIE['login'];
	$selecionado = 'checked';
}
?>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style> 
	body{
		margin: 30px;
		}
		
</style>
<body>


	<form method="POST" action="login.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Login</label>
    <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nome">
  </div>
  <div class="form-group">
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Senha">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" name="lembrar" class="form-check-input" id="exampleCheck1" <?=$selecionado?>>Lembrar meu nome<br>
  </div>
  <div><?php echo $mensagem; ?></div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form> 
</body>
</html>

<?php


