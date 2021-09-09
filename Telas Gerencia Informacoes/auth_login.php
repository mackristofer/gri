<?php
session_start(); //iniciando a sessao
if(!isset($_COOKIE['block'])){
	require 'db.php'; //script para conexao com o banco de dados

	$login = $_POST['login_usuario']; //pega o que foi digitado no campo login
	$senha = $_POST['login_senha']; //pega o que foi digitado no campo senha

	$ip = $_SERVER['REMOTE_ADDR']; //pega o ip do visitante

	$sql = mysqli_query($conetcta, "SELECT * FROM tbauth WHERE login_usuario = '$login' AND senha_usuario = '$senha'"); //select para testar os dados que foi digitado

	$dt = date("Y-m-d H:i:s"); //pega a data no formato datetime mysql

		if (mysqli_num_rows($sql) > 0){ //conta quantas linhas foram retornada do select anterior, se for maior que zero significa que os dados sao ok
			$_SESSION['usuario'] = $login; //cria sessao login
			$_SESSION['ip'] = $ip; //cria sessao ip
			$data = mysqli_fetch_array($sql);
			$id = $data['id_usuario'];
			mysqli_query($conecta, "INSERT INTO tbaudit (id_usuario, dt_acesso, ip_remoto, status) VALUES ('$id', '$dt', '$ip', '1')"); //insere os dados a tabela auditoria com status 1 = ok
			header("location:exibicao_informacoes.php"); //redireciona para a pagina de exibicao dos dados
		}else{
			mysqli_query($conetcta, "INSERT INTO tbaudit (id_usuario, dt_acesso, ip_remoto, status) VALUES ('0', '$dt', '$ip', '0')"); //insere os dados na tabela auditoria com status 0 = erro
			$sql2 = mysqli_query($conetcta, "SELECT * FROM tbaudit WHERE ip_remoto = '$ip' AND status = '0'"); //faz um select setando o ip como parametro
				if (mysqli_num_rows($sql2) > 3){ //se o ip tiver tentado acesso mais de 3 vezes sem sucesso ele vai bloquear o acesso por 10 minutos
					header("location:block.php"); //redireciona para pagina de aviso de bloqueio
				}else{
					header("location:index.php"); //redireciona para pagina de login
				}
		}
	}else{
		echo "Error ################# Error ################## Error #########";
	}
	
?>