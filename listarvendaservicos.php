<?php

include('conexao.php');

?>

<html>

   <head>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   </head>

   <body>

       <a href="frmvendaservicos.php">Venda de Serviços</a>
       <hr>

   <div class="container">

   <!-- Inicio da tabela -->

   <table class="table">

 <thead>

   <tr>
     <th scope="col">#</th>
     <th scope="col">Código do Serviço</th>
     <th scope="col">Nº do Prestador</th>
     <th scope="col">Nº do Cliente</th>
     <th scope="col">Ações</th>
   </tr>

 </thead>

 <tbody>

 <?php

  

       $sql = "select * from tblvendaservicos";
       $resultado = $con->query($sql);

       while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
               
           echo "<tr>";

               echo "<th>".$linha['idvendaserv']."</th>";
               echo "<td>".$linha['idservico']."</td>";
               echo "<td>".$linha['idcomissionado']."</td>";
               echo "<td>".$linha['idcliente']."</td>";
               echo "<td>
                   <button class='btn btn-primary btn-sm'> Editar</button> 
                   <button class='btn btn-danger btn-sm'>Excluir</button> 

               </td>";

           echo "</tr>";

       }

?>

 </tbody>

</table>


</div>