<?php
//responsavel de fazer a conexão com o banco de dados
require_once('conexao.php');

//ATRIBUINDO A CLASSE 
class clienteClass{
     public $idCliente;	
    public $nomeCliente;
    public	$cpfCliente;	
    public $cnpjCliente;	
    public $emailCliente;	
    public  $senhaCliente;	
    public $telefoneCliente;	
    public  $tipo;	
    public $statusCliente;	




 //METODO DA CLASS

    // Construindo um metodo que ira carregar as informações do banco de dados   //funcionando como uma ponte 
    public function __construct($id = false)
    {
 
        if ($id) {
 
            $this->idCliente = $id;
            $this->Carregar();
        }
    }
    
//LISTAR
public function Listar()
{
    $sql = "SELECT * FROM tblcliente WHERE statusCliente IN ('ATIVO', 'PENDENTE') 
    ORDER BY FIELD(statusCliente, 'ATIVO', 'PENDENTE') ASC;
    ";
    $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
}

 //CADASTRAR
 public function Cadastrar(){
    $query = "INSERT INTO `tblcliente`(
        `nomeCliente`, 
        `cpfCliente`,
        `cnpjCliente`,
        `emailCliente`, 
        `senhaCliente`, 
        `telefoneCliente`,
        `tipo`, 
        `statusCliente`) 
    VALUES ('".$this-> nomeCliente."',
    '".$this-> cpfCliente."',
    '".$this-> cnpjCliente."',
    '".$this-> emailCliente."',
    '".$this-> senhaCliente."',
    '".$this-> telefoneCliente."',
    '".$this-> tipo."',
    '".$this-> statusCliente."');";
        
     $conn = Conexao::LigarConexao(); 
     $conn->exec($query);
    
   echo " <script>document.location='index.php?c=cliente'</script>";
}

//SEÇÃO RESPONSAVEL DE PASSAR AS INFORMAÇÕES DO BANCO DE DADOS

public function Carregar(){
    $query = "SELECT * FROM tblcliente WHERE idCliente  = ".$this->idCliente;
    $conn = Conexao::LigarConexao();  
    
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
       $this->nomeCliente              = $linha['nomeCliente'];
        $this->cpfCliente              = $linha['cpfCliente'];
        $this->cnpjCliente             = $linha['cnpjCliente'];
        $this->emailCliente            = $linha['emailCliente'];
        $this->senhaCliente            = $linha['senhaCliente'];
        $this->telefoneCliente         = $linha['telefoneCliente'];
        $this->tipo                   = $linha['tipo'];
        $this->statusCliente           = $linha['statusCliente'];
      
       
    }
}

public function Atualizar() {
    $query = "UPDATE tblcliente 
    SET 
        nomeCliente = '".$this->nomeCliente."',
        cpfCliente = '".$this->cpfCliente."',
        cnpjCliente = '".$this->cnpjCliente."',
        emailCliente = '".$this->emailCliente."',
        senhaCliente = '".$this->senhaCliente."',
        telefoneCliente = '".$this->telefoneCliente."',
        tipo = '".$this->tipo."',
        statusCliente = '".$this->statusCliente."' 
    WHERE 
        idCliente =" .$this->idCliente;
            try {
                $conn = Conexao::LigarConexao(); 
                $conn->exec($query);
                echo "<script>document.location='index.php?p=cliente'</script>";
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage(); // Output any errors that occur during execution
            }
}

public function desativar(){
    $sql = "UPDATE tblcliente SET statusCliente = 'Desativado' WHERE idCliente = '" . $this->idCliente ."';";
    $conn = Conexao::LigarConexao();
    $conn->exec($sql);

    echo "<script>document.location='index.php?p=cliente'</script>";
}


}
