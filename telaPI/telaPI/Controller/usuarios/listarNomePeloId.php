<?php
    require_once('../../Configuracao/Conexao.php');
    require_once('../../Model/UsuarioModel.php');

    $json = file_get_contents('php://input');
    $reqbody = json_decode($json);
    $id = $reqbody->idT;

    $conexao = new Conexao();
    $db = $conexao->abrirConexao();
    $usuarioModel = new UsuarioModel($db);

    $usuarioModel->id = $id;
    $retorno = $usuarioModel->nomePeloID();

    echo json_encode($retorno);
?>