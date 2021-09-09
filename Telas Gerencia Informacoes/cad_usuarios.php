<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro de Usuários</title>
</head>

<body>
<h1>Cadastro de usuários do sistema</h1>
<hr />
<form id="form1" name="form1" method="post" action="">
  <table width="406" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="94">Nome:</td>
      <td width="296"><label for="usu_nome"></label>
      <input name="usu_nome" type="text" id="usu_nome" size="70" /></td>
    </tr>
    <tr>
      <td>E-mail:</td>
      <td><label for="usu_email"></label>
      <input name="usu_email" type="text" id="usu_email" size="70" /></td>
    </tr>
    <tr>
      <td>Senha:</td>
      <td><label for="usu_senha"></label>
      <input type="password" name="usu_senha" id="usu_senha" /></td>
    </tr>
    <tr>
      <td>Status:</td>
      <td><label for="usu_status"></label>
        <select name="usu_status" size="1" id="usu_status">
          <option selected="selected">Ativo</option>
          <option>Inativo</option>
      </select></td>
    </tr>
    <tr>
      <td>Administrador:</td>
      <td><label for="usu_adm"></label>
        <select name="usu_adm" size="1" id="usu_adm">
          <option>Sim</option>
          <option>Não</option>
      </select></td>
    </tr>
    <tr>
      <td height="25" colspan="2" align="center"><input type="reset" name="limpar" id="limpar" value="Limpar" />
      <input type="submit" name="enviar" id="enviar" value="Enviar" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>