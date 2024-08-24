<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>travelers</title>

    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/lity.min.css">

   


    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

        <?php require_once('conteudo/cabecalho.php'); ?>

    <main>

        <?php require_once('conteudo/banner.php'); ?>
       

       <?php require_once('conteudo/quemsomos.php')?>


       <?php require_once('conteudo/galeria.php')?>

       <?php require_once('conteudo/aluguel.php')?>


    </main>

    <aside>

    <?php require_once('conteudo/blocoWeb.php')?>   

    </aside>


    <footer>
      
    <?php require_once('conteudo/footer.php')?> 

    </footer>

    <!--Começo da biblioteca /-->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

    <!--Configurações especificas da biblioteca-->
    <script src="javaS/slick.min.js"></script>

    <script src="javaS/lity.min.js"></script>

    <!--Configurações especificas da biblioteca javaScript bootstrap-->
    

    <!--Pasta raiz-->
    <script src="javaS/script.js"></script>


</body>

</html>