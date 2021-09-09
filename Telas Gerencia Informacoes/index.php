<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tela de login</title>
</head>

<body>
<table align="center">
<td align="center">
<h1>Bem vindo!</h1>
</td>
<tr>
<td>
<hr />
</td>
</tr>
<td align="center">
<form id="form1" name="form1" method="post" action="auth_login.php">
  <p>
    <label for="login_usuario"></label>
    Usuário:
    <input name="login_usuario" type="text" id="login_usuario" />
  </p>
  <p>
    <label for="login_senha"></label>
    Senha:    
    <input name="login_senha" type="password" id="login_senha" />
  </p>
  <p>
    <input type="submit" name="limpar" id="limpar" value="Limpar" />
    <input type="submit" name="enviar" id="enviar" value="Log-in" />
  </p>
</form>
</td>
</table>
<p>&nbsp;</p>
</body>
</html>