<?php
$model = isset($model) ? $model : new \App\Model\Usuario();
?>
<div class="space-y-6">
    <div class="rounded-3xl bg-white p-6 shadow-sm">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <div>
                <h3 class="text-2xl font-semibold text-slate-800">
                    <i class="bi bi-person-circle"></i>
                    Lista de Usuários
                </h3>
                <p class="mt-1 text-sm text-slate-500">
                    Gerencie todos os usuários cadastrados.
                </p>
            </div>
            <a href="/usuario/cadastro" class="inline-flex items-center gap-2 rounded-lg bg-blue-700 px-4 py-2 font-semibold text-white transition hover:bg-blue-800">
                <i class="bi bi-plus-circle"></i>
                Novo Usuário
            </a>
        </div>
    </div>
    <?php if (!empty($model->getErrors())): ?>
        <div class="rounded-3xl border border-red-200 bg-red-50 p-4 text-red-800 shadow-sm">
            <?= $model->getErrors() ?>
        </div>
    <?php endif; ?>
    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-slate-200">
                <thead class="bg-slate-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">Nome</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">Email</th>
                        <th class="px-6 py-3 text-center text-xs font-semibold uppercase tracking-wider text-slate-600">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100 bg-white">
                    <?php if (count($model->rows) > 0): ?>
                        <?php foreach ($model->rows as $usuario): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-sm font-semibold text-slate-700">
                                        <?= (int) $usuario->Id ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap font-semibold text-slate-800">
                                    <?= htmlspecialchars($usuario->Nome ?? '', ENT_QUOTES, 'UTF-8') ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-slate-600">
                                    <?= htmlspecialchars($usuario->Email ?? '', ENT_QUOTES, 'UTF-8') ?>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-wrap justify-center gap-2">
                                        <a href="/usuario/cadastro?id=<?= (int) $usuario->Id ?>"
                                            class="inline-flex items-center gap-2 rounded-lg bg-amber-500 px-3 py-2 text-sm font-semibold text-white transition hover:bg-amber-600">
                                            <i class="bi bi-pencil-square"></i>
                                            Editar
                                        </a>
                                        <a href="/usuario/delete?id=<?= (int) $usuario->Id ?>"
                                            class="inline-flex items-center gap-2 rounded-lg bg-red-600 px-3 py-2 text-sm font-semibold text-white transition hover:bg-red-700"
                                            onclick="return confirm('Deseja realmente excluir este usuário?')">
                                            <i class="bi bi-trash"></i>
                                            Excluir
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="px-6 py-12 text-center">
                                <i class="bi bi-database-x fs-1 text-slate-400"></i>
                                <h5 class="mt-3 font-semibold text-slate-700">
                                    Nenhum usuário cadastrado
                                </h5>
                                <p class="mt-1 text-sm text-slate-500">
                                    Clique em <strong>Novo Usuário</strong> para realizar o primeiro cadastro.
                                </p>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>