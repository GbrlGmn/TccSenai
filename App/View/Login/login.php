<?php
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Biblioteca | Login</title>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>📚</text></svg>">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex min-h-screen items-center justify-center bg-slate-100 p-4">
    <div class="w-full max-w-md rounded-3xl bg-white p-8 shadow-xl">
        <div class="mb-8 text-center">
            <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-900 text-3xl">
                📚
            </div>
            <h1 class="text-2xl font-bold text-slate-800">Sistema Biblioteca</h1>
            <p class="mt-1 text-sm text-slate-500">Faça login para continuar</p>
        </div>
        <?php
        ?>
        <?php if (!empty($erro)) : ?>
            <div class="mb-5 rounded-lg border border-red-200 bg-red-50 p-3 text-sm text-red-700">
                <?php
                ?>
                <?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>
        <form method="post" action="/login" class="space-y-5">
            <div>
                <label for="email" class="mb-1.5 block text-sm font-medium text-slate-700">E-mail</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Digite seu e-mail"
                    value="<?= htmlspecialchars($model->Email ?? '', ENT_QUOTES, 'UTF-8') ?>"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 placeholder:text-slate-400 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required
                    autofocus>
            </div>
            <?php
            ?>
            <div>
                <label for="senha" class="mb-1.5 block text-sm font-medium text-slate-700">Senha</label>
                <input
                    type="password"
                    id="senha"
                    name="senha"
                    placeholder="Digite sua senha"
                    class="w-full rounded-lg border border-slate-300 px-4 py-2.5 text-slate-800 placeholder:text-slate-400 focus:border-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-100"
                    required>
            </div>
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-slate-600">
                    <input type="checkbox" name="lembrar" class="rounded border-slate-300 text-blue-700 focus:ring-blue-500">
                    Lembrar usuário
                </label>
                <a href="#" class="font-medium text-blue-700 hover:underline">
                    Esqueci minha senha
                </a>
            </div>
            <button type="submit" class="w-full rounded-lg bg-blue-700 py-2.5 font-semibold text-white transition hover:bg-blue-800">
                Entrar
            </button>
        </form>
    </div>
</body>

</html>
<?php
