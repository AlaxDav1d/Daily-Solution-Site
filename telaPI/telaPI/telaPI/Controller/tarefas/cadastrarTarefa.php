<?php
      require_once('../../Configuracao/Conexao.php');
      require_once('../../Model/TarefaModel.php');
      //entrada
      $json = file_get_contents('php://input');    
      $reqbody = json_decode($json);
      $titulo = $reqbody->titulo;
      $descricao = $reqbody->descricao;
      $inicio = $reqbody->inicio;
      $termino = $reqbody->termino;
      $foreign = $reqbody->idUsuario;

      $conexao = new Conexao();
      $db = $conexao->abrirConexao();
      $tarefaModel = new TarefaModel($db);
    
      $tarefaModel->titulo=$titulo;
      $tarefaModel->desc=$descricao;
      $tarefaModel->inicio=$inicio;
      $tarefaModel->termino=$termino;
      $tarefaModel->idUsuario=$foreign;

      $dados = $tarefaModel->cadastrarTarefa();

      echo json_encode($dados);
    
?>