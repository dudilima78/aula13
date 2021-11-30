<?php

include('conexao.php');

?>

<html>

   <head>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   </head>

   <body>

    
       <hr>

   <div class="container">

   <!-- Inicio da tabela -->

   <table class="table">

 <thead>

   <tr>
     <th scope="col">#</th>
     <th scope="col">Foto</th>
     <th scope="col">Prestador</th>
     <th scope="col">Especialidade</th>
     <th scope="col">Ações</th>
   </tr>

 </thead>

 <tbody>

 <?php

  

       $sql = "select * from tblefetivos";
       $resultado = $con->query($sql);

       while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
               
           echo "<tr>";

               echo "<th>".$linha['idefetivo']."</th>";
               echo "<td><img src='".$linha['foto']."' width='50px' height='65px'></td>";
               echo "<td>".$linha['nome']."</td>";
               echo "<td>".$linha['funcao']."</td>";
               echo "<td>".$linha['dtadmissao']."</td>";
               echo "<td>".$linha['salario']."</td>";
               echo "<td>
                   <button class='btn btn-primary btn-sm'> Editar</button> 
                   <button class='btn btn-danger btn-sm'>Excluir</button> 

               </td>";

           echo "</tr>";

                   

       }

?>


 </tbody>

</table><hr>

<a href="frmcomissionados.php"><button type="button" class="btn btn-primary">Cadastrar Prestadores</button></a>


</div>