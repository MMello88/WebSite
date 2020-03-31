    </div><!-- /.app -->

    <!-- BEGIN BASE JS -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="<?= base_url('assets/vendor/pace/pace.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/stacked-menu/stacked-menu.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script> 
    <script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/extensions/buttons/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/extensions/buttons/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/extensions/buttons/buttons.print.min.js') ?>"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?= base_url('assets/javascript/theme.min.js') ?>"></script>
    <?php foreach($scripts as $script): ?>
    <script src="<?= $script ?>"></script> 
    <?php endforeach; ?> <!-- END THEME JS -->
  </body>
</html>