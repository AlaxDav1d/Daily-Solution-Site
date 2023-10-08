<?php
    class UsuarioModel{
        public $db = null;
        public  $id = 0;
        public $nomeCompletoModel = null;
        public $dataNascimentoModel = null;
        public $emailModel = null;
        public $senhaModel = null;
        public $telefoneModel = null;
        public $generoModel = null;
        public $metaModel = null;
        
        public function __construct($conexaoBanco){
            $this ->db = $conexaoBanco;
        }
         public function cadastrar(){
            $retorno = ['status' => 0,'dados' => null];
            try{
                $query = $this->db->prepare(' INSERT INTO usuarios(nome_completo,email,nasc,senha,sexo,foco,telefone) 
                VALUES (:nome,:email,:dataNasc,:senha,:sexo,:foco,:telefone)');

                $query->bindValue(':nome',$this->nomeCompletoModel);
                $query->bindValue(':dataNasc',$this->dataNascimentoModel);
                $query->bindValue(':email',$this->emailModel);
                $query->bindValue(':senha',$this->senhaModel);
                $query->bindValue(':telefone',$this->telefoneModel);
                $query->bindValue(':sexo',$this->generoModel);
                $query->bindValue(':foco',$this->metaModel);

                $query->execute();
                $dado = $query->fetch();
          
                $retorno['status'] = 1;
                $retorno['dados'] = $dado;
        
            }
            catch(PDOException $e){
                echo 'erro ao cadastrar usuario Model'.$e->getMessage();
            }
            return $retorno;
        }
        public function logar() {

            $retorno = ['status' => 0, 'dados' => null];
    
            try {
                $stmt = $this->db->prepare('
                SELECT id, email FROM usuarios
                WHERE email = :email
                AND senha = :senha
                LIMIT 1
                
                ');
                $stmt->bindValue(':email', $this->emailModel);
                $stmt->bindValue(':senha', $this->senhaModel);
                $stmt->execute();
                $dado = $stmt->fetch();
    
                if ($dado['id'] && $dado['id'] > 0) {
                    $retorno['status'] = 1;
                    $retorno['dados'] = $dado['id'];

                    session_start();
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dado['id'];
                    $_SESSION['usuario'] = $dado['email'];
                }else{
                    $retorno['status'] = 2;
                }
            }
            catch(PDOException $ex) {
                echo 'Erro ao logar: '.$ex->getMessage();
            }
            return $retorno;
        }
        public function nomePeloID(){
            $retorno = ['status' =>0,'dados' => null];

            try{
                $query = $this->db->prepare('SELECT nome_completo FROM usuarios where id = :id ');
                
                $query->bindValue(':id',$this->id);
                $query->execute();
                $dados1 = $query->fetch();
                $dados = $dados1['nome_completo'];
                $retorno['status'] = 1;
                $retorno['dados'] = $dados;
                
            }catch(PDOException $e){
                echo 'Erro ao listar Usuario pelo ID'.$e->getMessage();
                
            }
            return $retorno;
        }
        public function confEmailTel(){
            $retorno = ['status' => 0,'dados' => null];
            try{

                $query = $this->db->prepare('SELECT count(email) as linha FROM usuarios where email = :email');
                
                $query->bindValue(':email',$this->emailModel);
                $query->execute();
                $mostrar = $query->fetch();
                $linha = $mostrar['linha'];
                if($linha > 0){
                    $retorno['status'] = 2;
                    $retorno['dados'] = $linha;
                }else{
                    $retorno['status'] = 1;
                    $retorno['dados'] = $linha;
                }
                
            }catch(PDOException $e){
                echo 'erro ao retornar telefone e/ou email'.$e->getMessage();
            }
            return $retorno;
        }
    }
