const tudo = document.querySelectorAll('.carousel');
let divAtual = 0;            
const geral = document.querySelectorAll('.textoAjuda');
function cardio(){
     fim.innerHTML=`
     <style>
     .bloco-middle{
         display: flex;
         gap: 50px;
         align-items: center;
         justify-content: center;
         padding-top: 50px;
     }
     .bloco-top-quadrado1{
         background-color: #d9d9d9;
         width: 30%;
         height: 30%;
         display: flex;
         justify-content: center;
         flex-direction: column;
         align-items: center;
         gap: 25px;
         padding: 2.5%;
         border-radius: 12% 0% 18% 0%
     }
     .bloco-middle a{
         text-decoration: none;
         color: white;
         transition: 0.5s;
         height: 50px;
         width: 26vh;
         background-color: #ce2f2f;
         display: flex;
         justify-content: center;
         align-items: center;
         font-size: 20px;
     }
     a:hover{
         background-color: white;
         
         color: #ce2f2f;
     }.topicos{
         font-size:3vh;
     }
     </style>
     <div class="bloco-middle">
     <div class="bloco-top-quadrado1">
         <img src="./img/corda.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Corda</p>
         <a onclick="teste()" >Como fazer</a>
     </div>

     <div class="bloco-top-quadrado1">
         <img src="./img/danca.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Dança</p>
         <a onclick="teste()" >Como fazer</a>
     </div>

     <div class="bloco-top-quadrado1">
         <img src="./img/bicicleta.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Bicicleta</p>
         <a  onclick="teste()">Como fazer</a>
     </div>

</div>
     ` 
}
function musculo(){
     fim.innerHTML=`
     <style>
     .bloco-middle{
         display: flex;
         gap: 50px;
         align-items: center;
         justify-content: center;
         padding-top: 50px;
     }
     .bloco-top-quadrado1{
         background-color: #d9d9d9;
         width: 30%;
         height: 30%;
         display: flex;
         justify-content: center;
         flex-direction: column;
         align-items: center;
         gap: 25px;
         padding: 2.5%;
         border-radius: 12% 0% 18% 0%
     }
     .bloco-middle a{
         text-decoration: none;
         color: white;
         transition: 0.5s;
         height: 50px;
         width: 26vh;
         background-color: #ce2f2f;
         display: flex;
         justify-content: center;
         align-items: center;
         font-size: 20px;
     }
     a:hover{
         background-color: white;
         
         color: #ce2f2f;
     }.topicos{
         font-size:3vh;
     }
     </style>
     <div class="bloco-middle">
     <div class="bloco-top-quadrado1">
         <img src="./img/triceps-frances-unilateral.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Tríceps francês unilateral</p>
         <div class="como-fazer"><a href="#">Como fazer</a></div>
     </div>

     <div class="bloco-top-quadrado1">
         <img src="./img/tricpes-pulley-barra.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Tríceps Pulley barra</p>
         <div class="como-fazer"><a href="#">Como fazer</a></div>
     </div>

     <div class="bloco-top-quadrado1">
         <img src="./img/supino.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Supino</p>
         <div class="como-fazer"><a href="#">Como fazer</a></div>
     </div>

</div>`
}
function saude(){
     fim.innerHTML=`
     <style>
     .bloco-middle{
         display: flex;
         gap: 50px;
         align-items: center;
         justify-content: center;
         padding-top: 50px;
     }
     .bloco-top-quadrado1{
         background-color: #a4d8f6;
         width: 30%;
         height: 30%;
         display: flex;
         justify-content: center;
         flex-direction: column;
         align-items: center;
         gap: 25px;
         padding: 2.5%;
         border-radius: 12% 0% 18% 0%
     }
     .bloco-middle a{
         text-decoration: none;
         color: white;
         transition: 0.5s;
         height: 50px;
         width: 26vh;
         background-color: #0049b0;
         display: flex;
         justify-content: center;
         align-items: center;
         font-size: 20px;
     }
     a:hover{
         background-color: white;
         
         color:  #2966bd;
     }.topicos{
         font-size:3vh;
     }
     </style>      <div class="bloco-middle">
     <div class="bloco-top-quadrado1">
         <img src="./img/saude.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Saúde</p>
         <div class="como-fazer"><a href="#">Leia Mais</a></div>
     </div>

     <div class="bloco-top-quadrado1">
         <img src="./img/alimento.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Alimentação</p>
         <div class="como-fazer"><a href="#">Leia Mais</a></div>
     </div>

     <div class="bloco-top-quadrado1">
         <img src="./img/ansiedade.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Estresse</p>
         <div class="como-fazer"><a href="#">Leia Mais</a></div>
     </div>

</div>`
}
function perna(){
     fim.innerHTML=`
     <style>
     .bloco-middle{
         display: flex;
         gap: 50px;
         align-items: center;
         justify-content: center;
         padding-top: 50px;
     }
     .bloco-top-quadrado1{
         background-color: #d9d9d9;
         width: 30%;
         height: 30%;
         display: flex;
         justify-content: center;
         flex-direction: column;
         align-items: center;
         gap: 25px;
         padding: 2.5%;
         border-radius: 12% 0% 18% 0%
     }
     .bloco-middle a{
         text-decoration: none;
         color: white;
         transition: 0.5s;
         height: 50px;
         width: 26vh;
         background-color: #ce2f2f;
         display: flex;
         justify-content: center;
         align-items: center;
         font-size: 20px;
     }
     a:hover{
         background-color: white;
         
         color: #ce2f2f;
     }.topicos{
         font-size:3vh;
     }
     </style> <div class="bloco-middle">
     <div class="bloco-top-quadrado1">
         <img src="./img/Panturirlha.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Panturrilha</p>
         <div class="como-fazer"><a href="#">Como fazer</a></div>
     </div>

     <div class="bloco-top-quadrado1">
         <img src="./img/Afundo.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Afundo</p>
         <div class="como-fazer"><a href="#">Como fazer</a></div>
     </div>

     <div class="bloco-top-quadrado1">
         <img src="./img/Ponte.jpg" alt="" height="220px" width="90%">
         <p class="topicos">Ponte</p>
         <div class="como-fazer"><a href="#">Como fazer</a></div>
     </div>

</div>`
}
function avancar(){
    geral.forEach(item => item.classList.remove('aparece'));
    geral.forEach(item => item.classList.add('some'));
    if(divAtual === geral.length - 1){
        divAtual = 0;
    }else{
        divAtual++;
    }
    geral[divAtual].classList.add('aparece');
    geral[divAtual].classList.remove('some');
} 
function frente(){
    tudo.forEach(item => item.classList.remove('sim'));
    tudo.forEach(item => item.classList.add('nao'));
    if(divAtual === tudo.length - 1){
        divAtual = 0;
    }else{
        divAtual++
    }
    tudo[divAtual].classList.add('sim');
    tudo[divAtual].classList.remove('nao');
}    

