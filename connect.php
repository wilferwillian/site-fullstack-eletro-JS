
    
    <?php 
   $link = mysqli_connect("localhost","root","","fullstackeletro");
   if (!$link){
    die("falha na conexão com BD".mysqli_connect_errno());
   }else {
       echo 'sucesso ao conectar';
   } 
