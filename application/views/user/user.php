
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                <div class="card" id="floating-label">
                  <div class='card-body'>
                    <form>
                      <fieldset>
                        <legend>Usuários</legend>
                        <div class='form-group'>
                          <input type='hidden' name='Id' id='Id' value="<?= $login->data->Id ?>">
                        </div>
                        <div class='form-group'>
                          <label for='Nome'>Nome</label>
                          <input type='text' name='Nome' id='Nome' class='form-control' placeholder='Nome' value="<?= $login->data->Nome ?>" required disabled>
                        </div>
                        <div class='form-group'>
                          <label for='Sobrenome'>Sobrenome</label>
                          <input type='text' name='Sobrenome' id='Sobrenome' class='form-control' placeholder='Sobrenome' value="<?= $login->data->Sobrenome ?>" required>
                        </div>
                        <div class='form-group'>
                          <label for='DataNascimento'>Data Nascimento</label>
                          <input type='date' name='DataNascimento' id='DataNascimento' class='form-control' value="<?= $login->data->DataNascimento ?>" placeholder='Data Nascimento' required>
                        </div>
                        <div class='form-group'>
                          <label for='UrlFoto'>Foto</label>
                          <input type='text' name='UrlFoto' id='UrlFoto' class='form-control' value="<?= $login->data->UrlFoto ?>" placeholder='Foto' >
                        </div>
                        <div class='form-group'>
                          <label for='Email'>E-mail</label>
                          <input type='text' name='Email' id='Email' class='form-control' value="<?= $login->data->Email ?>" placeholder='E-mail' required disabled>
                        </div>
                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto'>Cancelar</button>
                        </div>
                      </fieldset>
                    </form>
                  </div>
                </div>
                </div><!-- /.section-block -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- /.wrapper -->
      </main><!-- /.app-main -->
