<?php
session_start(); //inicia a sessao
if (isset($_SESSION['usuario']) && isset($_SESSION['ip'])){ //checa se a sessão foi criada, ou seja se o usuário validou na tela de login
$usuario = $_SESSION['usuario']; //pega o usuario passado pela sessao
$ip = $_SESSION['ip']; //pega o ip passado pela sessao
require 'db.php'; //responsavel por conectar no banco de dados
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tela exibição</title>
</head>

<body>
<h2>Acessado por: <?php echo $usuario //imprime o nome do usuário?></h2>
<p>IP:<?php echo $ip //imprime o ip?> | Data:<?php echo date("Y-m-d H:i:s") //imprime a data?></p>
<hr />
<?php 
$sql = mysqli_query("SELECT * FROM tbempresa"); //seleciona a tabela empresas para popular o select
?>
<form id="form1" name="form1" method="get" action="exibicao_informacoes.php?id=list_empresa">
  <label for="list_empresa"></label>
  Selecione a empresa:
  <select name="list_empresa" id="list_empresa">
  <option>Selecione...</option>
  <?php
  while($emp = mysqli_fetch_array($sql)){ //joga os valores do array para o select?>
  <option value="<?php echo $emp['id_empresa']?>"><?php echo $emp['nome_empresa'] //preenche os campos do select?></option>
  <?php
  }//fecha o while
  ?>
  </select>
</form>
<br />
<table width="286" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <td>Serviço</td>
    <td>Usuário</td>
    <td>Senha</td>
    <td>Informações</td>
  </tr>
  <?php
  $id = $_GET['id']; //salva o id passado pelo get no action do formulario
  $sql2 = mysqli_query("SELECT * FROM tbsenhas WHERE id_senha = '$id'"); //select na tabela de senha
  while ($pwd = mysqli_fetch_array($sql2)){ //cria o vetor para jogar na tabela
	  ?>
  <tr>
    <td><?php echo $pwd['servico_senha']?></td>
    <td><?php echo $pwd['usuario_senha']?></td>
    <td><?php echo $pwd['pwd_senha']?></td>
    <td><?php echo $pwd['infos_senha']?></td>
  </tr>
  <?php
  } //fecha o while
  ?>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php 
}else{ //else do if de teste da variavel sessao
	header("location:block.html"); //se n existir a sessao redireciona para o block
}
?>