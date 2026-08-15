<?php
$usuarioLogado = $_SESSION['usuario_logado'] ?? null;
?>
<?php
?>
<header class="sticky top-0 z-30 h-20 bg-white shadow">
    <div class="flex h-full items-center justify-between px-4 sm:px-8">
        <div class="flex items-center gap-3">
            <?php
            ?>
            <button
                id="sidebarToggle"
                type="button"
                class="rounded-lg p-2 text-gray-700 transition hover:bg-slate-100 lg:hidden"
                aria-label="Abrir menu">
                <i class="bi bi-list text-2xl"></i>
            </button>
            <?php
            ?>
            <div class="hidden sm:block">
                <h5 class="text-lg font-semibold text-slate-800">
                    Painel principal
                </h5>
                <p class="text-sm text-gray-500">
                    Bem-vindo ao SisBiblioteca
                </p>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <?php
            ?>
            <div class="text-end">
                <h6 class="font-bold text-slate-800">
                    <?= htmlspecialchars($usuarioLogado->Nome ?? 'Usuário', ENT_QUOTES, 'UTF-8') ?>
                </h6>
                <small class="text-gray-500">
                    <?= htmlspecialchars($usuarioLogado->Email ?? '', ENT_QUOTES, 'UTF-8') ?>
                </small>
            </div>
            <?php
            ?>
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-blue-700 text-white">
                <i class="bi bi-person-fill fs-5"></i>
            </div>
        </div>
    </div>
</header>
<?php
