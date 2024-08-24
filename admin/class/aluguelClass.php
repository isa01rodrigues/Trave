<?php

require_once('conexao.php');

class aluguelClass{

 public  $idAluguel; 
 public  $tipoAluguel;
 public  $nomePlano; 
 public  $nomePlanoAdicional; 
 public  $perifericoAdc; 
 public  $precoAluguel; 
 public  $dataSaidaProd; 
 public  $dataRetornoProd;
 public  $idCliente; 
 public  $idFuncionario;
 public  $statusAluguel;

 // metodo para inserir os dados no banco de dados
  //METODO DA CLASS

    // Construindo um metodo que ira carregar as informações do banco de dados   //funcionando como uma ponte 
    public function __construct($id = false)
    {
 
        if ($id) {
 
            $this->idAluguel = $id;
            $this->Carregar();
        }
    }

    public function Listar()
{
    $sql = "SELECT tblaluguelproduto.*, tblcliente.nomeCliente, tblfuncionario.nomeFuncionario FROM tblaluguelproduto INNER JOIN tblcliente ON tblaluguelproduto.idCliente = tblcliente.idCliente INNER JOIN tblfuncionario ON tblaluguelproduto.idFuncionario = tblfuncionario.idFuncionario ORDER BY tblcliente.nomeCliente, tblfuncionario.nomeFuncionario";
    $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
}

//CADASTRAR
public function Cadastrar()
{
   $query = "
   INSERT INTO tblaluguelproduto(
                                   tipoAluguel, 
                                   nomePlano,
                                   nomePlanoAdicional, 
                                   perifericoAdc, 
                                   precoAluguel, 
                                   dataSaidaProd,
                                   dataRetornoProd, 
                                   idCliente, 
                                   idFuncionario, 
                                   statusAluguel)
                                   
         VALUES (
                 '".$this-> tipoAluguel."',
                 '".$this-> nomePlano."',
                 '".$this-> nomePlanoAdicional."',
                 '".$this-> perifericoAdc."',
                 '".$this-> precoAluguel."',
                 '".$this-> dataSaidaProd."',
                 '".$this-> dataRetornoProd."',
                 '".$this-> idCliente."',
                 '".$this-> idFuncionario."',
                 '".$this-> statusAluguel."');
   ";
       
    $conn = Conexao::LigarConexao(); 
    $conn->exec($query);
   
   echo " <script>document.location='index.php?p=aluguel&'</script>";
}

public function Carregar()
{
    $query = "SELECT * FROM tblaluguelproduto WHERE idAluguel = '".$this->idAluguel."';";
    
   
    $conn = Conexao::LigarConexao();  
    
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
       $this->tipoAluguel              = $linha['tipoAluguel'];
        $this->nomePlano               = $linha['nomePlano'];
        $this->nomePlanoAdicional      = $linha['nomePlanoAdicional'];
        $this->perifericoAdc           = $linha['perifericoAdc'];
        $this-> precoAluguel           = $linha['precoAluguel'];
        $this->dataSaidaProd           = $linha['dataSaidaProd'];
        $this->dataRetornoProd         = $linha['dataRetornoProd'];
        $this->idCliente               = $linha['idCliente'];
        $this->idFuncionario           = $linha['idFuncionario'];
        $this->statusAluguel           = $linha['statusAluguel'];
    
    }
}

public function Atualizar() 
{
    $query = "UPDATE `tblaluguelproduto` SET
     tipoAluguel = '".$this-> tipoAluguel."',
      nomePlano= '".$this-> nomePlano."',
       nomePlanoAdicional = '".$this-> nomePlanoAdicional."', 
       perifericoAdc = '".$this-> perifericoAdc."', 
       precoAluguel= '".$this-> precoAluguel."', 
       dataSaidaProd= '".$this-> dataSaidaProd."', 
       dataRetornoProd= '".$this-> dataRetornoProd."', 
       idCliente= '".$this-> idCliente."', 
       idFuncionario= '".$this-> idFuncionario."', 
       statusAluguel= '".$this-> statusAluguel."'
        
             WHERE idAluguel = '".$this-> idAluguel."';
        ";

        $conn = Conexao::LigarConexao(); 
        $result = $conn->exec($query);
        if ($result === false) {
        // Handle query execution failure
        echo "Error executing query: " . $conn->errorInfo()[2];
    } else {
        // Query executed successfully
        echo "<script>document.location='index.php?p=aluguel'</script>";
    }
}

public function desativar(){
    $sql = "UPDATE tblaluguelproduto SET statusAluguel = 'Desativado' WHERE idAluguel = '" .$this->idAluguel."';";
    $conn = Conexao::LigarConexao();
    $conn->exec($sql);

    echo " <script>document.location='index.php?p=aluguel'</script>";

}


}