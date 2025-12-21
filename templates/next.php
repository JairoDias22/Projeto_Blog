
<!--Botões de navegação da pagina-->
<nav class="d-flex align-items-center justify-content-center vh-100" aria-label="Page navigation example">
  <ul class="pagination">
      <li class="page-item"><a  href="post.php?id=<?= $idAnterior?>" class="btn btn-primary">Anterior</a></li>
      <!--Array_slice para pular as informações do post princiapal-->
      <?php foreach(array_slice($posts,1) as $post):?> 
      <!-- Cria links dos botões com base no ID 1, 2, e 3 -->
      <li class="page-item"><a href="post.php?id=<?= $post['id']; ?>" class="btn btn-secondary"><?= $post["botao"]?></a></li>
      <?php endforeach; ?>
      <li class="page-item"><a href="post.php?id=<?= $idProx ?>" class="btn btn-primary">Proximo</a></li>
  </ul>
</nav>