<?php
$model = isset($model) ? $model : new \App\Model\Emprestimo();
?>
<div class="mx-auto max-w-2xl space-y-6">
    <?php if (!empty($model->getErrors())): ?>
        <div class="rounded-3xl border border-red-200 bg-red-50 p-4 text-red-800 shadow-sm">
            <?= $model->getErrors() ?>
        </div>
    <?php endif; ?>
    <div class="rounded-3xl bg-white p-6 shadow-sm sm:p-8">
        <h3 class="mb-6 text-2xl font-semibold text-slate-800">
            <i class="bi bi-journal-bookmark-fill"></i>
            <?= $model->Id ? "Editar Empréstimo" : "Cadastrar Empréstimo"; ?>
        </h3>
        <form method="post" action="/emprestimo/cadastro" class="space-y-5">
            <input type="hidden" name="id" value="<?= (int) $model->Id ?>">
            <div>
                <label for="id_aluno" class="mb-1.5 block text-sm font-medium text-slate-700">Aluno</label>
                <select
                    id="id_aluno"
                    name="id_aluno"
                    class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
                    <option value="">Selecione um aluno</option>
                    <?php foreach ($model->rows_alunos as $aluno): ?>
                        <option value="<?= (int) $aluno->Id ?>" <?= $aluno->Id == $model->Id_Aluno ? 'selected' : '' ?>>
                            <?= htmlspecialchars($aluno->Nome ?? '', ENT_QUOTES, 'UTF-8') ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="id_livro" class="mb-1.5 block text-sm font-medium text-slate-700">Livro</label>
                <select
                    id="id_livro"
                    name="id_livro"
                    class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
                    <option value="">Selecione um livro</option>
                    <?php foreach ($model->rows_livros as $livro): ?>
                        <option value="<?= (int) $livro->Id ?>" <?= $livro->Id == $model->Id_Livro ? 'selected' : '' ?>>
                            <?= htmlspecialchars($livro->Titulo ?? '', ENT_QUOTES, 'UTF-8') ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="data_emprestimo" class="mb-1.5 block text-sm font-medium text-slate-700">Data Empréstimo</label>
                <input
                    type="date"
                    id="data_emprestimo"
                    name="data_emprestimo"
                    value="<?= htmlspecialchars($model->Data_Emprestimo ?? '', ENT_QUOTES, 'UTF-8') ?>"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
            </div>
            <div>
                <label for="data_devolucao" class="mb-1.5 block text-sm font-medium text-slate-700">Data Devolução</label>
                <input
                    type="date"
                    id="data_devolucao"
                    name="data_devolucao"
                    value="<?= htmlspecialchars($model->Data_Devolucao ?? '', ENT_QUOTES, 'UTF-8') ?>"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100">
            </div>
            <div class="flex items-center justify-between pt-2">
                <a href="/emprestimo" class="inline-flex items-center gap-2 rounded-lg border border-slate-300 bg-white px-5 py-2.5 font-semibold text-slate-700 transition hover:bg-slate-50">
                    Voltar
                </a>
                <button type="submit" class="inline-flex items-center gap-2 rounded-lg bg-blue-700 px-5 py-2.5 font-semibold text-white transition hover:bg-blue-800">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>