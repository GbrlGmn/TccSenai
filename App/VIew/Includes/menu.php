<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>SisBiblioteca</title>
</head>

<body class="bg-gray-100">

    <nav class="bg-blue-700 shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">

                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 text-white text-2xl font-bold">
                    <i class="bi bi-book-half"></i>
                    SisBiblioteca
                </a>

                <!-- Menu -->
                <div class="hidden md:flex items-center space-x-2">

                    <a href="/aluno"
                        class="text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        <i class="bi bi-people"></i> Alunos
                    </a>

                    <a href="/livro"
                        class="text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        <i class="bi bi-book"></i> Livros
                    </a>

                    <a href="/emprestimo"
                        class="text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        <i class="bi bi-arrow-left-right"></i> Empréstimos
                    </a>

                    <a href="/categoria"
                        class="text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        <i class="bi bi-tags"></i> Categorias
                    </a>

                    <a href="/autor"
                        class="text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        <i class="bi bi-pencil-square"></i> Autores
                    </a>

                    <a href="/usuario"
                        class="text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                        <i class="bi bi-person-circle"></i> Usuários
                    </a>

                </div>

            </div>
        </div>
    </nav>

</body>

</html>