<?php
?>
<div>
  <h1 class="text-3xl font-bold text-slate-800 sm:text-4xl lg:text-5xl">
    Bem-vindo ao Sistema Biblioteca 📚
  </h1>
  <p class="mt-3 text-base text-slate-600 sm:text-lg lg:text-xl">
    Gerencie alunos, livros, categorias, autores e empréstimos em um único lugar.
  </p>
</div>
<div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-3">
  <div class="rounded-2xl bg-white p-8 text-center shadow transition hover:shadow-md">
    <i class="bi bi-people text-5xl text-blue-600"></i>
    <h2 class="mt-5 text-2xl font-bold text-slate-800">Alunos</h2>
    <p class="mt-2 text-slate-500">Cadastro de alunos.</p>
    <a href="/aluno" class="mt-6 inline-block rounded-lg bg-blue-600 px-6 py-2 text-white transition hover:bg-blue-700">
      Acessar
    </a>
  </div>
  <div class="rounded-2xl bg-white p-8 text-center shadow transition hover:shadow-md">
    <i class="bi bi-book text-5xl text-green-600"></i>
    <h2 class="mt-5 text-2xl font-bold text-slate-800">Livros</h2>
    <p class="mt-2 text-slate-500">Gerencie os livros.</p>
    <a href="/livro" class="mt-6 inline-block rounded-lg bg-green-600 px-6 py-2 text-white transition hover:bg-green-700">
      Acessar
    </a>
  </div>
  <div class="rounded-2xl bg-white p-8 text-center shadow transition hover:shadow-md">
    <i class="bi bi-arrow-left-right text-5xl text-yellow-500"></i>
    <h2 class="mt-5 text-2xl font-bold text-slate-800">Empréstimos</h2>
    <p class="mt-2 text-slate-500">Controle de empréstimos.</p>
    <a href="/emprestimo" class="mt-6 inline-block rounded-lg bg-yellow-500 px-6 py-2 text-white transition hover:bg-yellow-600">
      Acessar
    </a>
  </div>
  <div class="rounded-2xl bg-white p-8 text-center shadow transition hover:shadow-md">
    <i class="bi bi-tags text-5xl text-purple-600"></i>
    <h2 class="mt-5 text-2xl font-bold text-slate-800">Categorias</h2>
    <p class="mt-2 text-slate-500">Organize os livros por categoria.</p>
    <a href="/categoria" class="mt-6 inline-block rounded-lg bg-purple-600 px-6 py-2 text-white transition hover:bg-purple-700">
      Acessar
    </a>
  </div>
  <div class="rounded-2xl bg-white p-8 text-center shadow transition hover:shadow-md">
    <i class="bi bi-pencil-square text-5xl text-cyan-600"></i>
    <h2 class="mt-5 text-2xl font-bold text-slate-800">Autores</h2>
    <p class="mt-2 text-slate-500">Cadastro de autores.</p>
    <a href="/autor" class="mt-6 inline-block rounded-lg bg-cyan-600 px-6 py-2 text-white transition hover:bg-cyan-700">
      Acessar
    </a>
  </div>
  <div class="rounded-2xl bg-white p-8 text-center shadow transition hover:shadow-md">
    <i class="bi bi-person-circle text-5xl text-red-500"></i>
    <h2 class="mt-5 text-2xl font-bold text-slate-800">Usuários</h2>
    <p class="mt-2 text-slate-500">Administração do sistema.</p>
    <a href="/usuario" class="mt-6 inline-block rounded-lg bg-red-600 px-6 py-2 text-white transition hover:bg-red-700">
      Acessar
    </a>
  </div>
</div>
<?php
