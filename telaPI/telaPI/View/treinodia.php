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
        <link rel="stylesheet" href="css/treinodia.css">
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
                    <h2 id="ola" style="color:#ce2f2f">Bem Vindo</h2>
                    <p id="user"></p>   
              </div>
            </div>
        </header>


    <div class= "toldo">
        <h1>EXERCÍCIOS</h1>
    </div>

    <div class="mid">
        <div class="banner">

            <div class="treinos">
                <h2>Divisões de Treino</h2>
                <button id="inferiores" class="inferiores" >
                    <img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/letra-a.png?raw=true">
                    <h3>Inferiores</h3>
                    <img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/maior-que.png?raw=true">
                </button>
                <button id="superiores" class="inferiores"  >
                    <img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/letra-b.png?raw=true">
                    <h3>Superiores</h3>
                    <img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/maior-que.png?raw=true">
                </button>
                <button id="cardio" class="inferiores" >
                    
                        <img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/letra-c.png?raw=true">
                        <h3>Cardio</h3>
                        <img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/maior-que.png?raw=true">
                    
                </button>
            </div>
        </div>
    </div>

    <footer>Daily Solution © 2023 - Todos os Direitos Reservados</footer>
</body>
<script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="../js/userName.js"></script>
<script type="text/javascript" >
   
 $(document).ready(async function(){await exibeNome()})
    const idTxt = $('#idTxt').val();
    const meta = $('#metaTxt').val();
    var nome = $('#nomeTxt').val();

    var user = document.getElementById('user');
        user.innerHTML = nome;
    //NAVEGAÇÃO VIA HEADER
    $('#logoBtn').on('click',(res=>window.location.href = `viewUserId.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
    $('#bemestar').on('click',(res=>window.location.href = `bemestar.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
    $('#alimento').on('click',(res=>window.location.href = `recomendacoes.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
    $('#exercicio').on('click',(res=>window.location.href = `treinodia.php?id=${idTxt}&meta=${meta}&nome=${nome}`));

    //NAVEGAÇÃO VIA 'HOVER'
    
    $('#inferiores').on('click',(res=>window.location.href = `inferiores.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
    $('#cardio').on('click',(res=>window.location.href = `cardio.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
    $('#superiores').on('click',(res=>window.location.href = `superiores.php?id=${idTxt}&meta=${meta}&nome=${nome}`));
</script>