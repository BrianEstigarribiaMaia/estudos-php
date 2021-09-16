<!DOCTYPE html>
<html>
<head>

<title>Resposta</title>
</head>

<body>
	<h1>Resposta</h1>
    <?php
    	$nome = $_GET['nome'];
		$email = $_GET['email'];
		$telefone = $_GET['telefone'];		
		
		echo '<p>Nome: '.$nome.
      		 '<br />Email: '.$email.
      		 '<br />Telefone: '.$telefone.'</p>';
	?>
</body>
</html>