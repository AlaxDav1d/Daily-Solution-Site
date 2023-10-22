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
        <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link rel="stylesheet" href="css/geral.css">
        <link rel="stylesheet" href="css/cardio.css">
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
                    <h2 id="ola" style="color:#ce2f2f">Bem Vindo</h2>
                    <p id="user"></p>   
              </div>
            </div>
        </header>

    <div class="treino">
            
    
        <div class="treino-a">
            <span>Cardio</span>
        </div>
    </div>

    <div class="container-imagens">

       <!-- bloco de cima -->
        <div class="bloco-top">
            <div class="bloco-top-quadrado1">
                <img src="./img/esporte.jpg" alt="" height="70%" width="90%">
                <p class="topicos">Esporte</p>
                <a  onclick="esporte()" >Como fazer</a>
            </div>

            <div class="bloco-top-quadrado1">
                <img src="./img/Esteira.jpg" alt="" height="70%" width="90%">
                <p class="topicos">Esteira</p>
                <a onclick="esteira()" >Como fazer</a>
            </div>

            <div class="bloco-top-quadrado1">
                <img src="./img/escada.jpg" alt="" height="70%" width="90%">
                <p class="topicos">Escada</p>
                <a onclick="escada()" >Como fazer</a>
            </div>

        </div>
            
       <!-- bloco do meio -->
        <div class="bloco-middle">
                <div class="bloco-top-quadrado1">
                    <img src="./img/corda.jpg" alt="" height="220px" width="90%">
                    <p class="topicos">Corda</p>
                    <a onclick="corda()" >Como fazer</a>
                </div>
    
                <div class="bloco-top-quadrado1">
                    <img src="./img/danca.jpg" alt="" height="220px" width="90%">
                    <p class="topicos">Dança</p>
                    <a onclick="danca()" >Como fazer</a>
                </div>
    
                <div class="bloco-top-quadrado1">
                    <img src="./img/bicicleta.jpg" alt="" height="220px" width="90%">
                    <p class="topicos">Bicicleta</p>
                    <a  onclick="bicicleta()">Como fazer</a>
                </div>

        </div>
    </div>
    <div class="container-texto">
        <div class="texto">
            <p>Fica a seu critério o tempo que praticará o exercício.</p>
        </div>
    </div>

    <footer>Daily Solution © 2023 - Todos os Direitos Reservados</footer>

</body>

<script src="../js/popUps.js"></script>
<script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="../js/userName.js "></script>
<script type="text/javascript" >
   
 $(document).ready(async function(){await exibeNome()})
 
    const idTxt = $('#idTxt').val();
    const meta = $('#metaTxt').val();
    var nome = $('#nomeTxt').val();

    var user = document.getElementById('user');
        user.innerHTML = nome;

    $('#logoBtn').on('click',(res=>window.location.href = `viewUserId.php?id=${idTxt}`));
    $('#bemestar').on('click',(res=>window.location.href = `bemestar.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
    $('#alimento').on('click',(res=>window.location.href = `recomendacoes.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
    $('#exercicio').on('click',(res=>window.location.href = `treinodia.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
</script>
<!-- ARRUMAR A IMAGEM DO USUARIO NO HEADER -->
