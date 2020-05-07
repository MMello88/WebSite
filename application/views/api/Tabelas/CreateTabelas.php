
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
                    <a href='<?= base_url('Tabelas') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Tabelas </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Tabelas/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='AUTO_INCREMENT'>Auto Incremento</label>
							<input type='' name='AUTO_INCREMENT' id='AUTO_INCREMENT' class='form-control' placeholder='Auto Incremento' value='<?= isset($response['data']['AUTO_INCREMENT']) ? $response['data']['AUTO_INCREMENT'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['AUTO_INCREMENT']) ? $response['error']['AUTO_INCREMENT'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='CREATE_TIME'>Data de Criação</label>
							<input type='datetime-local' name='CREATE_TIME' id='CREATE_TIME' class='form-control' placeholder='Data de Criação' value='<?= isset($response['data']['CREATE_TIME']) ? $response['data']['CREATE_TIME'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['CREATE_TIME']) ? $response['error']['CREATE_TIME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='UPDATE_TIME'>Data de Alteração</label>
							<input type='datetime-local' name='UPDATE_TIME' id='UPDATE_TIME' class='form-control' placeholder='Data de Alteração' value='<?= isset($response['data']['UPDATE_TIME']) ? $response['data']['UPDATE_TIME'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['UPDATE_TIME']) ? $response['error']['UPDATE_TIME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='TABLE_COMMENT'>Descrição da Tabela</label>
							<input type='text' name='TABLE_COMMENT' id='TABLE_COMMENT' class='form-control' placeholder='Descrição da Tabela' value='<?= isset($response['data']['TABLE_COMMENT']) ? $response['data']['TABLE_COMMENT'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['TABLE_COMMENT']) ? $response['error']['TABLE_COMMENT'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='TABLE_DELETED'>Ativa</label>
							<select name='TABLE_DELETED' id='TABLE_DELETED' class='custom-select' placeholder='Ativa' >
								<option value=''> Selecione </option>
								<option value='TRUE' <?= isset($response['data']['TABLE_DELETED']) ? $response['data']['TABLE_DELETED'] == 'TRUE' ? 'selected' : '' : '' ?>> TRUE </option>
								<option value='FALSE' <?= isset($response['data']['TABLE_DELETED']) ? $response['data']['TABLE_DELETED'] == 'FALSE' ? 'selected' : '' : '' ?>> FALSE </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='CLASS_NAME'>Nome da Classe</label>
							<input type='text' name='CLASS_NAME' id='CLASS_NAME' class='form-control' placeholder='Nome da Classe' value='<?= isset($response['data']['CLASS_NAME']) ? $response['data']['CLASS_NAME'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['CLASS_NAME']) ? $response['error']['CLASS_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Tabelas') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('tabelas/create'); ?>';
  var url_upd = '<?= base_url('tabelas/edit'); ?>';
  var url_view = '<?= base_url('tabelas/view'); ?>';
</script>
