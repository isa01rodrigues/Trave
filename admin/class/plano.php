<?php

require_once('conexao.php');

class planoClass{

public  $idPlano; 
 public  $nomePlano;
 public  $monitor; 
 public  $configMonitor; 
 public  $teclado; 
 public  $configTeclado; 
 public  $mouse;
 public  $configMouse;
 public  $cpu;
 public $configcpu;
 public $quantidadeMin;
 public $quantidadeMax;
 public $statusPlano;

 public function __construct($id = false)
 {

     if ($id) {

         $this->idPlano = $id;
         $this->Carregar();
     }
 }

 public function Listar()
 {
     $sql = "SELECT * FROM tblplano WHERE statusPlano ='ATIVO' ORDER BY nomePlano ASC;";
     $conn = Conexao::LigarConexao();
         $resultado = $conn->query($sql);
         $lista = $resultado->fetchAll();
         return $lista;
 }

 public function Cadastrar()
 {
    $query = "
    INSERT INTO tblplano( 
        nomePlano,
        monitor, 
        configMonitor,
        teclado,
        configTeclado,
        mouse, 
        configMouse,
        cpu, 
        configcpu,
        quantidadeMin, 
        quantidadeMax, 
        statusPlano) 
    VALUES (
                 '".$this-> nomePlano."', 
                 '".$this-> monitor."', 
                 '".$this-> configMonitor."', 
                 '".$this-> teclado."', 
                 '".$this-> configTeclado."', 
                 '".$this-> mouse."', 
                 '".$this-> configMouse."', 
                 '".$this-> cpu."', 
                 '".$this-> configcpu."', 
                 '".$this-> quantidadeMin."', 
                 '".$this-> quantidadeMax."', 
                 '".$this-> statusPlano."' );
    ";
        
     $conn = Conexao::LigarConexao(); 
     $conn->exec($query);
    
    echo " <script>document.location='index.php?p=plano&plano'</script>";
 }

 public function Carregar()
{
    $query = "SELECT * FROM tblplano WHERE idPlano = '".$this->idPlano."';";
    
   
    $conn = Conexao::LigarConexao();  
    
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
       $this->nomePlano             = $linha['nomePlano'];
        $this->monitor              = $linha['monitor'];
        $this->configMonitor        = $linha['configMonitor'];
        $this->teclado              = $linha['teclado'];
        $this->configTeclado        = $linha['configTeclado'];
        $this->mouse                = $linha['mouse'];
        $this->configMouse          = $linha['configMouse'];
        $this->cpu                  = $linha['cpu'];
        $this->configcpu            = $linha['configcpu'];
        $this->quantidadeMin       = $linha['quantidadeMin'];
        $this->quantidadeMax       = $linha['quantidadeMax'];
        $this->statusPlano       = $linha['statusPlano'];
        
    }
}


}
