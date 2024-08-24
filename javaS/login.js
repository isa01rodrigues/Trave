 //AREA LOGiN

 function carregarLoginAdmin() {
    //USANDO O JQUERY
    $("#loginForm").click(function(){
      //CRIAÇÃO DA FUNÇÃO CARREGAR LOGIN QUE IRA SUBIR UMA MESNAGM AO CLICKAR NOO BOTÃO
      alert('Login bem-sucedido! Redirecionando...');
  
      
      var formData = $('#loginForm').serialize();
  
      //ENVIAR A SOLICITAÇÃO - CLASSE FUNCIONARIO 
      $.ajax({
        url: '../admin/class/funcionario.php',        //qual caminho a url irá fazer até chegar na classe
        method: 'POST',                           //qual método está sendo utilizado no form
        data: formData,                          //de onde as informações estão vindo 
        dataType: 'json',                       //tipo de dados esperado na resposta
        success: function(data){               //data nome padrão
         if(data.success)
         {
           //Bem Sucedido caminho onde receberá a informação
           $('#msgLogin').html( '<div class="msgSuccess">'+ data.message+'</div>');
  
           var idFuncionario = data.idFuncionario; //FAZ REFERÊNCIA COM O BANCO DE DADOS
           window.location.href = 'http://localhost/projeto_trave/admin/index.php?p=dashboard'; // DIRECIONA PARA O DASHBOARD
         }
         else{
          //LOGIN INVÁLIDO
          $('#msgLogin').html( '<div class="msgInvalido">'+ data.message+'</div>');
         }
        },
        //TRÁS AS INFORMAÇÕES DO PRÓPRIO NAVEGADOR
        error: function(xhr, status, error){
          console.log(error);
        }
      });
    });
  }
  
  
  
  
    