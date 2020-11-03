<?php
 $conn = mysqli_connect("localhost","root","","fullstackeletro");
 if (!$conn){
  die("falha na conexão com BD".mysqli_connect_errno());
 
 } 

    if(isset($_POST['nome']) && isset($_POST['mensagem'])){
        $nome = $_POST['nome'];
        $mensagem = $_POST['mensagem'];
        $sql = "insert into comentarios (nome, mensagem) values ('$nome','$mensagem')";
        $result = $conn->query($sql);
    }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Fale conosco -Full Stack Eletro</title>
  <link rel="stylesheet" href="./css/estilo.css">

</head>

<body>

<?php
include_once("menu.html")
?>

  </nav>
  <header class="contatos">
    <h1>
      Fale Conosco
    </h1>
  </header>

  <div class="ctt">
    <div>
      <div class="fale">
        <img src="./imagens/email2.jpg" width="100px">
        contato@fullstackeletro.com
      </div>

      <div class="fale">
        <img src="./imagens/whatsapp.jpg" width="100px">
        (11) 99999-9999
      </div>
    </div>
  </div>
  <div class="formulario">
  <form method="POST" action="" >
    <h3>
      Deixe sugestões|Dúvidas|Reclamações:
    </h3>
    Nome :
    </p>
    <p>
      <input type="text" name="nome" style=" width= 600px">
    </p>
    <p>
      Mensagem :
    </p>
    <p>
    <input type="text" name="mensagem" style=" width= 600px">
    </p>
    <p>
      <input type="submit" value="Enviar">
    </p> <br> <br>
  </form>
  <?php
         $sql="select * from comentarios";
         $result = $conn->query ($sql);
         if($result->num_rows>0){
         while($rows = $result->fetch_assoc()){
          echo "<span style='color:blue;'>Nome: </span>",$rows['nome'],"<hr>";
          echo  "<span style='color:blue;'>Mensagem: </span>",$rows['mensagem'],"<hr>";
          echo  "<span style='color:blue;'>Data: </span>",$rows['data'],"<hr>";
          echo "<span style='color:gold;'>Obrigado por sua mensagem,
          <br> sua opinião é muito importante para nós.Volte sempre!!! </span>", "<hr>","<hr>";
          }  
          } else{
           echo "<span style='color:gold;'>Seja o primerio a comentar aqui!!!</span>";
          }
         
          ?>
</div>
<footer id="rodape">
  <p id="formas_pagamento"> Formas de Pagamento</p>
  <img src="./imagens/formas_de_pagamento.png" alt="Formas de Pagamento ">
  <p>&copy;Recode Pro</p>
  <p class="ass"> Desenvolvido por Willian Ferreira Santos | No curso de HTML/CSS/JS</p>
</footer>
</body>
</html>