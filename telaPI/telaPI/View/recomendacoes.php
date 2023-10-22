<?php
         $id = $_GET['id'];
         $meta = $_GET['meta'];
         $nome = $_GET['nome'];  
?>
<!DOCTYPE html>
    <html lang="pt-br"> 

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Principal</title>
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/recomendacoes.css">
        <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>
        <header>
            <div class="topo">
            <input type="hidden" id="metaTxt" value='<?php echo $meta ?>'>
            <input type="hidden" id="idTxt" value='<?php echo $id ?>'>
            <input type="hidden" id="nomeTxt" value='<?php echo $nome ?>'>

                <button id="logoBtn"><img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" alt="logo Daily Solution"></button>
              <div class="menu">
                <button id="bemestar" class="botao">Saúde</button>
                <button id="alimento" class="botao">Alimento</button>
                <button id="exercicio" class="botao">Exercício</button>
            </div>
              <div class="nomeUser">
                    <h2 id="ola" style="color:#1FBF05">Bem Vindo</h2>
                    <p id="user"></p>   
              </div>
            </div>
        </header>



    <div class="treino">
            
    
        <div class="treino-a">
            <h1>Recomendações</h1>
        </div>
    </div>

    <div class="container-imagens">

       <!-- bloco de cima -->
        <div class="bloco-top">
            <div class="bloco-top-quadrado1">
                <img src="./img/salada.jpg" alt="" width="100%">
            </div>

            <div class="bloco-top-quadrado1">
                <img src="./img/proteina.jpg" alt="" width="100%">
            </div>

            <div class="bloco-top-quadrado1">
                <img src="./img/frutas.jpg" alt=""width="100%">
            </div>

            <div class="bloco-top-quadrado1">
                <img src="./img/massa.jpg" alt=""width="100%">
            </div>

        </div>
    </div>

    <div class="container-input">
        <div class="input">
            <input type="text" placeholder="Digite a Receita" autofocus id="pesquisaTxt">
            <button id="subLupa"><img src="./img/lupa.png" alt="pesquisar" width="8%"></button>
        </div>
    </div>

    <div class="container-api">
        <div class="api" id="api" >
            <h2 id="tituloReceita">Titulo da Receita</h2>

                <div class="ingredientes"  id="ingredientes" >
                    <h3>Ingredientes:</h3>
                    <p id="ingr1" >Digite</p>
                    <p id="ingr2" >Algo</p>
                    <p id="ingr3" >No</p>
                    <p id="ingr4" >campo</p>
                    <p id="ingr5" >Acima</p>
                    <p id="ingr6" >Para </p>
                    <p id="ingr7" >Ver</p>
                    <p id="ingr8" >Algumas</p>
                    <p id="ingr9" >De Nossas </p>
                    <p id="ingr10" >Receitas</p>
                </div>
                <div class="comoFazer" id="comoFazer" >
                    <h3>Como Fazer:</h3>
                    <p id="fazer">
                        Insira o nome de alguma receita no campo acima e veja como fazer aqui
                    </p>
                </div>
        </div>
    </div>
    <div class="blocoReceitas">
        <div class="cadastroReceita">
            <h3>Cadastre aqui uma receita que voce deseja mostrar a outras pessoas!!</h3>
            <span class="title">Titulo da Receita:</span>
            <input type="text" name="Titulo" id="tituloTxt">
            <p class="aviso">Aviso!!Não é necessário preencher todos os campos apenas o modo de fazer e o titulo</p>
            <div class="inputs">
                <div class="labels">
                    <span>Ingrediente 1:</span>
                    <input type="text" name="" id="ingrediente1" placeholder="Digite o 1° ingrediente">
                </div>
                <div class="labels">
                    <span>Ingrediente 2:</span>
                    <input type="text" name="" id="ingrediente2" placeholder="Digite o 2° ingrediente">
                </div>
                <div class="labels">
                    <span>Ingrediente 3:</span>
                    <input type="text" name="" id="ingrediente3" placeholder="Digite o 3° ingrediente">
                </div>
            </div>
            <div class="inputs">
                <div class="labels">
                    <span>Ingrediente 4:</span>
                    <input type="text" name="" id="ingrediente4" placeholder="Digite o 4° ingrediente">
                </div>
                <div class="labels">
                    <span>Ingrediente 5:</span>
                    <input type="text" name="" id="ingrediente5" placeholder="Digite o 5° ingrediente">
                </div>
                <div class="labels">
                    <span>Ingrediente 6:</span>
                    <input type="text" name="" id="ingrediente6" placeholder="Digite o 6° ingrediente">
                </div>
            </div>
            <div class="inputs">
                <div class="labels">
                    <span>Ingrediente 7:</span>
                    <input type="text" name="" id="ingrediente7" placeholder="Digite o 7° ingrediente">
                </div>
                <div class="labels">
                    <span>Ingrediente 8:</span>
                    <input type="text" name="" id="ingrediente8" placeholder="Digite o 8° ingrediente">
                </div>
                <div class="labels">
                    <span>Ingrediente 9:</span>
                    <input type="text" name="" id="ingrediente9" placeholder="Digite o 9° ingrediente">
                </div>
            </div>
            <div class="inputs">
                
                <div class="labels">
                    <span>Ingrediente 10:</span>
                    <input type="text" name="" id="ingrediente10" placeholder="Digite o 10° ingrediente">
                </div>
            
                
            </div>
            
            <span>Como Fazer:</span>
            <textarea name="" id="howToDo" cols="50" rows="10"></textarea>
            <button id="salvarBtn" >Salvar Receita</button>
        </div>
    </div>

    <footer>Daily Solution © 2023 - Todos os Direitos Reservados</footer>

