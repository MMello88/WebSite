
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
                    <a href='<?= base_url('Pessoasfisica') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Pessoa Fisica </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Pessoasfisica/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='pf_Nome'>Nome</label>
							<input type='text' name='pf_Nome' id='pf_Nome' class='form-control' placeholder='Nome' value='<?= isset($response['data']['pf_Nome']) ? $response['data']['pf_Nome'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_Nome']) ? $response['error']['pf_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pf_Sobrenome'>Sobrenome</label>
							<input type='text' name='pf_Sobrenome' id='pf_Sobrenome' class='form-control' placeholder='Sobrenome' value='<?= isset($response['data']['pf_Sobrenome']) ? $response['data']['pf_Sobrenome'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_Sobrenome']) ? $response['error']['pf_Sobrenome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pf_DataNascimento'>Data Nascimento</label>
							<input type='date' name='pf_DataNascimento' id='pf_DataNascimento' class='form-control' placeholder='Data Nascimento' value='<?= isset($response['data']['pf_DataNascimento']) ? $response['data']['pf_DataNascimento'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_DataNascimento']) ? $response['error']['pf_DataNascimento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pf_UrlFoto'>Foto Perfil</label>
							<input type='text' name='pf_UrlFoto' id='pf_UrlFoto' class='form-control' placeholder='Foto Perfil' value='<?= isset($response['data']['pf_UrlFoto']) ? $response['data']['pf_UrlFoto'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_UrlFoto']) ? $response['error']['pf_UrlFoto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pf_Ativo'>Ativo</label>
							<select name='pf_Ativo' id='pf_Ativo' class='custom-select' placeholder='Ativo' required>
								<option value=''> Selecione </option>
								<option value='True' <?= isset($response['data']['pf_Ativo']) ? $response['data']['pf_Ativo'] == 'True' ? 'selected' : '' : '' ?>> True </option>
								<option value='False' <?= isset($response['data']['pf_Ativo']) ? $response['data']['pf_Ativo'] == 'False' ? 'selected' : '' : '' ?>> False </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='pf_Criacao'></label>
							<input type='datetime-local' name='pf_Criacao' id='pf_Criacao' class='form-control' placeholder='' value='<?= isset($response['data']['pf_Criacao']) ? $response['data']['pf_Criacao'] : 'CURRENT_TIMESTAMP(6)' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pf_Criacao']) ? $response['error']['pf_Criacao'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Pessoasfisica') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('pessoasfisica/create'); ?>';
  var url_upd = '<?= base_url('pessoasfisica/edit'); ?>';
  var url_view = '<?= base_url('pessoasfisica/view'); ?>';
</script>
