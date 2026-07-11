<?php $model = isset($model) ? $model : new \App\Model\Categoria(); ?>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            <div class="card shadow-lg border-0">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">
                        <?= $model->Id ? "Editar Categoria" : "Cadastrar Categoria"; ?>
                    </h3>
                </div>

                <div class="card-body">

                    <form method="post" action="/categoria/cadastro">

                        <input type="hidden" name="id" value="<?= $model->Id ?>">



                        <div class="mb-3">
                            <label for="desc" class="form-label">Descrição</label>
                            <textarea
                                class="form-control"
                                id="desc"
                                name="desc"
                                placeholder="Digite a descrição da categoria"
                                rows="4"
                                required><?= $model->Descricao ?></textarea>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="/categoria" class="btn btn-outline-secondary">
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