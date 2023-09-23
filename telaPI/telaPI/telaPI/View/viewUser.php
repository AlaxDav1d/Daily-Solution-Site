

<!DOCTYPE html>
<?php

    $json = file_get_contents('php://input');
    $reqbody = json_decode($json);
    $login = $reqbody->login;
    
    $sla = "<script>
                    var texto = `$login`
                </script>";
    echo $sla;
    echo json_encode($login);

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" type="png" class="imgLogo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/sweetalert2.min.css" type="text/css" />
        <a href="../Configuracao/Conexao.php"></a>
        <title>Daily Solution</title>
        
        <style>
@keyframes andar{
    0%{
        rotate: -2deg;
        transform: translateX(-100vh);
    }
    100%{
        rotate: 10deg;
        transform: translateX(400vh);
    }

}
*{
    padding:0;
    margin: 0;
    box-sizing: border-box;
}

.topo{
    background-color: #d9d9d9;
    height: 140px;
    padding-right: 85px;
    display: flex;
    padding-left: 25px;
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

    </style>
    </head>
    <body>
        <!--Inicio cabeçalho-->
        <header>
        <input type="hidden" id="idTxt" value="<?php echo $id?>" />
                <div class="topo">
                    <a href="cadastroPi.html"><img src="https://github.com/Meirelis/PEI/blob/main/Daily-Solution/img/logo.png?raw=true" alt="" ></a>
                    <div class="form">
                        <h3>Olá</h3>
                        <p id="userName" ></p>
                        <input type="text" name="sla" id="userTxt" value=<?php echo$login ?>>
                        
                    </div>
                </div>
            </div>
        </header>
        <!--Fim cabeçalho-->
        <!--Inicio container azul-->
        <div class="container-azul">
        </div>
        <div class="container-texto">
            <h2>Bem-vindo à Daily Solution!</h2>
            <p class="textoMid">
                A empresa que se preocupa com o seu bem-estar! Nós acreditamos que a combinação de exercícios e alimentação saudável é a chave para uma vida mais equilibrada e feliz. Com nossas soluções diárias, você pode transformar sua rotina e alcançar seus objetivos de saúde. Oferecemos planos alimentares personalizados, treinos elaborados por profissionais e acompanhamento constante para garantir o seu sucesso. Comece hoje mesmo a cuidar da sua saúde com a Daily Solution!
            </p>
        </div>
        <!--Fim container azul-->
        <!--Inicio container linha/divisor-->

        <!--Fim container linha/divisor--> 
         <!--Inicio Container das imagens--> 
        
        <!--Fim Container das imagens-->
        <footer>Daily Solution © 2023 - Todos os Direitos Reservados</footer>
    </body>
</html>
<script src="../js/jquery-3.6.0.min.js" type="text/javascript"></script>

<script  type="text/javascript" >
    
    $(document).ready(async function(){await carregarDados()});
        var user = document.getElementById('userName');
        async function carregarDados(){
            alert(texto)
            alert('função carregada');
            const puxar = await fetch('../Controller/usuarios/listarId.php',{method:'get'});
            const resposta = await puxar.json();
            const index =resposta.index[1];
            console.log(index.id)
            alert(index.id)
            var key = index.id - 1;
            alert(key)
         
            const request = await fetch('../Controller/usuarios/listarUsuarios.php',{method:'get'});
            const response = await request.json();
            const nome = response.nome[key];
            const nome1 =nome.nome_completo;
            alert(nome1);
            
            console.log(userName);
            user.innerHTML = userName;
            


           
        }

</script>