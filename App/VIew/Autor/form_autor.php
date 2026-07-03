<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Biblioteca | Cadastro de Autor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <?php include VIEWS . '/Includes/menu.php';
    $model = isset($model) ? $model : new \App\Model\Autor(); ?>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8 col-lg-6">

                <div class="card shadow-lg border-0">

                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">
                            <?= $model->Id ? "Editar Autor" : "Cadastrar Autor"; ?>
                        </h3>
                    </div>

                    <div class="card-body">

                        <form method="post" action="/autor/cadastro">

                            <input type="hidden" name="id" value="<?= $model->Id ?>">

                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="nome"
                                    name="nome"
                                    value="<?= $model->Nome ?>"
                                    placeholder="Digite o nome do autor"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="data" class="form-label">Data de Nascimento</label>
                                <input
                                    type="date"
                                    class="form-control"
                                    id="data"
                                    name="data"
                                    value="<?= $model->DataNasc ?>"
                                    required>
                            </div>

                            <div class="mb-4">
                                <label for="cpf" class="form-label">CPF</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="cpf"
                                    name="cpf"
                                    value="<?= $model->CPF ?>"
                                    placeholder="Digite o CPF"
                                    required>
                            </div>

                            <div class="d-flex justify-content-between">

                                <a href="/autor" class="btn btn-outline-secondary">
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