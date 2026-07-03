<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Biblioteca | Cadastro de Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <?php include VIEWS . '/Includes/menu.php';
    $model = isset($model) ? $model : new \App\Model\Usuario(); ?>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card shadow-lg border-0">

                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">
                            <?= $model->Id ? "Editar Usuario" : "Cadastrar Usuario"; ?>
                        </h3>
                    </div>

                    <div class="card-body">

                        <form method="post" action="/usuario/cadastro">

                            <input type="hidden" name="id" value="<?= $model->Id ?>">

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nome"
                                    name="nome"
                                    value="<?= $model->Nome ?>"
                                    placeholder="Digite o nome do usuario"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="ra" class="form-label">Email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="email"
                                    value="<?= $model->Email ?>"
                                    placeholder="Digite o Email"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="curso" class="form-label">Senha</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    id="senha"
                                    name="senha"
                                    value="<?= $model->Senha ?>"
                                    placeholder="Digite o senha"
                                    required>
                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="/usuario" class="btn btn-outline-secondary">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>