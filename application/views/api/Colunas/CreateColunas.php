
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
                    <a href='<?= base_url('Colunas') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                    <?= form_open(base_url('Colunas/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='TABLE_NAME'></label>
							<input type='text' name='TABLE_NAME' id='TABLE_NAME' class='form-control' placeholder='' value='<?= isset($response['data']['TABLE_NAME']) ? $response['data']['TABLE_NAME'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['TABLE_NAME']) ? $response['error']['TABLE_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='COLUMN_NAME'></label>
							<input type='text' name='COLUMN_NAME' id='COLUMN_NAME' class='form-control' placeholder='' value='<?= isset($response['data']['COLUMN_NAME']) ? $response['data']['COLUMN_NAME'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['COLUMN_NAME']) ? $response['error']['COLUMN_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='IS_NULLABLE'></label>
							<input type='text' name='IS_NULLABLE' id='IS_NULLABLE' class='form-control' placeholder='' value='<?= isset($response['data']['IS_NULLABLE']) ? $response['data']['IS_NULLABLE'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['IS_NULLABLE']) ? $response['error']['IS_NULLABLE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='DATA_TYPE'></label>
							<input type='text' name='DATA_TYPE' id='DATA_TYPE' class='form-control' placeholder='' value='<?= isset($response['data']['DATA_TYPE']) ? $response['data']['DATA_TYPE'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['DATA_TYPE']) ? $response['error']['DATA_TYPE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='CHARACTER_MAXIMUM_LENGTH'></label>
							<input type='' name='CHARACTER_MAXIMUM_LENGTH' id='CHARACTER_MAXIMUM_LENGTH' class='form-control' placeholder='' value='<?= isset($response['data']['CHARACTER_MAXIMUM_LENGTH']) ? $response['data']['CHARACTER_MAXIMUM_LENGTH'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['CHARACTER_MAXIMUM_LENGTH']) ? $response['error']['CHARACTER_MAXIMUM_LENGTH'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='CHARACTER_OCTET_LENGTH'></label>
							<input type='' name='CHARACTER_OCTET_LENGTH' id='CHARACTER_OCTET_LENGTH' class='form-control' placeholder='' value='<?= isset($response['data']['CHARACTER_OCTET_LENGTH']) ? $response['data']['CHARACTER_OCTET_LENGTH'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['CHARACTER_OCTET_LENGTH']) ? $response['error']['CHARACTER_OCTET_LENGTH'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='NUMERIC_PRECISION'></label>
							<input type='' name='NUMERIC_PRECISION' id='NUMERIC_PRECISION' class='form-control' placeholder='' value='<?= isset($response['data']['NUMERIC_PRECISION']) ? $response['data']['NUMERIC_PRECISION'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['NUMERIC_PRECISION']) ? $response['error']['NUMERIC_PRECISION'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='NUMERIC_SCALE'></label>
							<input type='' name='NUMERIC_SCALE' id='NUMERIC_SCALE' class='form-control' placeholder='' value='<?= isset($response['data']['NUMERIC_SCALE']) ? $response['data']['NUMERIC_SCALE'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['NUMERIC_SCALE']) ? $response['error']['NUMERIC_SCALE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='COLUMN_TYPE'></label>
							<input type='text' name='COLUMN_TYPE' id='COLUMN_TYPE' class='form-control' placeholder='' value='<?= isset($response['data']['COLUMN_TYPE']) ? $response['data']['COLUMN_TYPE'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['COLUMN_TYPE']) ? $response['error']['COLUMN_TYPE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='COLUMN_KEY'></label>
							<input type='text' name='COLUMN_KEY' id='COLUMN_KEY' class='form-control' placeholder='' value='<?= isset($response['data']['COLUMN_KEY']) ? $response['data']['COLUMN_KEY'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['COLUMN_KEY']) ? $response['error']['COLUMN_KEY'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='COLUMN_COMMENT'></label>
							<input type='text' name='COLUMN_COMMENT' id='COLUMN_COMMENT' class='form-control' placeholder='' value='<?= isset($response['data']['COLUMN_COMMENT']) ? $response['data']['COLUMN_COMMENT'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['COLUMN_COMMENT']) ? $response['error']['COLUMN_COMMENT'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='COLUMN_DEFAULT'></label>
							<input type='text' name='COLUMN_DEFAULT' id='COLUMN_DEFAULT' class='form-control' placeholder='' value='<?= isset($response['data']['COLUMN_DEFAULT']) ? $response['data']['COLUMN_DEFAULT'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['COLUMN_DEFAULT']) ? $response['error']['COLUMN_DEFAULT'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='REFERENCED_TABLE_NAME'></label>
							<input type='text' name='REFERENCED_TABLE_NAME' id='REFERENCED_TABLE_NAME' class='form-control' placeholder='' value='<?= isset($response['data']['REFERENCED_TABLE_NAME']) ? $response['data']['REFERENCED_TABLE_NAME'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['REFERENCED_TABLE_NAME']) ? $response['error']['REFERENCED_TABLE_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='REFERENCED_COLUMN_NAME'></label>
							<input type='text' name='REFERENCED_COLUMN_NAME' id='REFERENCED_COLUMN_NAME' class='form-control' placeholder='' value='<?= isset($response['data']['REFERENCED_COLUMN_NAME']) ? $response['data']['REFERENCED_COLUMN_NAME'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['REFERENCED_COLUMN_NAME']) ? $response['error']['REFERENCED_COLUMN_NAME'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Colunas') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('colunas/create'); ?>';
  var url_upd = '<?= base_url('colunas/edit'); ?>';
  var url_view = '<?= base_url('colunas/view'); ?>';
</script>
