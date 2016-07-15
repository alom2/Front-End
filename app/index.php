<?php
require '../vendor/autoload.php';

include 'sessao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Teste Mongeral Aegon</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="top">
            <img class="left" src="https://madstyle.mongeralaegon.com.br/assets/app/css/img/site/global/mongeral-aegon-logo-site.png" alt="Mongeral Aegon Logo">
            <div class="titulo">Teste para Front-End</div>
        </div>
		<div class="clear"></div>






        <form method="POST" action="pesquisa.php">
            <input type="text" name="usuario">
            <button type="submit">enviar</button>
        </form>
        <script src="main.js"></script>
    </body>
</html>