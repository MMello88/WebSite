
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
                    <a href='<?= base_url('Ref434') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Código da Situação Tributária Referente à Cofins </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Ref434/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='434_Codigo'>Código</label>
							<input type='text' name='434_Codigo' id='434_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data']['434_Codigo']) ? $response['data']['434_Codigo'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['434_Codigo']) ? $response['error']['434_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='434_Descricao'>Descrição</label>
							<input type='text' name='434_Descricao' id='434_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data']['434_Descricao']) ? $response['data']['434_Descricao'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['434_Descricao']) ? $response['error']['434_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='434_DtIni'>Data Inicial</label>
							<input type='date' name='434_DtIni' id='434_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data']['434_DtIni']) ? $response['data']['434_DtIni'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['434_DtIni']) ? $response['error']['434_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='434_DtFin'>Data Final</label>
							<input type='date' name='434_DtFin' id='434_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data']['434_DtFin']) ? $response['data']['434_DtFin'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['434_DtFin']) ? $response['error']['434_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-3' type='submit'>Salvar</button>
                          <div class='form-group mt-2'>
														<label class='switcher-control'> 
															<input type='checkbox' name='cbxSaveBack' class='switcher-input' <?= isset($response['data']['cbxSaveBack']) ? 'checked' : '' ?>>
															<span class='switcher-indicator'></span>
															<span class='switcher-label-on'><i class='fas fa-check'></i></span>
															<span class='switcher-label-off'><i class='fas fa-times'></i></span>
														</label>
														<span>Salvar e voltar?</span>
													</div>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Ref434') ?>'">Cancelar</button>
                        </div>
                      </fieldset><!-- /.fieldset -->
                    <?= form_close(); ?><!-- /.form -->
                  </div><!-- /.card-body -->
                </div><!-- /.base-style -->
              </div><!-- /.section-block -->
            </div><!-- /.page-section -->

      <!-- .page-section -->
      <div class='page-section'>

        <!-- .card -->
        <div class='card card-fluid'>

          <!-- .card-header -->
          <div class='card-header d-md-flex align-items-md-start'>
            <ul class='nav nav-tabs card-header-tabs'>                
            </ul>
          </div><!-- /.card-header -->

          <!-- .card-body -->
          <div class='card-body'>
            <!-- .tab-content -->
            <div id='myTabContent' class='tab-content'>
          
      </div><!-- /.tab-content -->
    </div><!-- /.card-body -->
  </div><!-- /.card -->
</div><!-- /.page-section -->
    
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
<script>
  var url_get = '<?= base_url('ref434/create'); ?>';
  var url_upd = '<?= base_url('ref434/edit'); ?>';
  var url_view = '<?= base_url('ref434/view'); ?>';
</script>
