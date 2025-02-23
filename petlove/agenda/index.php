<?php
//Exibir o header
include_once 'static/header.php';

// Aciona controlador

//Obter o controle e açao
$control = $_GET['control'] ?? 'index';
$action =$_GET['action'] ?? 'listar';

$controlClass = ucfirst($control) . 'Control';

function loadControl{
    $file =__DIR__ .'/app/' .$control .'/' . $controlClass .'.php';
    if (file exists($file)) {
        include_once $file;
    } else {
        echo "Arquivo do controlador não encontrado.";
        exit;
}
    }

    loadControl ($control,$controlClass);
    if (class exists($controlClass)) {
        //Passa os parametros (Post e Get)

        $params =array merge($_POST, $_GET)

        //EXECUTA A AÇAO
        $controller->handRequest($action,$params);
    }


//Exibir o footer
include_once 'static/footer.php';