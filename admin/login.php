<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelers Login</title>

    <link rel="stylesheet" href="../css/reset.css">

    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <link rel="stylesheet" href="css/lity.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--NOSSO ESTILO È SEMPRE O ULTIMO-->

    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/responsive.css">
    </head>
    <body>
    <section class="contente">
        <div class="formulImg">
            <h1><span>Travelers</span>Company</h1>
        </div>
        <div class="formularLogin">
            <h2>
                Meu <span>Login </span> 
                Tenha sua empresa com um <span>clique</span>
            </h2>

            <form id="loginForm" onsubmit="carregarLoginAdmin(); return false;">

            <div class="form-group col-md-6">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Informe seu E-mail" required>
            </div>

            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" class="form-control2" id="password" name="password" placeholder="Informe sua Senha" required>
            </div>

            <!-- BTN COM O TIPO SUBMIT QUE IRÁ SUBMETER O FORMULÁRIO -->
            <button type="submit">Área de Login</button>

            <div class="msgLogin"></div>
            </form>

           
        </div>
    </section>
    <!--Começo da biblioteca /-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
    <script src="../javaS/login.js"></script>
</body>
</html>