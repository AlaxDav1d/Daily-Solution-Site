<?php
    class ReceitaModel{
      public $db = null;
      public $titulo = null;

      public $ingre1Model = null; 
      public $ingre2Model = null; 
      public $ingre3Model = null; 
      public $ingre4Model = null; 
      public $ingre5Model = null; 
      public $ingre6Model = null; 
      public $ingre7Model = null; 
      public $ingre8Model = null; 
      public $ingre9Model = null; 
      public $ingre10Model = null; 
      public $comoFazer = null;
      public $pesquisa = null;
      public function __construct($conexaoBanco){
          $this ->db = $conexaoBanco;
      }
      public function retornaPesquisa(){
            $retorno = ['status'=> 0,'dados' => null];
            try{
                $consulta = $this ->db -> prepare('SELECT titulo,ingr1,ingr2,ingr3,ingr4,ingr5,ingr6,ingr7,ingr8,ingr9,ingr10,comoFazer FROM receitas WHERE titulo = :pesquisa');
                $consulta->bindValue(':pesquisa',$this->pesquisa);
                $consulta->execute();
                $dados = $consulta->fetch();
                $retorno['status'] = 0;
                $retorno['dados'] = $dados;
            
            }catch(Exception $e){
               echo 'Pesquisa não retornou'.$e->getMessage();
            }
            return $retorno;
      }
      public function cadastraReceita(){
        $retorno = ['status'=> 0,'dados' => null];
        try{
            $consulta = $this ->db -> prepare('insert into receitas(titulo,ingr1,ingr2,ingr3,ingr4,ingr5,ingr6,ingr7,ingr8,ingr9,ingr10,comoFazer) values (:titulo,:ingr1,:ingr2,:ingr3,:ingr4,:ingr5,:ingr6,:ingr7,:ingr8,:ingr9,:ingr10,:fazer) ');
            $consulta->bindValue(':titulo',$this->titulo);
            $consulta->bindValue(':ingr1',$this->ingre1Model);
            $consulta->bindValue(':ingr2',$this->ingre2Model);
            $consulta->bindValue(':ingr3',$this->ingre3Model);
            $consulta->bindValue(':ingr4',$this->ingre4Model);
            $consulta->bindValue(':ingr5',$this->ingre5Model);
            $consulta->bindValue(':ingr6',$this->ingre6Model);
            $consulta->bindValue(':ingr7',$this->ingre7Model);
            $consulta->bindValue(':ingr8',$this->ingre8Model);
            $consulta->bindValue(':ingr9',$this->ingre9Model);
            $consulta->bindValue(':ingr10',$this->ingre10Model);
            $consulta->bindValue(':fazer',$this->comoFazer);

            $consulta->execute();
            $retorno['status'] = 1;
        }catch(Exception $e){
            echo 'Erro Ao Cadastrar Receita'.$e->getMessage();
        }
        return $retorno;
      }
    }
?>