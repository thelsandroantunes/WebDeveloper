atendimento
<!DOCTYPE>
<html xmlns="http://www.w3.org/">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loja Virtual</title>
<link rel="stylesheet" href="style/style1.css" type="text/css"  />
</head
<body>

<div id="main2">
<div id="header"><img src="images/logo.png"></div>
<div id="manu">
  <ul>
    <li><a style="background:#1f447f; color:#fff;" href="index.php">HOME</a></li>
    <li><a href="pedido.php">MEUS PEDIDOS</a></li>
    <li><a href="atendimento.php">ATENDIMENTO</a></li>
    <li><a href="login/login.php">ENTRAR</a></li>
  </ul>
</div>
<div id="content">
  <?php
  require_once 'conexao/dbconfig.php';

  //**********************************************
    echo "Nenhum Detalhe";
  //**********************************************

  ?>
</div>
</div>
</div>
<div id="footer">
  <center>
    <p>Acesse Nossas Mídias Sociais </p>
    <p><img src="images/facebook.png"> <img src="images/twitter.png">  <img src="images/youtube.png"></p>
  </center>
  <b>  Copyrights©2018 Protótipo de Loja Virtual - Thelsandro Antunes.</b>
</div>
</div>

</body>
</html>