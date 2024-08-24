<h2 class ="h2">Pagina Aluguel</h2>
<?php

$pagina = @$_GET['a'];

//echo "Estou na página do instrutor";

if ($pagina == NULL) {
    require_once('listar.php');
} else {
    if ($pagina == 'cadastrar') {
        require_once('cadastrar.php');
    }
    if ($pagina == 'atualizar') {
        require_once('atualizar.php');
    }
    if ($pagina == 'desativar') {
        require_once('desativar.php');
    }
}