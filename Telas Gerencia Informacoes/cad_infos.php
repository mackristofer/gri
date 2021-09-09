<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de informações</title>
</head>

<body>
<h1>Cadastro de informações</h1>
<hr />
<form id="form1" name="form1" method="post" action="">
  <table width="548" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="100">Nome empresa:</td>
      <td width="84"><label for="emp_nome"></label>
      <input name="emp_nome" type="text" id="emp_nome" size="70" /></td>
    </tr>
    <tr>
      <td>Descrição serviço:</td>
      <td><label for="inf_descricao"></label>
      <input name="inf_descricao" type="text" id="inf_descricao" size="70" /></td>
    </tr>
    <tr>
      <td>Usuário:</td>
      <td><label for="inf_usuario"></label>
      <input name="inf_usuario" type="text" id="inf_usuario" size="30" /></td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td><label for="inf_senha"></label>
      <input name="inf_senha" type="password" id="inf_senha" size="20" /></td>
    </tr>
    <tr>
      <td>Informações:</td>
      <td><label for="inf_gerais"></label>
      <textarea name="inf_gerais" id="inf_gerais" cols="67" rows="5"></textarea></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="limpar" id="limpar" value="Limpar" />
      <input type="submit" name="Enviar" id="Enviar" value="Enviar" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>