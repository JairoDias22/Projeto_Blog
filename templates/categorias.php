<!--Categorias/tags-->
<?php
include_once "data/data.php";
#Logica da categorias e tags
if (isset($_GET["id"])) {    #Verifica se o id existe
    $id = $_GET["id"];       # Captura o valor do parâmetro id enviado pela URL
    $post = $posts[$id];     # Seleciona o post correspondente ao Id informado na URL
}
?>
<!--Categorias-->
  <div  class="categorias">
    <div class="card shadow-sm mb-8 w-100 h-100 ">
      <div class="card-header bg-primary text-white text-center">
        <h5 class="mb-1 ">Categorias</h5>
      </div>
     <!--Foreach para percorrer o array multidimensional para selecionar a chave "categoria" e exibir os valores de categoria de cada array associativo-->     
      <ul class="list-group list-group-flush ">
         <?php foreach($posts as $post):?>
           <!-- Cada categoria é exibida como um link que redireciona para a página do post correspondente -->
             <li class="list-group-item p-2 ml-3 "><a href="post.php?id=<?php echo $post['id']; ?>" class="text-decoration-none text-dark"><?= $post["categoria"]?></a></li>
          <?php endforeach;?>
      </ul>
    </div>

<!--Tags-->
 <div  class="categorias">
    <div class="card shadow-sm mb-5 mt-4  w-100 h-100 ">
      <div class="card bg-primary text-white text-center">
          <h5 class="mb-1 ">Tags</h5>
      </div>
      <!--Logica usando o foreach para percorrer o array multidimensional para selecionar o array associativo "tags" e imprimir sua informações-->       
      <div  class="tags card shadow-sm mb-1 mt-1  w-100 h-100">
        <?php foreach($posts as $post): ?>
            <?php foreach($post["tags"] as $tags):?>
            <a href="post.php?id=<?php echo $post['id']; ?>" class="btn btn-outline-primary btn-sm tag-btn"><?= $tags?></a> 
            <?php endforeach;?>
        <?php endforeach;?>
        </div>
    </div>
  </div>
 
  </div>
