<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DAHSBORD </title>
        <link rel="stylesheet" href="css/reset.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
       
        <link rel="stylesheet" href="../css/home.css">
    </head>

<body>

<header>

<section class="cabecaCad">
    <div class="logoCad">
        <img src="../img/logo.svg" alt="">
    </div>

    <div class="loginCad">
        <img src="../img/imgIcon/login80ico.png" alt="">
        <h3>NOME</h3>
    </div>

</section>

<section>
    <h1>DESHBORD</h1>
</section>

</header>

<main>
<section class="blocoCad">
          <section class="conteudoCad">
                <div>
                    <ul>
                        <li><a href="index.php?p=dashboard" class="<?php echo (@$_GET['p'] == 'dashboard') ? 'menuAtivo' : ''; ?>">DASHBOARD</a></li>
                        <li><a href="index.php?p=relatorio" class="<?php echo (@$_GET['p'] == 'relatorio') ? 'menuAtivo' : ''; ?>">RELATÓRIO</a></li>
                        <li><a href="index.php?p=funcionario" class="<?php echo (@$_GET['p'] == 'funcionario') ? 'menuAtivo' : ''; ?>">FUNCIONARIO</a></li>
                        <li><a href="index.php?p=cliente" class="<?php echo (@$_GET['p'] == 'cliente') ? 'menuAtivo' : ''; ?>">CLIENTE</a></li>
                        <li><a href="index.php?p=aluguel" class="<?php echo (@$_GET['p'] == 'aluguel') ? 'menuAtivo' : ''; ?>">ALUGUEL</a></li>
                        <li><a href="index.php?p=estoque" class="<?php echo (@$_GET['p'] == 'estoque') ? 'menuAtivo' : ''; ?>">ESTOQUE</a></li>
                        <li><a href="index.php?p=plano" class="<?php echo (@$_GET['p'] == 'plano') ? 'menuAtivo' : ''; ?>">PLANOS</a></li>  
                        <li><a href="index.php?p=pagamentos" class="<?php echo (@$_GET['p'] == 'pagamento') ? 'menuAtivo' : ''; ?>">PAGAMENTO</a></li>
                        <li><a href="index.php?p=ajuda" class="<?php echo (@$_GET['p'] == 'ajuda') ? 'menuAtivo' : ''; ?>">AJUDA E SUPORTE</a></li>
                    </ul>
                </div>
            </section>

            <section class="BOX">

                <div class="box">
                    <!--echo  '<h2>'.$pagina. '<h2>';-->
                    <?php

                    $pagina = @$_GET['p'];

                    switch ($pagina) {

                        case 'dashboard':
                            echo 'Página DASHBOARD ';
                            break;

                        case 'relatorio':
                            require_once('relatorio/relatorio.php');
                            break;



                        case 'funcionario':
                            require_once('funcionario/funcionario.php');
                            break;


                        case 'cliente':
                            require_once('cliente/cliente.php');
                            break;

                            
                        case 'aluguel':
                            require_once('aluguel/aluguel.php');
                            break;

                            case 'estoque':
                                require_once('estoque/estoque.php');
                                break;
    
                            
                        case 'plano':
                            require_once('plano/plano.php');
                                break;
                    

                        case 'pagamentos':
                            echo 'Página pagamentos';
                            break;

                            case 'ajuda':
                                echo 'Página pagamentos';
                                break;
    
                        default:
                            echo 'PG DASHBOARD';
                            break;
                    }

                    ?>

                </div>

            </section>
</main>

<!---<footer>
<div >

<div class="rodape">


    <ul>
        <li><a href="https://www.linkedin.com/in/isabella-da-silva-rodrigues-b825a9209/" >Isabella
                Rodrigues</a></li>

    </ul>
</div>

</div>
</footer>
                -->
</body>
</html>