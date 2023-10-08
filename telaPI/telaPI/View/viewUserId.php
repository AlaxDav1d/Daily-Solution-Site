
<?php
     $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" type="png" class="imgLogo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../View/css/sweetalert2.min.css" type="text/css" />
        
        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <title>Daily Solution</title>
        <style>
*{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}

.topo{
    background-color: #d9d9d9;
    height: 140px;
    padding: 1%;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.topo img{
    width: 15vh;
    height: 15vh;
}
.topo a{
    width: 10%;
    height: 100%;
}
.logo{
    height: 100px;
    width: 100px;
    background: url(../img/logo.png) no-repeat center;
    background-size: 120px;
    padding-left: 250px;
    float: left;
}
.form{
    display: flex;
    align-items: center;  
    flex-direction: column;
}
.botao{
    height: 3vh;
    width: 7vh;
    background-color:#C7C5C5; 
    padding:0 15%;
    margin: 1%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bolder;
    transition: 800ms;
}
button{
    border: none;
}

.botao:hover{
    background-color: #2966bd; 
    color: #fff;
}
.container-mid{
    height: 500px;
    background-color: #ffffff;
}
.container-azul{
    height: 55vh;
    margin: 10vh 0; 
    overflow: block;
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-between;
    align-items: center;
    background-color: #2966bd;
    border-bottom: 3px solid black;
}
.container-azul h1{
    color: #fff;
    position: absolute;
    animation-name: andar;
    animation-duration: 3s;
    animation-direction: normal;
    animation-iteration-count: infinite;
   
}
.container-azul img{
    width: 100%;
    height: 100%;
}   

.container-texto{
    padding: 3%;
    font-size: 20px;
}

form{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    background-color: #AAA6A6;
    color: #fff;
    font-size:130%;
    width: 50vh;
    height: 70vh;
    padding: 1%;
    position: absolute;
    padding: 1%;
    gap: 0.2%;
    margin:3% 2%;
    text-transform: capitalize;
    border: 1px solid black;
}
form input{
    height: 5%;
    padding: 2%;
    transition: 900ms;
}
form input:focus{
    transform: translateX(5px);
}
form input:hover{
    transform: translateX(5px);
}
input[type='radio']{
    height: 50%;
}
form label{
    transition: 900ms;
}
form label:hover{
    text-shadow: 1.6px 0 #2966bd;
    transform: translateX(10px);
}
footer{
    color: rgb(218, 217, 217);
    background-color: #2966bd;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 50px;
    height: 25px;
}
h2{
    margin-bottom: 2%;
    font-size: 150%;
}
.img img{
    height: 50px;
    width: 50px;
}
.img{
    position: relative;
    bottom: 10px;
}
.container-imagens{
    margin-top: 15%;
    display: flex;
    justify-content: center;
    gap: 12%;
}
.bloco-1 {
    max-width: 370px;
    
}
.bloco-2 {
    max-width: 370px;
}
.bloco-3 {
    max-width: 370px;
}
.container-imagens span{
    font-size: 18px;
}

.container-imagens .text-1 {
    position: relative;
    margin-left: 5 5px;
}

.botoes{
    display: flex;
    justify-content: space-between;
}
.foco{
    display: flex;
    flex-direction: column;
    width: 20vh;
    gap: 10%;
    margin: 2% 0;  
}
.campo{
    display: flex;
    align-items: center;
    width: 100%;
    gap: 5%;    
}
.textoMid{
    width: 150vh;
}
.some{
    height: 0;
    background-color: transparent;
    opacity: 0;
    transition: 700ms;
    transform: translateY(-300px) scale(1%);
}
.aparece{
    height: 100;
    opacity: 1;
    transition: 700ms;
    transform: scale(100%);
}
.add{
    opacity: 1;
    position: absolute;
}
.a{
    opacity: 0;
}
.config{
    height: 10%;
    width: 20%;
}
.config1{
    display: flex;
    justify-content: flex-end;
}
.nomeUser{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.nomeUser h2{
    color: #2966bd;
}
.nomeUser p{
    font-size: large;
}
    </style>
    </head>
    <body>
        <!--Inicio cabeçalho-->
        <header>
                <div class="topo">
                  <input type="hidden" id="idTxt" value="<?php echo $id?>" />
                  
                  <a href="cadastroPi.html"><img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" alt="logo Daily Solution"></a>
                  <div class="nomeUser">
                        <h2 id="ola" >Bem Vindo</h2>
                        <p id="user">Hello World</p>   

                  </div>
                </div>

        </header>
        <!--Fim cabeçalho-->
        <!--Inicio container azul-->
        <div class="container-azul">

        </div>
         <!--Fim container azul-->
        <div class="container-texto">
            <h2>Bem-vindo à Daily Solution!</h2>
            <p class="textoMid">
                A empresa que se preocupa com o seu bem-estar! Nós acreditamos que a combinação de exercícios e alimentação saudável é a chave para uma vida mais equilibrada e feliz. Com nossas soluções diárias, você pode transformar sua rotina e alcançar seus objetivos de saúde. Oferecemos planos alimentares personalizados, treinos elaborados por profissionais e acompanhamento constante para garantir o seu sucesso. Comece hoje mesmo a cuidar da sua saúde com a Daily Solution!
            </p>
        </div>
       
        <!--Inicio container linha/divisor-->

        <!--Fim container linha/divisor--> 
         <!--Inicio Container das imagens--> 

        <!--Fim Container das imagens-->
        <footer>Daily Solution © 2023 - Todos os Direitos Reservados</footer>
    </body>
</html>
        <script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="../js/sweetalert2.all.min.js"></script>
        <script type="text/javascript" charset="utf-8">

            $('#ola').on('click',function(){alert('VMZ fica melhor de HeadPhone')});

            var user = document.getElementById('user');
            const idTxt = $('#idTxt').val();
                $(document).ready(async function(){await carregarUser()})
                async function carregarUser(){
                    alert(idTxt);

                  const config ={
                    method:'post',
                    headers:{
                      'Accept': 'application/json',
                      'Content-Type':'application/json'
                    },
                    body:JSON.stringify({
                      idT:idTxt
                    })
                  };
                  console.log(config);
                  const request =await fetch('../Controller/usuarios/listarNomePeloId.php',config);      
                  const response = await request.json();
                  console.log(response.dados)
                  dados = response['dados'];
                  user.innerHTML = dados;
            }
        </script>

</html>
