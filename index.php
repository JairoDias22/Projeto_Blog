<?php
#header, navbar, links do Bootstrap e meta tags
include "templates/header.php";
#Banco de dados do site
include 'data/data.php';
?>
<!--Pagina principal do site de Blog-->

<div  class="container  my-5">
    <!--Conteudo principal-->
      <div class="d-flex align-items-center justify-content-center vh-100" class = "container-main">
            <div class = "imagem-principal"> 
              <img class="img-main" src="<?php echo $posts[1]['imagem'] ?>" alt="">
              <h1 class="bem-vindo">Bem-vindo ao Blog</h1>
              <h2 class = "titulo" ><?php echo $posts[1]['titulo'] ?></h2>
              <p class="resumo-main"><?= $posts[1]['resumo'] ?></p>
            </div>
      </div>

  <!--Cards da pagina-->
    <div class="row cards">
      <!--Percorre o array multidimensional para exibir as informações de cada post correspondente-->  
       <?php foreach(array_slice($posts,1) as $post):?>
            <div class="col-md-4 mb-4">
              <div class="card h-100 shadow-sm">
                <img src="<?php echo $post['imagem']; ?>" class="card-img-top" alt="<?php echo $post['titulo']; ?>">
                <div class="card-body">
                <h5 class="card-title"><?php echo $post['titulo']; ?></h5>
                 <p class="card-text"><?php echo $post['conteudo']; ?></p>
                 <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Leia mais</a><br><br>

                <!--Tags dos cards da pagina--> 
                  <div class="tags">                  
                    <label for="text">Tags:</label>
                     <!--Percorre o array multidimensional e exibi as informações do array associativo "tags" em cada um dos cards da pagina, com base no ID--> 
                      <?php foreach($post["tags"] as $tags):?>
                      <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-primary btn-sm tag-btn"><?= $tags?></a> 
                      <?php endforeach;?>
                   </div> 
                </div>
             </div>
            </div>
       <?php endforeach; ?>
    </div>
</div>

<!--Rodapé-->         
<?php include "templates/footer.php";?>
