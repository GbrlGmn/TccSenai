<?php
$rotaAtual = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
function isRotaAtiva(string $rota, string $rotaAtual): bool
{
    return $rota === '/' ? $rotaAtual === '/' : str_starts_with($rotaAtual, $rota);
}
function classesLinkSidebar(string $rota, string $rotaAtual): string
{
    $base = "flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium transition";
    return isRotaAtiva($rota, $rotaAtual)
        ? "$base bg-blue-800 text-white"
        : "$base text-blue-100 hover:bg-blue-800 hover:text-white";
}
?>
<?php
?>
<aside
    id="sidebar"
    class="fixed inset-y-0 left-0 z-[60] flex h-screen w-72 flex-col bg-blue-900 text-white -translate-x-full transition-transform duration-300 lg:translate-x-0">
    <div class="flex items-center justify-between border-b border-blue-800 p-6">
        <div class="flex items-center gap-3">
            <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-white text-blue-900">
                <i class="bi bi-book-half text-2xl"></i>
            </div>
            <div>
                <h2 class="text-2xl font-bold">
                    SisBiblioteca
                </h2>
                <small class="text-blue-200">
                    Sistema de Gerenciamento
                </small>
            </div>
        </div>
        <?php
        ?>
        <button
            id="sidebarClose"
            type="button"
            class="rounded-lg p-2 text-blue-100 transition hover:bg-blue-800 lg:hidden"
            aria-label="Fechar menu">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>
    <?php
    ?>
    <nav class="flex-1 overflow-y-auto px-3 py-6">
        <div>
            <p class="mb-3 px-4 text-xs font-semibold uppercase tracking-[0.2em] text-blue-300">
                Menu
            </p>
            <?php
            ?>
            <a href="/" data-nav-link class="<?= classesLinkSidebar('/', $rotaAtual) ?>">
                <i class="bi bi-house"></i>
                Dashboard
            </a>
            <a href="/aluno" data-nav-link class="<?= classesLinkSidebar('/aluno', $rotaAtual) ?>">
                <i class="bi bi-people"></i>
                Alunos
            </a>
            <a href="/livro" data-nav-link class="<?= classesLinkSidebar('/livro', $rotaAtual) ?>">
                <i class="bi bi-book"></i>
                Livros
            </a>
            <a href="/emprestimo" data-nav-link class="<?= classesLinkSidebar('/emprestimo', $rotaAtual) ?>">
                <i class="bi bi-arrow-left-right"></i>
                Empréstimos
            </a>
            <a href="/categoria" data-nav-link class="<?= classesLinkSidebar('/categoria', $rotaAtual) ?>">
                <i class="bi bi-tags"></i>
                Categorias
            </a>
            <a href="/autor" data-nav-link class="<?= classesLinkSidebar('/autor', $rotaAtual) ?>">
                <i class="bi bi-pencil-square"></i>
                Autores
            </a>
            <a href="/usuario" data-nav-link class="<?= classesLinkSidebar('/usuario', $rotaAtual) ?>">
                <i class="bi bi-person-circle"></i>
                Usuários
            </a>
        </div>
        <?php
        ?>
        <div class="mt-8">
            <hr class="mb-5 border-blue-800">
            <p class="mb-3 px-4 text-xs font-semibold uppercase tracking-[0.2em] text-blue-300">
                Sistema
            </p>
            <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-blue-100 transition hover:bg-blue-800 hover:text-white">
                <i class="bi bi-bar-chart"></i>
                Relatórios
            </a>
            <a href="#" class="flex items-center gap-3 rounded-lg px-4 py-3 text-sm font-medium text-blue-100 transition hover:bg-blue-800 hover:text-white">
                <i class="bi bi-gear"></i>
                Configurações
            </a>
        </div>
        <?php
        ?>
        <div class="mt-auto pt-6">
            <hr class="border-blue-800">
            <a href="/login" class="flex items-center gap-3 rounded-lg px-4 py-4 text-sm font-medium text-blue-100 transition hover:bg-red-700 hover:text-white">
                <i class="bi bi-box-arrow-right"></i>
                Sair do sistema
            </a>
        </div>
    </nav>
</aside>
<?php
?>
<div id="sidebarOverlay" class="fixed inset-0 z-40 hidden bg-slate-900/60 lg:hidden"></div>
<?php
