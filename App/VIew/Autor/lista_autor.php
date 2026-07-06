<div class="space-y-6">

    <div class="rounded-3xl bg-white p-6 shadow-sm">

        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">

            <div>
                <h3 class="text-2xl font-semibold text-slate-800">
                    <i class="bi bi-pencil-square"></i>
                    Lista de Autores
                </h3>

                <p class="mt-1 text-sm text-slate-500">
                    Gerencie todos os autores cadastrados.
                </p>
            </div>

            <a href="/autor/cadastro" class="inline-flex items-center gap-2 rounded-lg bg-blue-700 px-4 py-2 font-semibold text-white transition hover:bg-blue-800">
                <i class="bi bi-plus-circle"></i>
                Novo Autor
            </a>

        </div>

    </div>

    <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm">

        <div class="overflow-x-auto">

            <table class="min-w-full divide-y divide-slate-200">

                <thead class="bg-slate-50">

                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">ID</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">Nome</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">Data Nasc.</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-slate-600">CPF</th>
                        <th class="px-6 py-3 text-center text-xs font-semibold uppercase tracking-wider text-slate-600">Ações</th>
                    </tr>

                </thead>

                <tbody class="divide-y divide-slate-100 bg-white">

                    <?php if (count($lista) > 0): ?>

                        <?php foreach ($lista as $autor): ?>

                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex rounded-full bg-slate-100 px-3 py-1 text-sm font-semibold text-slate-700">
                                        <?= $autor->Id ?>
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap font-semibold text-slate-800">
                                    <?= $autor->Nome ?>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-slate-600">
                                    <?= $autor->DataNasc ?>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-slate-600">
                                    <?= $autor->CPF ?>
                                </td>

                                <td class="px-6 py-4">

                                    <div class="flex flex-wrap justify-center gap-2">

                                        <a href="/autor/cadastro?id=<?= $autor->Id ?>"
                                            class="inline-flex items-center gap-2 rounded-lg bg-amber-500 px-3 py-2 text-sm font-semibold text-white transition hover:bg-amber-600">

                                            <i class="bi bi-pencil-square"></i>
                                            Editar

                                        </a>

                                        <a href="/autor/delete?id=<?= $autor->Id ?>"
                                            class="inline-flex items-center gap-2 rounded-lg bg-red-600 px-3 py-2 text-sm font-semibold text-white transition hover:bg-red-700"
                                            onclick="return confirm('Deseja realmente excluir este autor?')">

                                            <i class="bi bi-trash"></i>
                                            Excluir

                                        </a>

                                    </div>

                                </td>

                            </tr>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <tr>

                            <td colspan="5" class="px-6 py-12 text-center">

                                <i class="bi bi-database-x fs-1 text-slate-400"></i>

                                <h5 class="mt-3 font-semibold text-slate-700">
                                    Nenhum autor cadastrado
                                </h5>

                                <p class="mt-1 text-sm text-slate-500">
                                    Clique em <strong>Novo Autor</strong> para realizar o primeiro cadastro.
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

</div>