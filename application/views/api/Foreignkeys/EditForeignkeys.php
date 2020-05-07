
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
                    <a href='<?= base_url('Foreignkeys') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'>  </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Foreignkeys/update/'.$response['data'][0]['fks_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='CONSTRAINT_NAME'></label>
							<input type='text' name='CONSTRAINT_NAME' id='CONSTRAINT_NAME' class='form-control' placeholder='' value='<?= $response['data'][0]['CONSTRAINT_NAME'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['CONSTRAINT_NAME']) ? $response['error']['CONSTRAINT_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='TABLE_NAME'></label>
							<input type='text' name='TABLE_NAME' id='TABLE_NAME' class='form-control' placeholder='' value='<?= $response['data'][0]['TABLE_NAME'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['TABLE_NAME']) ? $response['error']['TABLE_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='COLUMN_NAME'></label>
							<input type='text' name='COLUMN_NAME' id='COLUMN_NAME' class='form-control' placeholder='' value='<?= $response['data'][0]['COLUMN_NAME'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['COLUMN_NAME']) ? $response['error']['COLUMN_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='REFERENCED_TABLE_NAME'></label>
							<input type='text' name='REFERENCED_TABLE_NAME' id='REFERENCED_TABLE_NAME' class='form-control' placeholder='' value='<?= $response['data'][0]['REFERENCED_TABLE_NAME'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['REFERENCED_TABLE_NAME']) ? $response['error']['REFERENCED_TABLE_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='REFERENCED_COLUMN_NAME'></label>
							<input type='text' name='REFERENCED_COLUMN_NAME' id='REFERENCED_COLUMN_NAME' class='form-control' placeholder='' value='<?= $response['data'][0]['REFERENCED_COLUMN_NAME'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['REFERENCED_COLUMN_NAME']) ? $response['error']['REFERENCED_COLUMN_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='UPDATE_RULE'></label>
							<input type='text' name='UPDATE_RULE' id='UPDATE_RULE' class='form-control' placeholder='' value='<?= $response['data'][0]['UPDATE_RULE'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['UPDATE_RULE']) ? $response['error']['UPDATE_RULE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='DELETE_RULE'></label>
							<input type='text' name='DELETE_RULE' id='DELETE_RULE' class='form-control' placeholder='' value='<?= $response['data'][0]['DELETE_RULE'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['DELETE_RULE']) ? $response['error']['DELETE_RULE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='COLUMN_DELETED'></label>
							<select name='COLUMN_DELETED' id='COLUMN_DELETED' class='custom-select' placeholder='' required>
								<option value=''> Selecione </option>
								<option value='TRUE' <?= $response['data'][0]['COLUMN_DELETED'] == 'TRUE' ? 'selected' : '' ?>> TRUE </option>
								<option value='FALSE' <?= $response['data'][0]['COLUMN_DELETED'] == 'FALSE' ? 'selected' : '' ?>> FALSE </option>
							</select>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Foreignkeys') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('foreignkeys/get'); ?>';
  var url_upd = '<?= base_url('foreignkeys/edit'); ?>';
  var url_view = '<?= base_url('foreignkeys/view'); ?>';
</script>
