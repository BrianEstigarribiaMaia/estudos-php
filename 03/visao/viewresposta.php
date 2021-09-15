<!DOCTYPE html>
<html>
 <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resposta</title>
  </head>
  <body>
    <h1>Resposta</h1>
    <?php
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $telefone = $_GET['telefone'];

        echo '<p>Nome: '.$nome.  
             '<br>Email: '.$email. 
             '<br>Telefone: '.$telefone.'</p>'
    ?>
  </body>
</html>