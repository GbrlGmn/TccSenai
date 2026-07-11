<?php $model = isset($model) ? $model : new \App\Model\Usuario(); ?>

<div class="container py-4">

    <div class="card shadow border-0 rounded-4">

        <div class="card-header bg-primary text-white">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">

                <div>
                    <h3 class="mb-1">
                        <i class="bi bi-people-fill"></i>
                        Lista de Usuarios
                    </h3>

                    <small class="text-white-50">
                        Gerencie todos os Usuarios cadastrados.
                    </small>
                </div>

                <a href="/usuario/cadastro"
                    class="btn btn-light fw-semibold">
                    <i class="bi bi-plus-circle"></i>
                    Novo Usuario
                </a>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover table-striped align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Senha</th>
                            <th class="text-center">Ações</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php if (count($model->rows) > 0): ?>

                            <?php foreach ($model->rows as $usuario): ?>

                                <tr>

                                    <td>
                                        <span class="badge bg-secondary">
                                            <?= $usuario->Id ?>
                                        </span>
                                    </td>

                                    <td class="fw-semibold">
                                        <?= $usuario->Nome ?>
                                    </td>

                                    <td>
                                        <?= $usuario->Email ?>
                                    </td>

                                    <td>
                                        <?= $usuario->Senha ?>
                                    </td>

                                    <td>

                                        <div class="d-grid d-md-flex justify-content-center gap-2">

                                            <a href="/usuario/cadastro?id=<?= $usuario->Id ?>"
                                                class="btn btn-warning btn-sm">

                                                <i class="bi bi-pencil-square"></i>
                                                Editar

                                            </a>

                                            <a href="/usuario/delete?id=<?= $usuario->Id ?>"
                                                class="btn btn-danger btn-sm"
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

                                <td colspan="4" class="text-center py-5">

                                    <i class="bi bi-database-x fs-1 text-secondary"></i>

                                    <h5 class="mt-3">
                                        Nenhum Usuario cadastrado
                                    </h5>

                                    <p class="text-muted">
                                        Clique em <strong>Novo Usuario</strong> para realizar o primeiro cadastro.
                                    </p>

                                </td>

                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>