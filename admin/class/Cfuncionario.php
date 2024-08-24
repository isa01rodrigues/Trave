<?php
//responsavel de fazer a conexão com o banco de dados
require_once('conexao.php');

//ATRIBUINDO A CLASSE 
class funcionarioClass{
    public $idFuncionario; 
    public $nomeFuncionario;

    public $dataNascFuncionario;	
    public $cpfFuncionario;	
    public $emailFuncionario;	
    public $senhaFuncionario;	
    public $telefoneFuncionario;	
    public $funcaoFuncionario;	
    public $acessoFuncionario;	
    public $dataAdminFuncionario;	
    public $fotoFuncionario;	
    public $statusFuncionario;


 //METODO DA CLASS

    // Construindo um metodo que ira carregar as informações do banco de dados   //funcionando como uma ponte 
    public function __construct($id = false)
    {
 
        if ($id) {
 
            $this->idFuncionario = $id;
            $this->Carregar();
        }
    }
    
//LISTAR
public function Listar()
{
    $sql = "SELECT * FROM tblfuncionario WHERE statusFuncionario ='ATIVO' ORDER BY nomeFuncionario ASC;";
    $conn = Conexao::LigarConexao();
        $resultado = $conn->query($sql);
        $lista = $resultado->fetchAll();
        return $lista;
}

 //CADASTRAR
 public function Cadastrar()
 {
     $query = "INSERT INTO `tblfuncionario`(
         nomeFuncionario, 
         dataNascFuncionario, 
         cpfFuncionario, 
         emailFuncionario,
         senhaFuncionario,
         telefoneFuncionario,
         funcaoFuncionario, 
         acessoFuncionario, 
         dataAdminFuncionario, 
         fotoFuncionario,
         statusFuncionario
     ) VALUES (
         '".$this->nomeFuncionario."',
         '".$this->dataNascFuncionario."',
         '".$this->cpfFuncionario."',
         '".$this->emailFuncionario."',
         '".$this->senhaFuncionario."',
         '".$this->telefoneFuncionario."',
         '".$this->funcaoFuncionario."',
         '".$this->acessoFuncionario."',
         '".$this->dataAdminFuncionario."',
         '".$this->fotoFuncionario."',
         '".$this->statusFuncionario."'
     )";
         
     $conn = Conexao::LigarConexao(); 
     $conn->exec($query);
     
     echo "<script>document.location='index.php?p=funcionario&'</script>";
 }
 
//SEÇÃO RESPONSAVEL DE PASSAR AS INFORMAÇÕES DO BANCO DE DADOS

public function Carregar(){
    $query = "SELECT * FROM tblfuncionario WHERE idFuncionario = '".$this->idFuncionario."'";
    
   
    $conn = Conexao::LigarConexao();  
    
    $resultado = $conn->query($query);
    $lista = $resultado->fetchAll();

    foreach($lista as $linha){
       $this->nomeFuncionario              = $linha['nomeFuncionario'];
        $this->dataNascFuncionario         = $linha['dataNascFuncionario'];
        $this->cpfFuncionario              = $linha['cpfFuncionario'];
        $this->emailFuncionario            = $linha['emailFuncionario'];
        $this-> senhaFuncionario            = $linha['senhaFuncionario'];
        $this->telefoneFuncionario         = $linha['telefoneFuncionario'];
        $this->funcaoFuncionario           = $linha['funcaoFuncionario'];
        $this->acessoFuncionario           = $linha['acessoFuncionario'];
        $this->dataAdminFuncionario        = $linha['dataAdminFuncionario'];
        $this->fotoFuncionario             = $linha['fotoFuncionario'];
        $this->statusFuncionario           = $linha['statusFuncionario'];
    }
}

public function Atualizar() {
    $query = "UPDATE `tblfuncionario` SET nomeFuncionario = '".$this->nomeFuncionario."',
    dataNascFuncionario= '".$this->dataNascFuncionario."',
    cpfFuncionario= '".$this->cpfFuncionario."',
    emailFuncionario= '".$this->emailFuncionario."',
    senhaFuncionario= '".$this->senhaFuncionario."',
    telefoneFuncionario= '".$this->telefoneFuncionario."',
    funcaoFuncionario= '".$this->funcaoFuncionario."',
    acessoFuncionario= '".$this->acessoFuncionario."',
    dataAdminFuncionario= '".$this->dataAdminFuncionario."',
    fotoFuncionario= '".$this->fotoFuncionario."',
    statusFuncionario= '".$this->statusFuncionario."'
    WHERE idFuncionario = '".$this->idFuncionario."'; "; 

        $conn = Conexao::LigarConexao(); 
    $result = $conn->exec($query);
    if ($result === false) {
        // Handle query execution failure
        echo "Error executing query: " . $conn->errorInfo()[2];
    } else {
        // Query executed successfully
        echo "<script>document.location='index.php?p=funcionario'</script>";
    }
}

///DESATIVAR    
public function desativar(){
    $sql = "UPDATE tblfuncionario SET statusFuncionario = 'Desativado' WHERE idFuncionario = '" .$this->idFuncionario."';";
    $conn = Conexao::LigarConexao();
    $conn->exec($sql);

    echo " <script>document.location='index.php?p=aluno'</script>";

}


public function verificarLogin() 
{
    $sql = "SELECT * FROM tblfuncionario WHERE emailFuncionario = '".$this->emailFuncionario."' AND senhaFuncionario = '".$this->senhaFuncionario."';";   

    $conn = Conexao::LigarConexao();       
    $resultado = $conn->query($sql);         
    $funcionarios = $resultado->fetch();         

    if($funcionarios) {
        return $funcionarios['idFuncionario'];
    } else {
        return false;
    }
}



}//Fim da Classe 


if(isset($_POST['email'])) 
{
// Instancia um novo objeto da classe InstrutorClass para manipular operações relacionadas aos instrutores
$funcionarios = new  funcionarioClass();

 // Extrai o valor do campo 'email'e'password' enviado pelo formulário e o armazena na variável $emailLogin
$emailLogin = $_POST['email'];
$senhaLogin = $_POST['password'];

// Define os valores do email e senha no objeto $funcionarios para  verificação
$funcionarios->emailFuncionario = $emailLogin;
$funcionarios->senhaFuncionario = $senhaLogin;

// Chama o método verificarLogin() para vereficação
if($idFuncionario = $funcionarios->verificarLogin()) {
    session_start();
     // Armazena o ID do funcionário na variável de sessão $_SESSION['idFuncionario']
    $_SESSION['idFuncionario'] = $idFuncionario;
    echo json_encode(['success' => true, 'message' => 'Login realizado com sucesso', 'idFuncionario' => $idFuncionario]);
} else {
    echo json_encode(['success' => false, 'message' => 'Login não realizado. Email ou senha inválidos']);
}
}

