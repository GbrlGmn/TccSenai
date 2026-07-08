<?php $model = isset($model) ? $model : new \App\Model\Emprestimo(); ?>

<div class="container py-5">

    <?php if (!empty($model->getErrors())): ?>
        <div class="alert alert-danger" role="alert">
            <?= $model->getErrors() ?>
        </div>
    <?php endif; ?>

    <div class="row justify-content-center">

        <div class="col-md-10 col-lg-8">

            <div class="card shadow-lg border-0">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">
                        <?= $model->Id ? "Editar Empréstimo" : "Cadastrar Empréstimo"; ?>
                    </h3>
                </div>

                <div class="card-body">

                    <form method="post" action="/emprestimo/cadastro">

                        <input type="hidden" name="id" value="<?= $model->Id ?>">

                        <div class="mb-3">
                            <label for="id_aluno" class="form-label">Aluno</label>
                            <select id="id_aluno" name="id_aluno" class="form-select" required>
                                <option value="">Selecione um aluno</option>
                                <?php foreach ($model->rows_alunos as $aluno): ?>
                                    <option value="<?= $aluno->Id ?>" <?= $aluno->Id == $model->Id_Aluno ? 'selected' : '' ?>>
                                        <?= $aluno->Nome ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="id_livro" class="form-label">Livro</label>
                            <select id="id_livro" name="id_livro" class="form-select" required>
                                <option value="">Selecione um livro</option>
                                <?php foreach ($model->rows_livros as $livro): ?>
                                    <option value="<?= $livro->Id ?>" <?= $livro->Id == $model->Id_Livro ? 'selected' : '' ?>>
                                        <?= $livro->Titulo ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="data_emprestimo" class="form-label">Data Empréstimo</label>
                            <input
                                type="date"
                                id="data_emprestimo"
                                name="data_emprestimo"
                                class="form-control"
                                value="<?= $model->Data_Emprestimo ?>"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="data_devolucao" class="form-label">Data Devolução</label>
                            <input
                                type="date"
                                id="data_devolucao"
                                name="data_devolucao"
                                class="form-control"
                                value="<?= $model->Data_Devolucao ?>">
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="/emprestimo" class="btn btn-outline-secondary">
                                Voltar
                            </a>

                            <button type="submit" class="btn btn-success">
                                Salvar
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>