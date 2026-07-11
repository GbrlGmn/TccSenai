<?php $model = isset($model) ? $model : new \App\Model\Livro(); ?>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-10 col-lg-8">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">
                        <?= $model->Id ? 'Editar Livro' : 'Cadastrar Livro' ?>
                    </h3>
                </div>

                <div class="card-body">
                    <form method="post" action="/livro/cadastro">

                        <input type="hidden" name="id" value="<?= $model->Id ?>">

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título</label>
                            <input type="text" id="titulo" name="titulo" class="form-control" value="<?= $model->Titulo ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="id_categoria" class="form-label">Categoria</label>
                            <select id="id_categoria" name="id_categoria" class="form-select" required>
                                <option value="">-- Selecione --</option>
                                <?php foreach ($model->rows_categorias ?? [] as $cat): ?>
                                    <option value="<?= $cat->Id ?>" <?= ($model->Id_Categoria == $cat->Id) ? 'selected' : '' ?>><?= $cat->Descricao ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="autor" class="form-label">Autores</label>
                            <select id="autor" name="autor[]" class="form-select" multiple>
                                <?php foreach ($model->rows_autores ?? [] as $autor): ?>
                                    <option value="<?= $autor->Id ?>" <?= in_array($autor->Id, $model->Id_Autores ?? []) ? 'selected' : '' ?>><?= $autor->Nome ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="isbn" class="form-label">ISBN</label>
                                <input type="text" id="isbn" name="isbn" class="form-control" value="<?= $model->Isbn ?>">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="ano" class="form-label">Ano</label>
                                <input type="text" id="ano" name="ano" class="form-control" value="<?= $model->Ano ?>">
                            </div>

                            <div class="col-md-4 mb-3">
                                <label for="editora" class="form-label">Editora</label>
                                <input type="text" id="editora" name="editora" class="form-control" value="<?= $model->Editora ?>">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="/livro" class="btn btn-outline-secondary">Voltar</a>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>

    </div>

</div>