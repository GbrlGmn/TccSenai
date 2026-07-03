<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Biblioteca | Cadastro de Categoria</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <?php include VIEWS . '/Includes/menu.php'; 
    $model = isset($model) ? $model : new \App\Model\Categoria();?>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>