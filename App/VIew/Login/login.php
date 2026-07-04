<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Biblioteca | Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

    <div class="min-vh-100 d-flex justify-content-center align-items-center">

        <div class="card border-0 shadow-lg rounded-4 p-4" style="max-width: 430px; width:100%;">

            <div class="text-center mb-4">

                <div class="bg-success text-white rounded-circle d-inline-flex justify-content-center align-items-center mb-3"
                    style="width:70px;height:70px;font-size:30px;">
                    📚
                </div>

                <h2 class="fw-bold">Sistema Biblioteca</h2>
                <p class="text-muted mb-0">
                    Faça login para continuar
                </p>

            </div>

            <?php if (!empty($erro)) : ?>
                <div class="alert alert-danger">
                    <?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?>
                </div>
            <?php endif; ?>

            <form method="post" action="/login">

                <div class="mb-3">

                    <label for="email" class="form-label fw-semibold">
                        E-mail
                    </label>

                    <input
                        type="email"
                        class="form-control rounded-3 py-2"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                        value="<?= htmlspecialchars($model->Email ?? '', ENT_QUOTES, 'UTF-8') ?>">

                </div>

                <div class="mb-3">

                    <label for="senha" class="form-label fw-semibold">
                        Senha
                    </label>

                    <input
                        type="password"
                        class="form-control rounded-3 py-2"
                        id="senha"
                        name="senha"
                        placeholder="Digite sua senha">

                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div class="form-check">

                        <input
                            class="form-check-input"
                            type="checkbox"
                            id="lembrar"
                            name="lembrar">

                        <label class="form-check-label" for="lembrar">
                            Lembrar usuário
                        </label>

                    </div>

                    <a href="#" class="text-success text-decoration-none small">
                        Esqueci minha senha
                    </a>

                </div>

                <button class="btn btn-success w-100 py-2 rounded-3 fw-semibold">
                    Entrar
                </button>

            </form>

        </div>

    </div>

</body>

</html>