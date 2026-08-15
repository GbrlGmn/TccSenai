<?php
?>
<footer class="bg-white border-t">
    <div class="flex justify-between px-8 py-5 text-gray-500">
        <div>
            <?php
            ?>
            © <?= date('Y') ?>
            SisBiblioteca.
            Desenvolvido por Gabriel Gimenes.
        </div>
        <div>
            Versão 1.0.0
        </div>
    </div>
</footer>
<?php
?>
<script>
    (function() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebarOverlay');
        const openBtn = document.getElementById('sidebarToggle');
        const closeBtn = document.getElementById('sidebarClose');

        function abrirMenu() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
        }

        function fecharMenu() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
        }

        openBtn?.addEventListener('click', abrirMenu);
        closeBtn?.addEventListener('click', fecharMenu);
        overlay?.addEventListener('click', fecharMenu);
    })();
</script>
</body>

</html>
<?php
