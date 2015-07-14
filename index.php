<!DOCTYPE html>
<?php
$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$path = str_replace("/","", $rota['path']);

function rotas ($path){
    $a = array(
    'contato' => 'contato.php',
    'empresa' => 'empresa.php',
    'produto' => 'produto.php',
    'servicos' => 'servicos.php',
    'home' => 'index.php',
    'index.php' => 'index.php',
    'erro' => 'erro.php'   
);
     if ($a[$path]) {
          return require_once ($a[$path]);
      }
      elseif (!$path) {
          return require_once ($a['home']);
      }
      else {
          return require_once ($a['erro']);
      }
}
?>


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