<?php
$model = isset($model) ? $model : new \App\Model\Usuario();
?>
<div class="mx-auto max-w-2xl space-y-6">
    <?php if (!empty($model->getErrors())): ?>
        <div class="rounded-3xl border border-red-200 bg-red-50 p-4 text-red-800 shadow-sm">
            <?= $model->getErrors() ?>
        </div>
    <?php endif; ?>
    <div class="rounded-3xl bg-white p-6 shadow-sm sm:p-8">
        <h3 class="mb-6 text-2xl font-semibold text-slate-800">
            <i class="bi bi-person-circle"></i>
            <?= $model->Id ? "Editar Usuário" : "Cadastrar Usuário"; ?>
        </h3>
        <form method="post" action="/usuario/cadastro" class="space-y-5">
            <input type="hidden" name="id" value="<?= (int) $model->Id ?>">
            <div>
                <label for="nome" class="mb-1.5 block text-sm font-medium text-slate-700">Nome</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    value="<?= htmlspecialchars($model->Nome ?? '', ENT_QUOTES, 'UTF-8') ?>"
                    placeholder="Digite o nome do usuário"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 placeholder:text-slate-400 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
            </div>
            <div>
                <label for="email" class="mb-1.5 block text-sm font-medium text-slate-700">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= htmlspecialchars($model->Email ?? '', ENT_QUOTES, 'UTF-8') ?>"
                    placeholder="Digite o e-mail"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 placeholder:text-slate-400 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
            </div>
            <?php
            ?>
            <div>
                <label for="senha" class="mb-1.5 block text-sm font-medium text-slate-700">Senha</label>
                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="<?= $model->Id ? 'Digite uma nova senha' : 'Digite a senha' ?>"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 placeholder:text-slate-400 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
            </div>
            <div class="flex items-center justify-between pt-2">
                <a href="/usuario" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-5 py-2.5 font-semibold text-slate-700 transition hover:bg-slate-50">
                    Voltar
                </a>
                <button type="submit" class="inline-flex items-center gap-2 rounded-lg bg-blue-700 px-5 py-2.5 font-semibold text-white transition hover:bg-blue-800">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>