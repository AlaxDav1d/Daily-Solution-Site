<?php
    require_once('../../Configuracao/Conexao.php');
    require_once('../../Model/ReceitaModel.php');
    //entrada
    $json = file_get_contents('php://input');
    $reqbody = json_decode($json);

     $titulo = $reqbody->titulo;
     $ingre1 = $reqbody->ingre1;
     $ingre2 = $reqbody->ingre2;
     $ingre3 = $reqbody->ingre3;
     $ingre4 = $reqbody->ingre4;
     $ingre5 = $reqbody->ingre5;
     $ingre6 = $reqbody->ingre6;
     $ingre7 = $reqbody->ingre7;
     $ingre8 = $reqbody->ingre8;
     $ingre9 = $reqbody->ingre9;
     $ingre10 = $reqbody->ingre10;
     $como = $reqbody->como;

    //processamento
    $conexao = new Conexao();
    $db = $conexao->abrirConexao();
    $receitaModel = new ReceitaModel($db) ;

     $receitaModel->titulo = $titulo;
     $receitaModel->ingre1Model = $ingre1;
     $receitaModel->ingre2Model = $ingre2;
     $receitaModel->ingre3Model = $ingre3;
     $receitaModel->ingre4Model = $ingre4;
     $receitaModel->ingre5Model = $ingre5;
     $receitaModel->ingre6Model = $ingre6;
     $receitaModel->ingre7Model = $ingre7;
     $receitaModel->ingre8Model = $ingre8;
     $receitaModel->ingre9Model = $ingre9;
     $receitaModel->ingre10Model = $ingre10;
     $receitaModel->comoFazer = $como;

     
    $retorno = $receitaModel->cadastraReceita();    
    //saída
    echo json_encode($retorno);

?>