<?php

class Produto{
	
	public $Codigo;
	public $Descricao;
	public $Preco;
	public $Fornecedor;
	
	//exibe dados do produto
	function ExibeDados(){
		
		echo 'Codigo: '    . $this->Codigo ."<br>\n";
		echo 'Descricao: ' . $this->Descricao ."<br>\n";
		echo 'Preco: '     . $this->Preco ."<br>\n";
		echo 'Fornecedor: '. $this->Fornecedor->Nome ."<br>\n";
		
		//atribui a um fornecedor ao produto 
		function setFornecedor(Fornecedor $fornecedor){
			
			$this->Fornecedor = $fornecedor; //associação interna 
			
		}
	}
}

?>