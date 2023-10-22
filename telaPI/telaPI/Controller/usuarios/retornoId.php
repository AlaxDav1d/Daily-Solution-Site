<?php
    require_once('../../Configuracao/Conexao.php');
    require_once('../../Model/UsuarioModel.php');
    //entrada
    $json = file_get_contents('php://input');
    $reqbody = json_decode($json);

    $nome = $reqbody->nome;
    //processamento
    $conexao = new Conexao();
    $db = $conexao->abrirConexao();
    $usuarioModel = new UsuarioModel($db);

    $usuarioModel->nomeCompletoModel = $nome;
     
    $retorno = $usuarioModel->retornaId();    
    //saída
    echo json_encode($retorno);

?>