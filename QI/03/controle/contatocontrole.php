<?php
include_once '../modelo/contato.class.php';
include_once '../util/validacao.class.php';
include_once '../util/email.class.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];	
$telefone = $_POST['txttelefone'];

if(!Validacao::testarNome($nome) ||
   !Validacao::testarEmail($email) ||
   !Validacao::testarTelefone($telefone)){
	
	header("location:../visao/viewerro.php");

}else{
	$c = new Contato($nome,$email,$telefone);

	$mensagem = "Nome: $c->nome #### Email: $c->email #### telefone: $c->telefone ";
	
	$e = new Email($mensagem);
	$e->enviarEmail();
	
	header("location:../visao/viewresposta.php?nome=$c->nome&email=$c->email&telefone=$c->telefone");
}
?>
