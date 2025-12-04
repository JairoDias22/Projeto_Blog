<?php
#header, navbar, links do Bootstrap e meta tags
include "templates/header.php";
#Banco de dados do site
include 'data/data.php';
#funções auxiliares (helpers)
include_once "helpers/helpers.php";
?>
<!--Pagina de posts da pagina de Blog-->

<!--Div container-->
<div class="container my-5 poste ">
  <div class="row align-items-start">
    
    <!-- Conteúdo principal -->
    <div class="col-md-9">
      <div class="card shadow-sm border-0">
        <!--Percorre o array multidimencional e exibi as informações de cada post com base no ID--> 
        <img class="img-post" src="<?php echo $post['imagem']; ?>" class="img-fluid mb-4" alt="<?php echo $post['titulo']; ?>">
        <div class="card-body">
          <h1 class="titulo-post" ><?php echo $post['titulo']; ?></h1>
          <p class="resumo-post"><?php echo $post['resumo']; ?></p>     
        </div>       
      </div> 
    </div>

      <!-- Lista de categorias -->
       <?php include "templates/categorias.php";?>
   
  </div>
</div>
 <!--Botões da pagina-->
<?php include "templates/next.php"; ?>

<!--Rodapé-->
<?php include "templates/footer.php"; ?>
