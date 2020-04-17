
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
                    <a href='<?= base_url('Ref4310') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Produtos Sujeitos a Alíquotas Diferenciadas </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Ref4310/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='4310_Codigo'>Código</label>
							<input type='text' name='4310_Codigo' id='4310_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data']['4310_Codigo']) ? $response['data']['4310_Codigo'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_Codigo']) ? $response['error']['4310_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4310_Descricao'>Descrição</label>
							<input type='text' name='4310_Descricao' id='4310_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data']['4310_Descricao']) ? $response['data']['4310_Descricao'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_Descricao']) ? $response['error']['4310_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4310_DtIni'>Data Inicial</label>
							<input type='date' name='4310_DtIni' id='4310_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data']['4310_DtIni']) ? $response['data']['4310_DtIni'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_DtIni']) ? $response['error']['4310_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4310_DtFin'>Data Final</label>
							<input type='date' name='4310_DtFin' id='4310_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data']['4310_DtFin']) ? $response['data']['4310_DtFin'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_DtFin']) ? $response['error']['4310_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4310_Ncm'>NCM</label>
							<input type='text' name='4310_Ncm' id='4310_Ncm' class='form-control' placeholder='NCM' value='<?= isset($response['data']['4310_Ncm']) ? $response['data']['4310_Ncm'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_Ncm']) ? $response['error']['4310_Ncm'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4310_NcmEx'>Exceto NCM</label>
							<input type='text' name='4310_NcmEx' id='4310_NcmEx' class='form-control' placeholder='Exceto NCM' value='<?= isset($response['data']['4310_NcmEx']) ? $response['data']['4310_NcmEx'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_NcmEx']) ? $response['error']['4310_NcmEx'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4310_ExIpi'>Código EX TIPI</label>
							<input type='text' name='4310_ExIpi' id='4310_ExIpi' class='form-control' placeholder='Código EX TIPI' value='<?= isset($response['data']['4310_ExIpi']) ? $response['data']['4310_ExIpi'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_ExIpi']) ? $response['error']['4310_ExIpi'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4310_AliqPis'>Alíquota do PIS %</label>
							<input type='number' name='4310_AliqPis' id='4310_AliqPis' class='form-control' placeholder='Alíquota do PIS %' value='<?= isset($response['data']['4310_AliqPis']) ? $response['data']['4310_AliqPis'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_AliqPis']) ? $response['error']['4310_AliqPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4310_AliqCofins'>Alíquota da COFINS %</label>
							<input type='number' name='4310_AliqCofins' id='4310_AliqCofins' class='form-control' placeholder='Alíquota da COFINS %' value='<?= isset($response['data']['4310_AliqCofins']) ? $response['data']['4310_AliqCofins'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4310_AliqCofins']) ? $response['error']['4310_AliqCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Ref4310') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('ref4310/create'); ?>';
  var url_upd = '<?= base_url('ref4310/edit'); ?>';
  var url_view = '<?= base_url('ref4310/view'); ?>';
</script>