function esporte(){
    Swal.fire({
    title: 'Algumas dicas de esportes:'+'<br>'+'Futebol'+'<br>'+'Basquete'+'<br>'+'Tênis'+'<br>'+'Tênis de mesa'+'<br>'+'Atletismo'+'<br>'+'Natação'+'<br>'+'Voleibol',
    imageUrl:'../view/img/esporte.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}
function esteira(){
    Swal.fire({
    title: '-Ajuste a esteira de acordo com seu nível;'+'<br>'+'<br>'+'-Faça um aquecimento leve no início;'+'<br>'+'<br>'+'-Mantenha uma postura ereta enquanto caminha ou corre;'+'<br>'+'<br>'+'-Mantenha um ritmo constante e evite movimentos bruscos.',
    imageUrl:'../view/img/esteira.jpeg',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}
function escada(){
    Swal.fire({
    title: '-Ajuste o equipamento para o seu nível e altura;'+'<br>'+'<br>'+'-Faça um aquecimento de 5-10 minutos antes de começar;'+'<br>'+'<br>'+'-Mantenha uma postura ereta e os ombros relaxados;'+'<br>'+'<br>'+'-Inicie com resistência e velocidade mais baixas se for iniciante.',
    imageUrl:'../view/img/escada.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}
function corda(){
    Swal.fire({
    title: '-Escolha cordas de batalha com 1,5 a 2 polegadas de diâmetro;'+'<br>'+'<br>'+'-Mantenha a postura adequada com os pés afastados na largura dos quadris;'+'<br>'+'<br>'+'-Segure uma extremidade de cada corda em cada mão com os braços estendidos à sua frente.',
    imageUrl:'../view/img/corda.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}
function danca(){
    Swal.fire({
    title: '-Vista-se com roupas leves e calçados apropriados;' +'<br>'+'<br>'+
    '-Faça alongamento antes de começar;'+'<br>'+'<br>'+'-Mantenha-se hidratado com uma garrafa de água à mão;'+'<br>'+'<br>'+'-Siga o ritmo da música e divirta-se.',
    imageUrl:'../view/img/danca.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}
function bicicleta(){
    Swal.fire({
    title: 'Divida em sessões de 10-30 minutos, cinco dias por semana. Inicialmente, comece com treinos de 10 minutos e vá aumentando o tempo conforme for melhorando.',
    imageUrl:'../view/img/bicicleta.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}

//Funções da página Bem Estar
function saude(){
    Swal.fire({
    
    title: 'Algumas dicas básicas de saúde:'+'<br>'+'-Alimentação equilibrada;'+'<br>'+'-Atividade física regular;'+'<br>'+'-Sono adequado;'+'<br>'+'-Higiene pessoal;'+'<br>'+'-Beba no mínimo 2L de água por dia.',
    imageUrl:'../view/img/saude.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}

function alimento(){
    Swal.fire({
    title: 'Algumas dicas básicas para uma melhor alimentação:'+'<br>'+'-Frutas e vegetais;'+'<br>'+'-Controlar a quantidade de comida;'+'<br>'+'-Grãos integrais;'+'<br>'+'-Proteínas magras;'+'<br>'+'-Limitar alimentos processados.',
    imageUrl:'../view/img/alimento.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}

function ansiedade(){
    Swal.fire({
    title: 'Algumas dicas básicas para controlar a ansiedade:'+'<br>'+'-Respire profundamente;'+'<br>'+'<br>'+'-Faça meditações;'+'<br>'+'<br>'+'-Crie uma rotina sem excesso de tarefas para o seu dia;'+'<br>'+'<br>'+'-Converse e se abra com alguém;'+'<br>'+'<br>'+'-Tente sempre focar no presente;'+'<br>'+'<br>'+'-Pratique exercícios;'+'<br>'+'<br>'+'-Busque a ajuda de um profissional.',
    imageUrl:'../view/img/ansiedade.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}

function depressao(){
    Swal.fire({
    title: 'Algumas dicas básicas para combater a depressão:'+'<br>'+'-Busque a ajuda de um profissional;'+'<br>'+'<br>'+'-Pratique alguma atividade física;'+'<br>'+'<br>'+'-Escreva um diário;'+'<br>'+'<br>'+'-Seja gential consigo mesmo;'+'<br>'+'<br>'+'-Evite isolamento;'+'<br>'+'<br>'+'-Busque a ajuda de um profissional.',
    imageUrl:'../view/img/depressao.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}

function sono(){
    Swal.fire({
    title: '-Apague as luzes do seu quarto;'+'<br>'+'<br>'+'-Faça o sistema 3/2/1:'+'<br>'+'Não coma nada 3h antes de dormir, não beba nada 2h antes e não utilize telas 1h antes;'+'<br>'+'<br>'+'-Estabeleça um horário para dormir e acordar em todos os dias da semana;'+'<br>'+'<br>'+'-Opite por dormir nas posições: Fetal ou fetal com braços estendidos.',
    imageUrl:'../view/img/sono.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}

function exercicio(){
    Swal.fire({
    title: '-Siga para a nossa página de exercícios:'+'<br>',
    imageUrl:'../view/img/sono.gif',
    imageWidth:"300",
    showClass: {
      popup: 'animate__animated  animate__backInLeft'
    },
    hideClass: {
      popup: 'animate__animated animate__fadeOutUp'
    }
})
}
