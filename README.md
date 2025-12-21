# 📝 Projeto Blog em PHP

Este projeto consiste no desenvolvimento de um **mini blog dinâmico**, criado com **HTML, CSS, Bootstrap e PHP**, utilizando **arrays associativos** para simular um sistema de postagens.

O blog exibe conteúdos dinamicamente, permite navegação entre posts individuais e utiliza **templates reutilizáveis** para manter o código organizado e padronizado.

---

## 🚀 Funcionalidades

- Listagem dinâmica de posts na página inicial
- Página individual de post acessada via URL com ID (`post.php?id=1`)
- Organização dos dados dos posts em arrays PHP
- Uso de templates (`header` e `footer`) para reaproveitamento de código
- Layout responsivo com Bootstrap
- Estilização personalizada com CSS
- Exibição de:
  - Imagem do post
  - Título
  - Resumo
  - Conteúdo completo
  - Categoria
  - Tags
- Página de contato

---

## 🧩 Tecnologias Utilizadas

- HTML5  
- CSS3  
- Bootstrap  
- PHP  
- Servidor local (XAMPP, WAMP ou similar)

---

## 📂 Estrutura do Projeto
<pre>
Projeto_Blog-main/
│── index.php # Página inicial (lista de posts)
│── post.php # Página individual do post
│── contato.php # Página de contato
│── README.md # Documentação do projeto
│
├── css/
│ └── style.css # Estilos personalizados
│
├── img/
│ └── (imagens dos posts)
│
├── data/
│ └── posts.php # Array associativo com os dados dos posts
│
├── helpers/
│ └── functions.php # Funções auxiliares do projeto
│
└── templates/
├── header.php # Cabeçalho e navbar
├── footer.php # Rodapé
├── categorias.php # Exibição de categorias
└── next.php # Navegação entre posts
</pre>

---

## 🛠️ Como Executar o Projeto

1. Instale um servidor local (XAMPP, WAMP ou MAMP)
2. Copie a pasta `Projeto_Blog-main` para:
   - `htdocs` (XAMPP) ou  
   - `www` (WAMP)
3. Inicie o servidor Apache
4. Acesse no navegador:
http://localhost/Projeto_Blog-main/index.php


---

## 📌 Funcionamento do Projeto

- Os dados dos posts são armazenados em um **array associativo** localizado em `data/posts.php`
- Cada post possui um **ID único**
- Ao clicar em um post, o ID é enviado via URL
- A página `post.php` recupera e exibe:
  - Título
  - Conteúdo completo
  - Imagem
  - Categoria
  - Tags
- O layout é padronizado utilizando **templates PHP**
- As imagens são carregadas dinamicamente a partir da pasta `img`

---

## 🎯 Objetivo do Projeto

Este projeto foi desenvolvido com fins **acadêmicos**, com o objetivo de praticar:

- Estruturação de páginas em PHP
- Uso de arrays associativos
- Separação de responsabilidades no código
- Criação de templates reutilizáveis
- Integração entre front-end e back-end
- Organização de projetos para versionamento no GitHub

---

## 👨‍💻 Autor

**Raimundo Jairo da Silva Dias**  
📧 Email: **jairodias321@gmail.com**  
🎓 Estudante de Tecnologia e Programação  

---

## 📄 Licença

Este projeto é de uso educacional e livre para estudos, modificações e melhorias.
