<?php
$model = isset($model) ? $model : new \App\Model\Livro();
?>
<div class="mx-auto max-w-3xl space-y-6">
    <?php if (!empty($model->getErrors())): ?>
        <div class="rounded-3xl border border-red-200 bg-red-50 p-4 text-red-800 shadow-sm">
            <?= $model->getErrors() ?>
        </div>
    <?php endif; ?>
    <div class="rounded-3xl bg-white p-6 shadow-sm sm:p-8">
        <h3 class="mb-6 text-2xl font-semibold text-slate-800">
            <i class="bi bi-book"></i>
            <?= $model->Id ? 'Editar Livro' : 'Cadastrar Livro' ?>
        </h3>
        <form method="post" action="/livro/cadastro" class="space-y-5">
            <input type="hidden" name="id" value="<?= (int) $model->Id ?>">
            <div>
                <label for="titulo" class="mb-1.5 block text-sm font-medium text-slate-700">Título</label>
                <input
                    type="text"
                    id="titulo"
                    name="titulo"
                    value="<?= htmlspecialchars($model->Titulo ?? '', ENT_QUOTES, 'UTF-8') ?>"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
            </div>
            <?php
            ?>
            <div>
                <label for="id_categoria" class="mb-1.5 block text-sm font-medium text-slate-700">Categoria</label>
                <select
                    id="id_categoria"
                    name="id_categoria"
                    class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
                    <option value="">-- Selecione --</option>
                    <?php foreach ($model->rows_categorias ?? [] as $cat): ?>
                        <option value="<?= (int) $cat->Id ?>" <?= ($model->Id_Categoria == $cat->Id) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($cat->Descricao ?? '', ENT_QUOTES, 'UTF-8') ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php
            ?>
            <div>
                <label for="autor" class="mb-1.5 block text-sm font-medium text-slate-700">Autores</label>
                <select
                    id="autor"
                    name="autor[]"
                    multiple
                    class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100">
                    <?php foreach ($model->rows_autores ?? [] as $autor): ?>
                        <option value="<?= (int) $autor->Id ?>" <?= in_array($autor->Id, $model->Id_Autores ?? []) ? 'selected' : '' ?>>
                            <?= htmlspecialchars($autor->Nome ?? '', ENT_QUOTES, 'UTF-8') ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <p class="mt-1 text-xs text-slate-500">Segure Ctrl (ou Cmd) para selecionar mais de um autor.</p>
            </div>
            <?php
            ?>
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div>
                    <label for="isbn" class="mb-1.5 block text-sm font-medium text-slate-700">ISBN</label>
                    <input
                        type="text"
                        id="isbn"
                        name="isbn"
                        value="<?= htmlspecialchars($model->Isbn ?? '', ENT_QUOTES, 'UTF-8') ?>"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100">
                </div>
                <div>
                    <label for="ano" class="mb-1.5 block text-sm font-medium text-slate-700">Ano</label>
                    <input
                        type="text"
                        id="ano"
                        name="ano"
                        value="<?= htmlspecialchars($model->Ano ?? '', ENT_QUOTES, 'UTF-8') ?>"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100">
                </div>
                <div>
                    <label for="editora" class="mb-1.5 block text-sm font-medium text-slate-700">Editora</label>
                    <input
                        type="text"
                        id="editora"
                        name="editora"
                        value="<?= htmlspecialchars($model->Editora ?? '', ENT_QUOTES, 'UTF-8') ?>"
                        class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100">
                </div>
            </div>
            <div class="flex items-center justify-between pt-2">
                <a href="/livro" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-5 py-2.5 font-semibold text-slate-700 transition hover:bg-slate-50">
                    Voltar
                </a>
                <button type="submit" class="inline-flex items-center gap-2 rounded-lg bg-blue-700 px-5 py-2.5 font-semibold text-white transition hover:bg-blue-800">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>