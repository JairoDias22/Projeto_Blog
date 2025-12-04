<?php
#header, navbar, links do Bootstrap e meta tags
include "templates/header.php"; 
#funções auxiliares (helpers)
include_once "helpers/helpers.php";
?>
    <!--Titulo da pagina de contato-->
      <div class="titulos-1" >  
        <h2>Fale conosco através de nossos contatos!!</h2>
      </div><br>

        <!--Formulario-->
        <div class ="d-flex justify-content-center align-items-center vh-100">
          <div class="card shadow-lg border-0 rounded-4 p-4" style="max-width: 500px; width: 100%;  ">
              <h3 class="text-center mb-4">Informe seu usuário e e-mail</h3>

          <!--Logica do formulario para mostrar falha ou sucesso no envio-->
              <?php if(count($validacoes)): ?>
                      <ul style = "color:red;">  
                        <?php foreach($validacoes as $validacao): ?>
                          <li><?= $validacao; ?></li>
                        <?php endforeach;?>
                      </ul>
              <?php endif ?>
                  <?php if($sucesso): ?>
                      <p style ="color:green; font-weight:bold; "><?= $sucesso; ?></p>
                  <?php endif; ?>

             <!--formulario da pagina de contato-->
              <form action="contato.php" method="POST" class="mb-4">
                <div class="mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" name="nome" id="nome" class="form-control" placeholder="Seu nome">
                </div>
           
                <div class="mb-3">
                  <label for="email" class="form-label">E-mail</label>
                    <div class="input-group">
                      <span class="input-group-text">@</span>
                      <input type="text" name="email" id="email" class="form-control" placeholder="exemplo@email.com">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Enviar</button>
              </form>

           <!--Informações de contato--> 
              <div class="border-top pt-3">
                  <h5 class="mb-2"><ion-icon name="call-outline"></ion-icon> Telefone Fixo</h5>
                  <p class="mb-3 text-muted">98 98487-3311</p>
                  <h5 class="mb-2"><ion-icon name="compass-outline"></ion-icon> Localização</h5>
                  <p class="text-muted mb-0">Rua Gonçalves Dias, 386 - Centro, Bacabal-MA</p>
                </div>
              </div>
          </div><br>

<!--Rodapé-->         
<?php include "templates/footer.php";?>

