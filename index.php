<!DOCTYPE html>
<?php require_once ("rotas.php");?>
<html>
  <head>
    <title>Aula</title>
        <?php require_once ("configuracao.php");?>
  </head>
  <body>
     <?php require_once ("menu.php");?>
      <?php $b = rotas($path)
      ?>
     <?php require_once ("rodape.php");?>
  </body>
</html>