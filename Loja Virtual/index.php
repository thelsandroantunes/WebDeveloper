<!DOCTYPE>

<!--
*   Autor: Thelsandro Costa Antunes
*   Data: 17/12/2018
*   Engenharia de Computação
*   Projeto de Loja Virtual em PHP
*   1ª Versão
-->

<html xmlns="http://www.w3.org/">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Loja Virtual</title>
<link rel="stylesheet" href="style/style1.css" type="text/css"  />
<style>
ul.pagination {
    text-align:center;
    color:#5DBCD2;
}
ul.pagination li {
    display:inline;
    padding:0 3px;
}
ul.pagination a {
    color:#5DBCD2;
    display:inline-block;
    padding:5px 10px;
    border:1px solid #5DBCD2;
    text-decoration:none;
}
ul.pagination a:hover,
ul.pagination a.current {
    background:#5DBCD2;
    color:#fff;
}



</style>

</head>
<body>

<div id="main2">

    <div id="header"><img src="images/logo.png"></div>

<div id="manu">
<ul>
<li><a style="background:#5DBCD2; color:#fff;" href="index.php">HOME</a></li>
<li><a href="track.php">MEUS PEDIDOS</a></li>
<li><a href="contact.php">ATENDIMENTO</a></li>
<li><a href="login/login.php">ENTRAR</a></li>
</ul>
</div>


<div id="content">

  <?php
  require_once 'connection/dbconfig.php';

  include_once('connection/connectionz.php');
  include_once('function/functionz.php');


//**********************************************
  echo "No Record";
//**********************************************
?>


<br>
<br>



    </div>
<div id="nav">
    <br>
    <center>
    <?php

            // displaying paginaiton.
          //  echo pagination($statement,$per_page,$page,$url='?');
            ?>
    </center>
    <br>

</div>




    <div id="footer">
<center>
      <p> Acesse Nossas Mídias Sociais </p>
      <p><img src="images/facebook.png"> <img src="images/twitter.png">  <img src="images/youtube.png"></p>
</center>
    <b>  Copyrights©2018 Protótipo de Loja Virtual - Thelsandro Antunes.</b>

    </div>

</div>

</body>
</html>