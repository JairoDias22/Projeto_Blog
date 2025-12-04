
<!--Helpers-->

<?php
#logica para validação de e-mail e nome de usuario da pagina de contato

$validacoes = []; #Variavel para exibir possiveis erros das condições
$sucesso = "";    #Variavel para exibir a mensagem de sucesso

if($_SERVER["REQUEST_METHOD"] === "POST"){ #Verifica se o formulario esta no metodod POST
     $nome = $_POST["nome"];   #variavel para o nome do usuario
     $email = $_POST["email"]; #variavel para o e-mail do usuario

    #Verifica se o campo nome está vazio, se estiver imprime uma mensagem de erro
    if($_POST["nome"] === ""){
        $validacoes[] = "Por favor, digite o nome de usuario";
    }
     #Verifica se o e-mail contem "@" ou ".", caso falte um, imprime uma mensagem de erro
    if(strpos($email,"@") == false && strpos($email,".") == false){
        $validacoes[] = "Por favor, digite um email correto";
    }
    #Se não houver erros, $validacoes === 0, exibe a mensagem de sucesso
    if(count($validacoes) === 0){
        $sucesso = "Formulario enviado com sucesso";
    }
}


#logica dos cards da pagina para que seja redirecionado para cada post

if (isset($_GET["id"])) {    #Verifica se o id existe
    $id = $_GET["id"];       # Captura o valor do parâmetro id enviado pela URL
    $post = $posts[$id];     # Seleciona o post correspondente ao Id informado na URL
}

#logica dos botões de proximo e anterior

if(isset($_GET["id"])){      #Verifica se o id existe
    $id = (int) $_GET["id"]; #Converte o valor para int e armazena em $id 
}
# Caso não exista o parâmetro "id" define o id padrão como 1 (abre o primeiro post)
else{      
    $id = 1; 
}

# Seleciona o post correspondente ao ID atual dentro do array de posts
$post = $posts[$id]; 

$ids = array_keys($posts);          #Usa array_key para as chaves IDS de todos os posts
$idAtual = array_search($id, $ids); # Encontra em qual posição do array de IDs está o post atual

#Calcula o próximo Id, e Calcula o Id anterior
$idProx = $ids[($idAtual + 1) % count($ids)];
$idAnterior = $ids[($idAtual - 1 + count($ids)) % count($ids)];

?>