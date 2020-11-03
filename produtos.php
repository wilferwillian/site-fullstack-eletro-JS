<?php 
   $conn = mysqli_connect("localhost","root","","fullstackeletro");
   if (!$conn){
    die("falha na conexão com BD".mysqli_connect_errno());
   }else {
       echo 'sucesso ao conectar';
   } 
   
  
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <title > Produtos - Full Stack Eletro</title>
   <link rel="stylesheet" href="./css/estilo.css">

</head>
<!--  -->

<body>
   <script src="./Javascript/estilo.js"></script>
   <!--inicio do menu-->
   <?php
   include_once("menu.html")
   ?>
   
   <!--fim de menu-->
   <h1 class="prodtitulo">
      Produtos
   </h1>
   <br> <br>
   <section class="categorias">
      <h2>
         Categorias
      </h2>
      <br>
      <ul>
         <li onclick="retornaTodos()">
            Todos(12)
         </li>
         <li onclick="abrirProduto('geladeira')">
            Geladeiras(3)
         </li>
         <li onclick="abrirProduto('fogões')">
            Fogões(2)
         </li>
         <li onclick="abrirProduto('microondas')">
            Microondas(3)
         </li>
         <li onclick="abrirProduto('lavadora')">
            Lavadora de roupas(2)
         </li>
         <li onclick="abrirProduto('lava-louca')">
            Lava louças(2)
         </li>
      </ul>
   </section>
 <div class="produtos">
       <?php
         $sql="select * from produto";
         $result = $conn -> query ($sql);
         if($result->num_rows>0){
         while($rows = $result->fetch_assoc()){
         ?>  
    
         <div class="produto" id="<?php echo $rows["categoria"];?>"  >
            <img src="<?php echo $rows["imagem"];?>" onclick= "amplia(this)" >
            <br>
            <p class="descriçao"> <?php echo $rows["descrição"];?></p> <hr>
            <p class="precoAnt" style="text-decoration: line-through;"><?php echo $rows["preco"];?></p>
            <br>
            <h3 style="font-weight: bolder;" class="preço"><?php echo $rows["precofinal"];?></h3>
            <br>
         </div>
    
          <?php    
          }  
          } else{
           echo "Não existem produtos cadastrados";
          }
         
          ?>
 </div>
  
   
    <script src="./Javascript/estilo.js"></script>
     <footer id="rodape">
       <h3 id="formas_pagamento">
       Formas de Pagamento
       </h3>
       <img src="./imagens/formas_de_pagamento.png" alt="Formas de Pagamento ">
       <h3>
       &copy;Recode Pro
       </h3>
       <p class="ass"> Desenvolvido por Willian Ferreira Santos | No curso de HTML/CSS/JS</p>
    </footer>
</body>
</html>