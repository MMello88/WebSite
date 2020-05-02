
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
                    <a href='<?= base_url('Regs0500efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Plano de Contas Contábeis </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0500efdc/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0500_Reg'>Registro</label>
							<input type='text' name='0500_Reg' id='0500_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data']['0500_Reg']) ? $response['data']['0500_Reg'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_Reg']) ? $response['error']['0500_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_DtAlteracao'>Data Alteração</label>
							<input type='datetime-local' name='0500_DtAlteracao' id='0500_DtAlteracao' class='form-control' placeholder='Data Alteração' value='<?= isset($response['data']['0500_DtAlteracao']) ? $response['data']['0500_DtAlteracao'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_DtAlteracao']) ? $response['error']['0500_DtAlteracao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_CodNatCC'>Código Natureza Conta</label>
							<select name='0500_CodNatCC' id='0500_CodNatCC' class='custom-select' placeholder='Código Natureza Conta' required>
								<option value=''> Selecione </option>
								<option value='01 - Contas de ativo' <?= isset($response['data']['0500_CodNatCC']) ? $response['data']['0500_CodNatCC'] == '01 - Contas de ativo' ? 'selected' : '' : '' ?>> 01 - Contas de ativo </option>
								<option value='02 - Contas de passivo' <?= isset($response['data']['0500_CodNatCC']) ? $response['data']['0500_CodNatCC'] == '02 - Contas de passivo' ? 'selected' : '' : '' ?>> 02 - Contas de passivo </option>
								<option value='03 - Patrimônio líquido' <?= isset($response['data']['0500_CodNatCC']) ? $response['data']['0500_CodNatCC'] == '03 - Patrimônio líquido' ? 'selected' : '' : '' ?>> 03 - Patrimônio líquido </option>
								<option value='04 - Contas de resultado' <?= isset($response['data']['0500_CodNatCC']) ? $response['data']['0500_CodNatCC'] == '04 - Contas de resultado' ? 'selected' : '' : '' ?>> 04 - Contas de resultado </option>
								<option value='05 - Contas de compensação' <?= isset($response['data']['0500_CodNatCC']) ? $response['data']['0500_CodNatCC'] == '05 - Contas de compensação' ? 'selected' : '' : '' ?>> 05 - Contas de compensação </option>
								<option value='09 - Outras' <?= isset($response['data']['0500_CodNatCC']) ? $response['data']['0500_CodNatCC'] == '09 - Outras' ? 'selected' : '' : '' ?>> 09 - Outras </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0500_IndCTA'>Indicador Tipo Conta</label>
							<input type='text' name='0500_IndCTA' id='0500_IndCTA' class='form-control' placeholder='Indicador Tipo Conta' value='<?= isset($response['data']['0500_IndCTA']) ? $response['data']['0500_IndCTA'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_IndCTA']) ? $response['error']['0500_IndCTA'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_Nivel'>Nível</label>
							<input type='number' name='0500_Nivel' id='0500_Nivel' class='form-control' placeholder='Nível' value='<?= isset($response['data']['0500_Nivel']) ? $response['data']['0500_Nivel'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_Nivel']) ? $response['error']['0500_Nivel'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_CodCTA'>Código</label>
							<input type='text' name='0500_CodCTA' id='0500_CodCTA' class='form-control' placeholder='Código' value='<?= isset($response['data']['0500_CodCTA']) ? $response['data']['0500_CodCTA'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_CodCTA']) ? $response['error']['0500_CodCTA'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_NomeCTA'>Nome</label>
							<input type='text' name='0500_NomeCTA' id='0500_NomeCTA' class='form-control' placeholder='Nome' value='<?= isset($response['data']['0500_NomeCTA']) ? $response['data']['0500_NomeCTA'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_NomeCTA']) ? $response['error']['0500_NomeCTA'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_CodCTARef'>Plano de Conta Referenciado</label>
							<input type='text' name='0500_CodCTARef' id='0500_CodCTARef' class='form-control' placeholder='Plano de Conta Referenciado' value='<?= isset($response['data']['0500_CodCTARef']) ? $response['data']['0500_CodCTARef'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_CodCTARef']) ? $response['error']['0500_CodCTARef'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_CNPJEstab'>CNPJ do estabelecimento</label>
							<input type='number' name='0500_CNPJEstab' id='0500_CNPJEstab' class='form-control' placeholder='CNPJ do estabelecimento' value='<?= isset($response['data']['0500_CNPJEstab']) ? $response['data']['0500_CNPJEstab'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_CNPJEstab']) ? $response['error']['0500_CNPJEstab'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_DtIni'>Data Inicial</label>
							<input type='date' name='0500_DtIni' id='0500_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data']['0500_DtIni']) ? $response['data']['0500_DtIni'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_DtIni']) ? $response['error']['0500_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_DtFin'>Data Final</label>
							<input type='date' name='0500_DtFin' id='0500_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data']['0500_DtFin']) ? $response['data']['0500_DtFin'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_DtFin']) ? $response['error']['0500_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0500_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='0500_PessoaJuridicaId' id='0500_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica' >
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data']['0500_PessoaJuridicaId']) ? $response['data']['0500_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0500_PessoaJuridicaId']) ? $response['error']['0500_PessoaJuridicaId'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0500efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regs0500efdc/create'); ?>';
  var url_upd = '<?= base_url('regs0500efdc/edit'); ?>';
  var url_view = '<?= base_url('regs0500efdc/view'); ?>';
</script>
