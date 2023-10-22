
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
      public function retornaId(){
            $retorno = ['status'=> 0,'dados'=> null];
            try{
                $varNova = $this->nomeCompletoModel;

                $dados =  $this->db->prepare("SELECT id FROM usuarios WHERE  nome_completo ='$varNova' ");
                $dados->execute();
                $volta = $dados->fetch();
                 
                $retorno['status'] = 1;
                $retorno['dados'] = $volta;


            }catch(PDOException $e){
                echo 'listar I'.$e->getMessage();
            }
            return $retorno;
        }
        public function logar() {

            $retorno = ['status' => 0, 'dados' => null];
    
            try {
                $stmt = $this->db->prepare('
                SELECT id, email,foco,senha FROM usuarios
                WHERE email = :email
                LIMIT 1
                ');
                $stmt->bindValue(':email', $this->emailModel);

                $stmt->execute();
                $dado = $stmt->fetch();
                $sal = $this->senhaModel;
                if ($dado['senha'] == $sal) {
                    $retorno['status'] = 1;
                    $retorno['dados'] = $dado['id'];
                    $retorno['sla'] = $dado['email'];
                    $retorno['meta'] = $dado['foco'];
                    $retorno['senha'] = $dado['senha'];
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
            $retorno = ['status' =>0,'dados' => null,'meta' => null];

            try{
                $query = $this->db->prepare('SELECT nome_completo,foco FROM usuarios where id = :id ');
                
                $query->bindValue(':id',$this->id);
                $query->execute();
                $dados1 = $query->fetch();
                $dados = $dados1['nome_completo'];
                $meta = $dados1['foco'];
                $retorno['status'] = 1;
                $retorno['dados'] = $dados;
                $retorno['meta'] = $meta;
                
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
