
    <!-- .app-main -->
    <main class='app-main'>
      <!-- .wrapper -->
      <div class='wrapper'>
        <!-- .page -->
        <div class='page'>
          <!-- .page-inner -->
          <div class='page-inner'>
            <!-- .page-section -->
            <div class='page-section'>
              <!-- .section-block -->
              <div class='section-block'>            
                <!-- .page-title-bar -->
                <header class='page-title-bar'>
                  <!-- page title stuff goes here -->
                  <h1 class='page-title'> Abertura do Bloco A </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regsa001efdc/create')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar novo Registro</legend> <!-- .form-group -->
                        <div class='form-group'>
                          <label for='tf1'>Email address</label> <input type='email' class='form-control' id='tf1' aria-describedby='tf1Help' placeholder='e.g. johndoe@looper.com'> <small id='tf1Help' class='form-text text-muted'>We'll never share your email with anyone else.</small>
                        </div><!-- /.form-group -->
                        
                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regsa001efdc') ?>'">Cancelar</button>
                        </div>
                      </fieldset><!-- /.fieldset -->
                    <?= form_close(); ?><!-- /.form -->
                  </div><!-- /.card-body -->
                </div><!-- /.base-style -->
              </div><!-- /.section-block -->
            </div><!-- /.page-section -->
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
<script>
  var url_get = '<?= base_url('regsa001efdc/create); ?>';
</script>
