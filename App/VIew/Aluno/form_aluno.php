<?php $model = isset($model) ? $model : new \App\Model\Aluno(); ?>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-6">

            <div class="card shadow-lg border-0">

                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">
                        <?= $model->Id ? "Editar Aluno" : "Cadastrar Aluno"; ?>
                    </h3>
                </div>

                <div class="card-body">

                    <form method="post" action="/aluno/cadastro">

                        <input type="hidden" name="id" value="<?= $model->Id ?>">

                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nome"
                                name="nome"
                                value="<?= $model->Nome ?>"
                                placeholder="Digite o nome do aluno"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="ra" class="form-label">RA</label>
                            <input
                                type="text"
                                class="form-control"
                                id="ra"
                                name="ra"
                                value="<?= $model->RA ?>"
                                placeholder="Digite o RA"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="curso" class="form-label">Curso</label>
                            <input
                                type="text"
                                class="form-control"
                                id="curso"
                                name="curso"
                                value="<?= $model->Curso ?>"
                                placeholder="Digite o curso"
                                required>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="/aluno" class="btn btn-outline-secondary">
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