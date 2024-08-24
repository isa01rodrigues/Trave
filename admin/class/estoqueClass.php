<?php

require_once('conexao.php');

class estoqueClass{

public  $idEstoque; 
 public  $nomeProduto;
 public  $tipoProduto; 
 public  $configuracaoProduto; 
 public  $quantidadeEstoque; 
 public  $valorDiaria; 
 public  $statusEstoque;

 public function __construct($id = false)
 {

     if ($id) {

         $this->idEstoque = $id;
         $this->Carregar();
     }
 }

 public function Listar()
 {
     $sql = "SELECT * FROM tblestoque WHERE statusEstoque ='ATIVO' ORDER BY nomeProduto ASC;";
     $conn = Conexao::LigarConexao();
         $resultado = $conn->query($sql);
         $lista = $resultado->fetchAll();
         return $lista;
 }

 public function Cadastrar()
{
   $query = "
   INSERT INTO tblestoque (
    nomeProduto,
    tipoProduto,
    configuracaoProduto, 
    quantidadeEstoque,
    valorDiaria,
    statusEstoque) 
            
            VALUES (
                '".$this-> nomeProduto."', 
                '".$this-> tipoProduto."', 
                '".$this-> configuracaoProduto."', 
                '".$this-> quantidadeEstoque."', 
                '".$this-> valorDiaria."', 
                '".$this-> statusEstoque."');
   ";
       
    $conn = Conexao::LigarConexao(); 
    $conn->exec($query);
   
   echo " <script>document.location='index.php?p=estoque&e'</script>";
}
public function Carregar()
{
    $query = "SELECT * FROM tblestoque WHERE idEstoque = '".$this->idEstoque."';";
    
   
    $conn = Conexao::LigarConexao();  
    
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
       $this->nomeProduto                = $linha['nomeProduto'];
        $this->tipoProduto               = $linha['tipoProduto'];
        $this->configuracaoProduto       = $linha['configuracaoProduto'];
        $this->quantidadeEstoque         = $linha['quantidadeEstoque'];
        $this-> valorDiaria              = $linha['valorDiaria'];
        $this->statusEstoque             = $linha['statusEstoque'];
        
    }
}

public function Atualizar() 
{
    $query = " 
    UPDATE tblestoque SET nomeProduto = '".$this-> nomeProduto."',
         tipoProduto = '".$this-> tipoProduto."', 
         configuracaoProduto = '".$this-> configuracaoProduto."', 
         quantidadeEstoque = '".$this-> quantidadeEstoque."', 
         valorDiaria = '".$this-> valorDiaria."', 
         statusEstoque = '".$this-> statusEstoque."'
             WHERE idEstoque = '".$this-> idEstoque."';
        ";

        $conn = Conexao::LigarConexao(); 
        $result = $conn->exec($query);
        if ($result === false) {
        // Handle query execution failure
        echo "Error executing query: " . $conn->errorInfo()[2];
    } else {
        // Query executed successfully
        echo "<script>document.location='index.php?p=estoque'</script>";
    }
}

public function desativar(){
    $sql = "UPDATE tblestoque SET statusEstoque = 'Desativado' WHERE idEstoque = '" .$this->idEstoque."';";
    $conn = Conexao::LigarConexao();
    $conn->exec($sql);

    echo " <script>document.location='index.php?p=aluguel'</script>";

}


}