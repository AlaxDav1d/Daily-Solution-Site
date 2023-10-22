<?php
    require_once('../../Configuracao/Conexao.php');
    require_once('../../Model/ReceitaModel.php');
    //entrada
    $json = file_get_contents('php://input');
    $reqbody = json_decode($json);

    $pesquisa = $reqbody->pesquisa;
    //processamento
    $conexao = new Conexao();
    $db = $conexao->abrirConexao();
    $receitaModel = new ReceitaModel($db) ;

    $receitaModel->pesquisa = $pesquisa;
     
    $retorno = $receitaModel->retornaPesquisa();    
    //saída
    echo json_encode($retorno);

?>