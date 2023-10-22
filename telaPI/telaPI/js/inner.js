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
