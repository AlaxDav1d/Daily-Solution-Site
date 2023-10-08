<?php
    require_once('../../Configuracao/Conexao.php');
    require_once('../../Model/UsuarioModel.php');
    //entrada
    $json = file_get_contents('php://input');
    $reqbody = json_decode($json);

    $email = $reqbody->email;
    //processamento
    $conexao = new Conexao();
    $db = $conexao->abrirConexao();
    $usuarioModel = new UsuarioModel($db);

    $usuarioModel->emailModel = $email;
     
    $retorno = $usuarioModel->confEmailTel();    
    //saída
    echo json_encode($retorno);

?>