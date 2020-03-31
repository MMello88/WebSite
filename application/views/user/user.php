      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
          <?php if($response->method !== "GET"): ?>
            <?php if($response->status == "FALSE"): ?>
            <!-- .page-message -->
            <div class="page-message bg-warning" role="alert">
              <span class="mr-5"><?= $response->message ?></span> <a href="#" class="btn btn-sm btn-icon btn-warning" aria-label="Close" onclick="$(this).parent().fadeOut()"><span aria-hidden="true"><i class="fa fa-times"></i></span></a>
            </div><!-- /.page-message -->
            <?php else: ?>
            <!-- .page-message -->
            <div class="page-message bg-success" role="alert">
              <span class="mr-5"><?= $response->message ?></span> <a href="#" class="btn btn-sm btn-icon btn-success" aria-label="Close" onclick="$(this).parent().fadeOut()"><span aria-hidden="true"><i class="fa fa-times"></i></span></a>
            </div><!-- /.page-message -->    
            <?php endif; ?>
          <?php else: ?>
            <?php if($response->status == "FALSE"): ?>
            <!-- .page-message -->
            <div class="page-message bg-warning" role="alert">
              <span class="mr-5">Falha ao consultar o usuário!</span> <a href="#" class="btn btn-sm btn-icon btn-warning" aria-label="Close" onclick="$(this).parent().fadeOut()"><span aria-hidden="true"><i class="fa fa-times"></i></span></a>
            </div><!-- /.page-message -->
            <?php endif; ?>
          <?php endif; ?>
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <legend>Usuário</legend>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <div class="card" id="floating-label">
                    <div class='card-body'>
                      <?= form_open(base_url("users/update/{$response->data[0]->Id}")); ?>
                        <fieldset>
                          <input type='hidden' name='Criacao' value="<?= $response->data[0]->Criacao ?>">
                          <input type='hidden' name='Ativo' value="<?= $response->data[0]->Ativo ?>">
                          <div class='form-group'>
                            <label for='Nome'>Nome</label>
                            <input type='text' id='Nome' class='form-control' placeholder='Nome' value="<?= $response->data[0]->Nome ?>" required disabled>
                            <input type='hidden' name='Nome' value="<?= $response->data[0]->Nome ?>">
                          </div>
                          <div class='form-group'>
                            <label for='Sobrenome'>Sobrenome</label>
                            <input type='text' name='Sobrenome' id='Sobrenome' class='form-control' placeholder='Sobrenome' value="<?= $response->data[0]->Sobrenome ?>" >
                            <?php if(isset($response)): ?>
                              <div class="invalid-feedback" style="display:block"><?= isset($response->error->Sobrenome) ? $response->error->Sobrenome : ""; ?></div>
                            <?php endif; ?>
                          </div>
                          <div class='form-group'>
                            <label for='DataNascimento'>Data Nascimento</label>
                            <input type='date' name='DataNascimento' id='DataNascimento' class='form-control' value="<?= $response->data[0]->DataNascimento ?>" placeholder='Data Nascimento' required>
                            <?php if(isset($response)): ?>
                              <div class="invalid-feedback" style="display:block"><?= isset($response->error->DataNascimento) ? $response->error->DataNascimento : ""; ?></div>
                            <?php endif; ?>
                          </div>
                          <div class='form-group'>
                            <label for='UrlFoto'>Foto</label>
                            <input type='text' name='UrlFoto' id='UrlFoto' class='form-control' value="<?= $response->data[0]->UrlFoto ?>" placeholder='Foto' >
                          </div>
                          <div class='form-group'>
                            <label for='Email'>E-mail</label>
                            <input type='text' id='Email' class='form-control' value="<?= $response->data[0]->Email ?>" placeholder='E-mail' required disabled>
                            <input type='hidden' name='Email' value="<?= $response->data[0]->Email ?>">
                          </div>
                          <div class='form-actions'>
                            <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                            <button class='btn btn-secondary ml-auto'>Cancelar</button>
                          </div>
                        </fieldset>
                      <?= form_close(); ?>
                    </div>
                  </div>
                </div><!-- /.section-block -->
              </div><!-- /.page-section -->

              <hr class="my-5">

              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <legend>Alterar a Senha</legend>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <div class="card" id="floating-label">
                    <div class='card-body'>
                      <?= form_open(base_url("users/password/{$response->data[0]->Id}")); ?>
                        <fieldset>
                          <div class='form-group'>
                            <label for='Senha'>Nova Senha</label>
                            <input type='text' name='Senha' id='Senha' class='form-control' placeholder='Senha' required>
                            <?php if(isset($response)): ?>
                              <div class='invalid-feedback' style='display:block'><?= isset($response->error->Senha) ? $response->error->Senha : ''; ?></div>
                            <?php endif; ?>
                          </div>
                          <div class='form-group'>
                            <label for='SenhaConf'>Repetir a Senha</label>
                            <input type='text' name='SenhaConf' id='SenhaConf' class='form-control' placeholder='Repetir a Senha' required>
                            <?php if(isset($response)): ?>
                              <div class='invalid-feedback' style='display:block'><?= isset($response->error->SenhaConf) ? $response->error->SenhaConf : ''; ?></div>
                            <?php endif; ?>
                          </div>
                          <div class='form-actions'>
                            <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          </div>
                        </fieldset>
                      <?= form_close(); ?>
                    </div>
                  </div>
                </div><!-- /.section-block -->
              </div><!-- /.page-section -->



            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- /.wrapper -->
      </main><!-- /.app-main -->
