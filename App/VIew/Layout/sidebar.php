<aside
    id="sidebar"
    class="fixed top-0 left-0 z-50 h-screen w-72 bg-blue-900 text-white transform -translate-x-full lg:translate-x-0 transition-transform duration-300">

    <div class="p-6 border-b border-blue-800">

        <div class="flex items-center gap-3">

            <div class="w-12 h-12 rounded-lg bg-white text-blue-900 flex items-center justify-center">

                <i class="bi bi-book-half text-2xl"></i>

            </div>

            <div>

                <h2 class="font-bold text-2xl">
                    SisBiblioteca
                </h2>

                <small class="text-blue-200">
                    Sistema de Gerenciamento
                </small>

            </div>

        </div>

    </div>

    <nav class="mt-8 flex flex-col h-[calc(100vh-120px)]">

        <div>

            <p class="px-6 mb-3 text-xs uppercase text-blue-300 font-semibold">
                Menu
            </p>

            <a href="/" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-house"></i>
                Dashboard
            </a>

            <a href="/aluno" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-people"></i>
                Alunos
            </a>

            <a href="/livro" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-book"></i>
                Livros
            </a>

            <a href="/emprestimo" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-arrow-left-right"></i>
                Empréstimos
            </a>

            <a href="/categoria" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-tags"></i>
                Categorias
            </a>

            <a href="/autor" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-pencil-square"></i>
                Autores
            </a>

            <a href="/usuario" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-person-circle"></i>
                Usuários
            </a>

        </div>

        <div class="mt-8">

            <hr class="border-blue-800 mb-5">

            <p class="px-6 mb-3 text-xs uppercase text-blue-300 font-semibold">
                Sistema
            </p>

            <a href="#" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-bar-chart"></i>
                Relatórios
            </a>

            <a href="#" class="flex items-center gap-3 px-6 py-3 hover:bg-blue-800">
                <i class="bi bi-gear"></i>
                Configurações
            </a>

        </div>

        <div class="mt-auto">

            <hr class="border-blue-800">

            <a href="#" class="flex items-center gap-3 px-6 py-4 hover:bg-red-700">
                <i class="bi bi-box-arrow-right"></i>
                Sair do sistema
            </a>

        </div>

    </nav>

</aside>