
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
              <div class='page-message bg-success' role='alert'>
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
                    <a href='<?= base_url('Regsa100efdc/'.$parentView.'/'.$IdParent) ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Informação Complementar - Operações de Importação </h1>
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
								<label for='a120_Reg'>Registro</label>
							<input type='text'  name='a120_Reg' id='a120_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['a120_Reg']) ? $response['data'][0]['a120_Reg'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_Reg']) ? $response['error']['a120_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a120_VlTotalServico'>Valor Total do Serviço</label>
							<input type='number' step='0.01' name='a120_VlTotalServico' id='a120_VlTotalServico' class='form-control' placeholder='Valor Total do Serviço' value='<?= isset($response['data'][0]['a120_VlTotalServico']) ? $response['data'][0]['a120_VlTotalServico'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_VlTotalServico']) ? $response['error']['a120_VlTotalServico'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a120_VlBcPis'>Valor BC PIS</label>
							<input type='number' step='0.01' name='a120_VlBcPis' id='a120_VlBcPis' class='form-control' placeholder='Valor BC PIS' value='<?= isset($response['data'][0]['a120_VlBcPis']) ? $response['data'][0]['a120_VlBcPis'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_VlBcPis']) ? $response['error']['a120_VlBcPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a120_VlPisImportacao'>Valor Pago PIS</label>
							<input type='number' step='0.01' name='a120_VlPisImportacao' id='a120_VlPisImportacao' class='form-control' placeholder='Valor Pago PIS' value='<?= isset($response['data'][0]['a120_VlPisImportacao']) ? $response['data'][0]['a120_VlPisImportacao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_VlPisImportacao']) ? $response['error']['a120_VlPisImportacao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a120_DtPgtoPisImportacao'>Data Pgto PIS</label>
							<input type='date'  name='a120_DtPgtoPisImportacao' id='a120_DtPgtoPisImportacao' class='form-control' placeholder='Data Pgto PIS' value='<?= isset($response['data'][0]['a120_DtPgtoPisImportacao']) ? $response['data'][0]['a120_DtPgtoPisImportacao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_DtPgtoPisImportacao']) ? $response['error']['a120_DtPgtoPisImportacao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a120_VlBcCofins'>Valor BC COFINS</label>
							<input type='number' step='0.01' name='a120_VlBcCofins' id='a120_VlBcCofins' class='form-control' placeholder='Valor BC COFINS' value='<?= isset($response['data'][0]['a120_VlBcCofins']) ? $response['data'][0]['a120_VlBcCofins'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_VlBcCofins']) ? $response['error']['a120_VlBcCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a120_VlCofinsImportacao'>Valor Pago COFINS</label>
							<input type='number' step='0.01' name='a120_VlCofinsImportacao' id='a120_VlCofinsImportacao' class='form-control' placeholder='Valor Pago COFINS' value='<?= isset($response['data'][0]['a120_VlCofinsImportacao']) ? $response['data'][0]['a120_VlCofinsImportacao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_VlCofinsImportacao']) ? $response['error']['a120_VlCofinsImportacao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a120_DtPgtoCofinsImportacao'>Data do Pgto COFINS</label>
							<input type='date'  name='a120_DtPgtoCofinsImportacao' id='a120_DtPgtoCofinsImportacao' class='form-control' placeholder='Data do Pgto COFINS' value='<?= isset($response['data'][0]['a120_DtPgtoCofinsImportacao']) ? $response['data'][0]['a120_DtPgtoCofinsImportacao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_DtPgtoCofinsImportacao']) ? $response['error']['a120_DtPgtoCofinsImportacao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a120_IndicadorLocalExecucaoServico'>Local da execução do serviço</label>
							<select name='a120_IndicadorLocalExecucaoServico' id='a120_IndicadorLocalExecucaoServico' class='custom-select' placeholder='Local da execução do serviço' required disabled>
								<option value=''> Selecione </option>
								<option value='0 – Executado no País' <?= isset($response['data'][0]['a120_IndicadorLocalExecucaoServico']) ? $response['data'][0]['a120_IndicadorLocalExecucaoServico'] == '0 – Executado no País' ? 'selected' : '' : '' ?>> 0 – Executado no País </option>
								<option value='1 – Executado no Exterior' <?= isset($response['data'][0]['a120_IndicadorLocalExecucaoServico']) ? $response['data'][0]['a120_IndicadorLocalExecucaoServico'] == '1 – Executado no Exterior' ? 'selected' : '' : '' ?>> 1 – Executado no Exterior </option>
								<option value=' cujo resultado se verifique no País' <?= isset($response['data'][0]['a120_IndicadorLocalExecucaoServico']) ? $response['data'][0]['a120_IndicadorLocalExecucaoServico'] == ' cujo resultado se verifique no País' ? 'selected' : '' : '' ?>>  cujo resultado se verifique no País </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='a120_RegA100EFDCId'>Documento - Nota Fiscal de Serviço</label>
							<select name='a120_RegA100EFDCId' id='a120_RegA100EFDCId' class='custom-select' placeholder='Documento - Nota Fiscal de Serviço'  disabled>
								<?= getOptionToSelect('regsa100efdc','a100_Id', '', isset($response['data'][0]['a120_RegA100EFDCId']) ? $response['data'][0]['a120_RegA100EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a120_RegA100EFDCId']) ? $response['error']['a120_RegA100EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regsa100efdc/'.$parentView.'/'.$IdParent) ?>'">Cancelar</button>
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

