
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
                    <a href='<?= base_url('Regs0450efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Informação Complementar do Documento Fiscal </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0450efdc/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0450_Reg'>Registro</label>
							<input type='text' name='0450_Reg' id='0450_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data']['0450_Reg']) ? $response['data']['0450_Reg'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0450_Reg']) ? $response['error']['0450_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0450_CodInf'>Código</label>
							<input type='text' name='0450_CodInf' id='0450_CodInf' class='form-control' placeholder='Código' value='<?= isset($response['data']['0450_CodInf']) ? $response['data']['0450_CodInf'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0450_CodInf']) ? $response['error']['0450_CodInf'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0450_Txt'>Informação Complementar</label>
							<input type='text' name='0450_Txt' id='0450_Txt' class='form-control' placeholder='Informação Complementar' value='<?= isset($response['data']['0450_Txt']) ? $response['data']['0450_Txt'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0450_Txt']) ? $response['error']['0450_Txt'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0450_DtIni'>Data Inicial</label>
							<input type='date' name='0450_DtIni' id='0450_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data']['0450_DtIni']) ? $response['data']['0450_DtIni'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0450_DtIni']) ? $response['error']['0450_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0450_DtFin'>Data Final</label>
							<input type='date' name='0450_DtFin' id='0450_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data']['0450_DtFin']) ? $response['data']['0450_DtFin'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0450_DtFin']) ? $response['error']['0450_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0450_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='0450_PessoaJuridicaId' id='0450_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica' >
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data']['0450_PessoaJuridicaId']) ? $response['data']['0450_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0450_PessoaJuridicaId']) ? $response['error']['0450_PessoaJuridicaId'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0450efdc') ?>'">Cancelar</button>
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
