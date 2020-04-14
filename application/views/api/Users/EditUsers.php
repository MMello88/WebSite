
    <!-- .app-main -->
    <main class='app-main'>
      <!-- .wrapper -->
      <div class='wrapper'>
        <!-- .page -->
        <div class='page'>
          <?php if(isset($response)): ?>
            <?php if($response['method'] !== 'GET'): ?>
              <?php if($response['status'] == 'FALSE'): ?>
              <!-- .page-message -->
              <div class='page-message bg-warning' role='alert'>
                <span class='mr-5'><?= $response['message'] ?></span>
                  <a href='#' class='btn btn-sm btn-icon btn-warning' aria-label='Close' onclick='$(this).parent().fadeOut()'>
                    <span aria-hidden='true'><i class='fa fa-times'></i></span>
                  </a>
              </div><!-- /.page-message -->
              <?php else: ?>
              <!-- .page-message -->
              <div class='page-message bg-success' role='alert>
                <span class='mr-5'><?= $response['message'] ?></span>
                <a href='#' class='btn btn-sm btn-icon btn-success' aria-label='Close' onclick='$(this).parent().fadeOut()'>
                  <span aria-hidden='true'><i class='fa fa-times'></i></span>
                </a>
              </div><!-- /.page-message -->    
              <?php endif; ?>
            <?php else: ?>
              <?php if($response['status'] == 'FALSE'): ?>
              <!-- .page-message -->
              <div class='page-message bg-warning' role='alert'>
                <span class='mr-5'>Falha ao consultar o registro!</span>
                <a href='#' class='btn btn-sm btn-icon btn-warning' aria-label='Close' onclick='$(this).parent().fadeOut()'>
                  <span aria-hidden='true'><i class='fa fa-times'></i></span>
                </a>
              </div><!-- /.page-message -->
              <?php endif; ?>
            <?php endif; ?>     
          <?php endif; ?>
          <!-- .page-inner -->
          <div class='page-inner'>
            <!-- .page-title-bar -->
            <header class='page-title-bar'>
              <!-- .breadcrumb -->
              <nav aria-label='breadcrumb'>
                <ol class='breadcrumb'>
                  <li class='breadcrumb-item active'>
                    <a href='<?= base_url('Users') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
                  </li>
                </ol>
              </nav><!-- /.breadcrumb -->
            </header><!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class='page-section'>
              <!-- .section-block -->
              <div class='section-block'>            
                <!-- .page-title-bar -->
                <header class='page-title-bar'>
                  <!-- page title stuff goes here -->
                  <h1 class='page-title'> Usuários </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Users/update/'.$response['data'][0]['uu_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='uu_Nome'>Nome</label>
							<input type='text' name='uu_Nome' id='uu_Nome' class='form-control' placeholder='Nome' value='<?= $response['data'][0]['uu_Nome'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Nome']) ? $response['error']['uu_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_Sobrenome'>Sobrenome</label>
							<input type='text' name='uu_Sobrenome' id='uu_Sobrenome' class='form-control' placeholder='Sobrenome' value='<?= $response['data'][0]['uu_Sobrenome'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Sobrenome']) ? $response['error']['uu_Sobrenome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_DataNascimento'>Data Nascimento</label>
							<input type='date' name='uu_DataNascimento' id='uu_DataNascimento' class='form-control' placeholder='Data Nascimento' value='<?= $response['data'][0]['uu_DataNascimento'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_DataNascimento']) ? $response['error']['uu_DataNascimento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_UrlFoto'>Foto</label>
							<input type='text' name='uu_UrlFoto' id='uu_UrlFoto' class='form-control' placeholder='Foto' value='<?= $response['data'][0]['uu_UrlFoto'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_UrlFoto']) ? $response['error']['uu_UrlFoto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_Ativo'>Ativo</label>
							<select name='uu_Ativo' id='uu_Ativo' class='custom-select' placeholder='Ativo' required>
								<option value=''> Selecione </option>
								<option value='True' <?= $response['data'][0]['uu_Ativo'] == 'True' ? 'selected' : '' ?>> True </option>
								<option value='False' <?= $response['data'][0]['uu_Ativo'] == 'False' ? 'selected' : '' ?>> False </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='uu_Criacao'></label>
							<input type='datetime-local' name='uu_Criacao' id='uu_Criacao' class='form-control' placeholder='' value='<?= $response['data'][0]['uu_Criacao'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Criacao']) ? $response['error']['uu_Criacao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_Email'>E-mail</label>
							<input type='text' name='uu_Email' id='uu_Email' class='form-control' placeholder='E-mail' value='<?= $response['data'][0]['uu_Email'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Email']) ? $response['error']['uu_Email'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_Senha'>Senha</label>
							<input type='text' name='uu_Senha' id='uu_Senha' class='form-control' placeholder='Senha' value='<?= $response['data'][0]['uu_Senha'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Senha']) ? $response['error']['uu_Senha'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_DataReset'></label>
							<input type='datetime-local' name='uu_DataReset' id='uu_DataReset' class='form-control' placeholder='' value='<?= $response['data'][0]['uu_DataReset'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_DataReset']) ? $response['error']['uu_DataReset'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_IdReset'></label>
							<input type='text' name='uu_IdReset' id='uu_IdReset' class='form-control' placeholder='' value='<?= $response['data'][0]['uu_IdReset'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_IdReset']) ? $response['error']['uu_IdReset'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Users') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('users/get'); ?>';
  var url_upd = '<?= base_url('users/edit'); ?>';
</script>