</body>    
    <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
    <script src="../js/userName.js "></script>
    <script type="text/javascript">
        $('#salvarBtn').on('click',async function(){

            const title = $('#tituloTxt').val();

const in1 = $('#ingrediente1').val();
const in2 = $('#ingrediente2').val();
const in3 = $('#ingrediente3').val();
const in4 = $('#ingrediente4').val();
const in5 = $('#ingrediente5').val();
const in6 = $('#ingrediente6').val();
const in7 = $('#ingrediente7').val();
const in8 = $('#ingrediente8').val();
const in9 = $('#ingrediente9').val();
const in10 = $('#ingrediente10').val();

const como = $('#howToDo').val();

const config={method:'post',headers:{ 'Accept': 'application/json', 'Content-Type' : 'application/json'},
body:JSON.stringify({
    titulo:title,
    ingre1:in1,
    ingre2:in2,
    ingre3:in3,
    ingre4:in4,
    ingre5:in5,
    ingre6:in6,
    ingre7:in7,
    ingre8:in8,
    ingre9:in9,
    ingre10:in10,
    como:como
})}
const enviar = await fetch('../Controller/receitas/cadastrarReceita.php',config);
const recebido =await enviar.json();
alert(recebido.status);
        })
        //BLOCO QUE RECEBE AS INFORMAÇÕES E ENVIA PARA CONFIG
   


    </script>
    <script type="text/javascript" >



     $(document).ready(async function(){await exibeNome()})
        $('#subLupa').on('click',async function(){
            var ingr1 = document.getElementById('ingr1');
            var ingr2 = document.getElementById('ingr2');
            var ingr3 = document.getElementById('ingr3');
            var ingr4 = document.getElementById('ingr4');
            var ingr5 = document.getElementById('ingr5');
            var ingr6 = document.getElementById('ingr6');
            var ingr7 = document.getElementById('ingr7');
            var ingr8 = document.getElementById('ingr8');
            var ingr9 = document.getElementById('ingr9');
            var ingr10 = document.getElementById('ingr10');
            
            var pesquisa = $('#pesquisaTxt').val();
            var titulo =document.getElementById('tituloReceita');
            var fazer =document.getElementById('fazer');
            alert(pesquisa);
            //INICIO DA CONFIG;
            const config={method:'post',headers:{ 'Accept': 'application/json', 'Content-Type' : 'application/json'},body:JSON.stringify({pesquisa:pesquisa})}
            //FIM DA CONFIG;

            const enviado =await fetch('../Controller/receitas/recebePesquisa.php',config);
            const retorno =await enviado.json();
            console.log(retorno.dados.ingr1);
            var divIngre = document.getElementById('ingredientes');
            var divFazer = document.getElementById('comoFazer');
            if(retorno.dados.titulo == undefined){
                titulo.innerHTML = 'Receita não encontrada';
                divIngre.style.display = 'none';
                divFazer.style.display = 'none';
            }else{

            divIngre.style.display = 'block';
            divFazer.style.display = 'block';
            //BLOCO que insere o valor dos ingredientes
            ingr1.innerHTML =  retorno.dados.ingr1;
            ingr2.innerHTML =  retorno.dados.ingr2;
            ingr3.innerHTML =   retorno.dados.ingr3;
            ingr4.innerHTML =   retorno.dados.ingr4;
            ingr5.innerHTML =   retorno.dados.ingr5;
            ingr6.innerHTML =   retorno.dados.ingr6;
            ingr7.innerHTML =   retorno.dados.ingr7;
            ingr8.innerHTML =  retorno.dados.ingr8;
            ingr9.innerHTML =   retorno.dados.ingr9;
            ingr10.innerHTML = retorno.dados.ingr10;
            //fim bloco ingredientes
            //inserir valor em como fazer
            fazer.innerHTML =retorno.dados.comoFazer;

            //inserir o titulo da receita
            titulo.innerHTML =retorno.dados.titulo;
            }
           
            
        })//FIM DA FUNCTION DE PESQUISA

        const idTxt = $('#idTxt').val();
        const meta = $('#metaTxt').val();
        var nome = $('#nomeTxt').val();

        var user = document.getElementById('user');
        user.innerHTML = nome;



        $('#logoBtn').on('click',(res=>window.location.href = `viewUserId.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
        $('#bemestar').on('click',(res=>window.location.href = `bemestar.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
        $('#alimento').on('click',(res=>window.location.href = `recomendacoes.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
        $('#exercicio').on('click',(res=>window.location.href = `treinodia.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
    </script>


