<h2>Página Desativar</h2>
<?php
require_once('class/clienteClass.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $clientes = new clienteClass();
    $clientes->idCliente = $id;
    $clientes->desativar();
}

