<?php 

require_once('../../Configuracao/Conexao.php');
require_once('../../Model/UsuarioModel.php');

$conexao = new Conexao();
$db = $conexao->abrirConexao();

$usuarioModel = new UsuarioModel($db);
$dados = $usuarioModel->retornarId();

echo json_encode($dados);?>   