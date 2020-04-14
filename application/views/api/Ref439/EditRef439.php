
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
                    <a href='<?= base_url('Ref439') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Alíquotas de Créditos Presumidos da Agroindústria </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Ref439/update/'.$response['data'][0]['439_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='439_Codigo'>Código</label>
							<input type='text' name='439_Codigo' id='439_Codigo' class='form-control' placeholder='Código' value='<?= $response['data'][0]['439_Codigo'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_Codigo']) ? $response['error']['439_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='439_Descricao'>Descrição</label>
							<input type='text' name='439_Descricao' id='439_Descricao' class='form-control' placeholder='Descrição' value='<?= $response['data'][0]['439_Descricao'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_Descricao']) ? $response['error']['439_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='439_DtIni'>Data Inicial</label>
							<input type='date' name='439_DtIni' id='439_DtIni' class='form-control' placeholder='Data Inicial' value='<?= $response['data'][0]['439_DtIni'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_DtIni']) ? $response['error']['439_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='439_DtFin'>Data Final</label>
							<input type='date' name='439_DtFin' id='439_DtFin' class='form-control' placeholder='Data Final' value='<?= $response['data'][0]['439_DtFin'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_DtFin']) ? $response['error']['439_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='439_Ncm'>NCM</label>
							<input type='text' name='439_Ncm' id='439_Ncm' class='form-control' placeholder='NCM' value='<?= $response['data'][0]['439_Ncm'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_Ncm']) ? $response['error']['439_Ncm'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='439_NcmEx'>Exceto NCM</label>
							<input type='text' name='439_NcmEx' id='439_NcmEx' class='form-control' placeholder='Exceto NCM' value='<?= $response['data'][0]['439_NcmEx'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_NcmEx']) ? $response['error']['439_NcmEx'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='439_ExIpi'>Código EX TIPI</label>
							<input type='text' name='439_ExIpi' id='439_ExIpi' class='form-control' placeholder='Código EX TIPI' value='<?= $response['data'][0]['439_ExIpi'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_ExIpi']) ? $response['error']['439_ExIpi'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='439_AliqPis'>Alíquota do PIS %</label>
							<input type='number' name='439_AliqPis' id='439_AliqPis' class='form-control' placeholder='Alíquota do PIS %' value='<?= $response['data'][0]['439_AliqPis'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_AliqPis']) ? $response['error']['439_AliqPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='439_AliqCofins'>Alíquota da COFINS %</label>
							<input type='number' name='439_AliqCofins' id='439_AliqCofins' class='form-control' placeholder='Alíquota da COFINS %' value='<?= $response['data'][0]['439_AliqCofins'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['439_AliqCofins']) ? $response['error']['439_AliqCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Ref439') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('ref439/get'); ?>';
  var url_upd = '<?= base_url('ref439/edit'); ?>';
</script>
