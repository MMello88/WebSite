
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
                    <a href='<?= base_url('Regsa111efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Processo Referenciado </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regsa111efdc/update/'.$response['data'][0]['a111_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='a111_Reg'>Registro</label>
							<input type='text' name='a111_Reg' id='a111_Reg' class='form-control' placeholder='Registro' value='<?= $response['data'][0]['a111_Reg'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a111_Reg']) ? $response['error']['a111_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a111_NumProcesso'>Número do Processo</label>
							<input type='text' name='a111_NumProcesso' id='a111_NumProcesso' class='form-control' placeholder='Número do Processo' value='<?= $response['data'][0]['a111_NumProcesso'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a111_NumProcesso']) ? $response['error']['a111_NumProcesso'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a111_IndicadorOrigemProcesso'>Origem do Processo</label>
							<select name='a111_IndicadorOrigemProcesso' id='a111_IndicadorOrigemProcesso' class='custom-select' placeholder='Origem do Processo' required>
								<option value=''> Selecione </option>
								<option value='1 - Justiça Federal' <?= $response['data'][0]['a111_IndicadorOrigemProcesso'] == '1 - Justiça Federal' ? 'selected' : '' ?>> 1 - Justiça Federal </option>
								<option value='3 – Secretaria da Receita Federal do Brasil' <?= $response['data'][0]['a111_IndicadorOrigemProcesso'] == '3 – Secretaria da Receita Federal do Brasil' ? 'selected' : '' ?>> 3 – Secretaria da Receita Federal do Brasil </option>
								<option value='9 - Outros' <?= $response['data'][0]['a111_IndicadorOrigemProcesso'] == '9 - Outros' ? 'selected' : '' ?>> 9 - Outros </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='a111_RegA100EFDCId'>Documento - Nota Fiscal de Serviço</label>
							<input type='number' name='a111_RegA100EFDCId' id='a111_RegA100EFDCId' class='form-control' placeholder='Documento - Nota Fiscal de Serviço' value='<?= $response['data'][0]['a111_RegA100EFDCId'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a111_RegA100EFDCId']) ? $response['error']['a111_RegA100EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regsa111efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regsa111efdc/get'); ?>';
  var url_upd = '<?= base_url('regsa111efdc/edit'); ?>';
</script>
