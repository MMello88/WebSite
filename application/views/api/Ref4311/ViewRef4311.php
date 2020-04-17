
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
                    <a href='<?= base_url('Ref4311') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Produtos Sujeitos a Alíquotas por Unidade de Medida de Produto </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='4311_Codigo'>Código</label>
							<input type='text' name='4311_Codigo' id='4311_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data'][0]['4311_Codigo']) ? $response['data'][0]['4311_Codigo'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_Codigo']) ? $response['error']['4311_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_Descricao'>Descrição</label>
							<input type='text' name='4311_Descricao' id='4311_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data'][0]['4311_Descricao']) ? $response['data'][0]['4311_Descricao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_Descricao']) ? $response['error']['4311_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_DtIni'>Data Inicial</label>
							<input type='date' name='4311_DtIni' id='4311_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['4311_DtIni']) ? $response['data'][0]['4311_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_DtIni']) ? $response['error']['4311_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_DtFin'>Data Final</label>
							<input type='date' name='4311_DtFin' id='4311_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['4311_DtFin']) ? $response['data'][0]['4311_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_DtFin']) ? $response['error']['4311_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_Ncm'>NCM</label>
							<input type='text' name='4311_Ncm' id='4311_Ncm' class='form-control' placeholder='NCM' value='<?= isset($response['data'][0]['4311_Ncm']) ? $response['data'][0]['4311_Ncm'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_Ncm']) ? $response['error']['4311_Ncm'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_NcmEx'>Exceto NCM</label>
							<input type='text' name='4311_NcmEx' id='4311_NcmEx' class='form-control' placeholder='Exceto NCM' value='<?= isset($response['data'][0]['4311_NcmEx']) ? $response['data'][0]['4311_NcmEx'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_NcmEx']) ? $response['error']['4311_NcmEx'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_ExIpi'>Código EX TIPI</label>
							<input type='text' name='4311_ExIpi' id='4311_ExIpi' class='form-control' placeholder='Código EX TIPI' value='<?= isset($response['data'][0]['4311_ExIpi']) ? $response['data'][0]['4311_ExIpi'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_ExIpi']) ? $response['error']['4311_ExIpi'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_Unid'>Unidade</label>
							<input type='text' name='4311_Unid' id='4311_Unid' class='form-control' placeholder='Unidade' value='<?= isset($response['data'][0]['4311_Unid']) ? $response['data'][0]['4311_Unid'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_Unid']) ? $response['error']['4311_Unid'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_AliqPis'>Alíquota do PIS %</label>
							<input type='number' name='4311_AliqPis' id='4311_AliqPis' class='form-control' placeholder='Alíquota do PIS %' value='<?= isset($response['data'][0]['4311_AliqPis']) ? $response['data'][0]['4311_AliqPis'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_AliqPis']) ? $response['error']['4311_AliqPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_AliqCofins'>Alíquota da COFINS %</label>
							<input type='number' name='4311_AliqCofins' id='4311_AliqCofins' class='form-control' placeholder='Alíquota da COFINS %' value='<?= isset($response['data'][0]['4311_AliqCofins']) ? $response['data'][0]['4311_AliqCofins'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_AliqCofins']) ? $response['error']['4311_AliqCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>

                      </fieldset><!-- /.fieldset -->
                  </div><!-- /.card-body -->
                </div><!-- /.base-style -->
              </div><!-- /.section-block -->
            </div><!-- /.page-section -->
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
<script>
  var url_get = '<?= base_url('ref4311/get'); ?>';
  var url_upd = '<?= base_url('ref4311/edit'); ?>';
  var url_view = '<?= base_url('ref4311/view'); ?>';
</script>
