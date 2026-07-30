# Sistema de Biblioteca Escolar

Sistema de gerenciamento de biblioteca desenvolvido em PHP, aplicando o padrão de arquitetura MVC (Model-View-Controller) com camada de acesso a dados via DAO (Data Access Object). Projeto desenvolvido como Trabalho de Conclusão de Curso (TCC) — SENAI.

📖 Sobre o projeto

O sistema permite o controle de empréstimos de livros em uma biblioteca, gerenciando alunos, autores, categorias, livros e usuários, com autenticação de login para acesso ao sistema.

✨ Funcionalidades
Gerenciamento de Alunos — cadastro, edição, listagem e exclusão
Gerenciamento de Autores — CRUD completo
Gerenciamento de Categorias — organização dos livros por categoria
Gerenciamento de Livros — cadastro e controle do acervo
Empréstimos — registro e controle de empréstimos de livros
Usuários e Login — autenticação e controle de acesso ao sistema
🛠️ Tecnologias utilizadas
PHP — linguagem principal do backend
MVC — padrão arquitetural (Model / View / Controller)
DAO — camada de abstração de acesso ao banco de dados
Tailwind CSS — estilização da interface
MySQL — banco de dados (via config.php)
📁 Estrutura do projeto
├── Controller/         # Controladores da aplicação
├── DAO/                # Camada de acesso a dados (Data Access Object)
├── Model/              # Entidades do sistema
│   ├── Aluno.php
│   ├── Autor.php
│   ├── Categoria.php
│   ├── Emprestimo.php
│   ├── Livro.php
│   ├── Login.php
│   ├── Model.php       # Classe base das entidades
│   └── Usuario.php
├── View/                # Telas e templates da aplicação
├── autoload.php         # Autoload das classes do projeto
├── config.php           # Configurações de conexão com o banco de dados
├── index.php            # Ponto de entrada da aplicação
└── routes.php           # Definição das rotas do sistema
🚀 Como executar o projeto
Pré-requisitos
PHP 7.4 ou superior
Servidor local (XAMPP, WAMP, Laragon ou similar)
MySQL
Passo a passo
Clone o repositório
bash
   git clone <url-do-repositorio>
Coloque o projeto na pasta do seu servidor local (ex: htdocs, no caso do XAMPP)
Crie o banco de dados e configure as credenciais em config.php
Acesse o sistema pelo navegador, ex:
   http://localhost/nome-do-projeto/index.php
🏗️ Arquitetura

O projeto segue a separação de responsabilidades do padrão MVC:

Model — representa as entidades e regras de negócio do sistema
View — responsável pela apresentação e interface com o usuário
Controller — recebe as requisições, aciona os Models/DAOs e retorna as Views
DAO — isola a lógica de acesso ao banco de dados, mantendo os Models livres de SQL
👤 Autor:

Gabriel Eduardo Gimenes da Cruz
Junior Feliciano

Projeto desenvolvido como Trabalho de Conclusão de Curso (TCC) — SENAI.

📄 Licença

Este projeto é de uso acadêmico.
