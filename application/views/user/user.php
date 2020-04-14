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
                      <?= form_open(base_url("users/update/{$response->data[0]->uu_Id}")); ?>
                        <fieldset>
                          <input type='hidden' name='uu_Criacao' value="<?= $response->data[0]->uu_Criacao ?>">
                          <input type='hidden' name='uu_Ativo' value="<?= $response->data[0]->uu_Ativo ?>">
                          <div class='form-group'>
                            <label for='uu_Nome'>Nome</label>
                            <input type='text' id='uu_Nome' class='form-control' placeholder='Nome' value="<?= $response->data[0]->uu_Nome ?>" required disabled>
                            <input type='hidden' name='uu_Nome' value="<?= $response->data[0]->uu_Nome ?>">
                          </div>
                          <div class='form-group'>
                            <label for='uu_Sobrenome'>Sobrenome</label>
                            <input type='text' name='uu_Sobrenome' id='uu_Sobrenome' class='form-control' placeholder='Sobrenome' value="<?= $response->data[0]->uu_Sobrenome ?>" >
                            <?php if(isset($response)): ?>
                              <div class="invalid-feedback" style="display:block"><?= isset($response->error->uu_Sobrenome) ? $response->error->uu_Sobrenome : ""; ?></div>
                            <?php endif; ?>
                          </div>
                          <div class='form-group'>
                            <label for='uu_DataNascimento'>Data Nascimento</label>
                            <input type='date' name='uu_DataNascimento' id='uu_DataNascimento' class='form-control' value="<?= $response->data[0]->uu_DataNascimento ?>" placeholder='Data Nascimento' required>
                            <?php if(isset($response)): ?>
                              <div class="invalid-feedback" style="display:block"><?= isset($response->error->uu_DataNascimento) ? $response->error->uu_DataNascimento : ""; ?></div>
                            <?php endif; ?>
                          </div>
                          <div class='form-group'>
                            <label for='uu_UrlFoto'>Foto</label>
                            <input type='text' name='uu_UrlFoto' id='uu_UrlFoto' class='form-control' value="<?= $response->data[0]->uu_UrlFoto ?>" placeholder='Foto' >
                          </div>
                          <div class='form-group'>
                            <label for='uu_Email'>E-mail</label>
                            <input type='text' id='uu_Email' class='form-control' value="<?= $response->data[0]->uu_Email ?>" placeholder='E-mail' required disabled>
                            <input type='hidden' name='uu_Email' value="<?= $response->data[0]->uu_Email ?>">
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
                      <?= form_open(base_url("users/password/{$response->data[0]->uu_Id}")); ?>
                        <fieldset>
                          <div class='form-group'>
                            <label for='uu_Senha'>Nova Senha</label>
                            <input type='password' name='uu_Senha' id='uu_Senha' class='form-control' placeholder='Senha' value="<?php echo set_value('uu_Senha'); ?>" required>
                            <?php if(isset($response)): ?>
                              <div class='invalid-feedback' style='display:block'><?= isset($response->error->uu_Senha) ? $response->error->uu_Senha : ''; ?></div>
                            <?php endif; ?>
                          </div>
                          <div class='form-group'>
                            <label for='uu_SenhaConf'>Repetir a Senha</label>
                            <input type='password' name='uu_SenhaConf' id='uu_SenhaConf' class='form-control' placeholder='Repetir a Senha' value="<?php echo set_value('uu_SenhaConf'); ?>" required>
                            <?php if(isset($response)): ?>
                              <div class='invalid-feedback' style='display:block'><?= isset($response->error->uu_SenhaConf) ? $response->error->uu_SenhaConf : ''; ?></div>
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
