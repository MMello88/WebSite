
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
                    <a href='<?= base_url('Regs0111efdc/'.$parentView.'/'.$IdParent) ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar Matheus</a>
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
                  <h1 class='page-title'> Regimes de Apuração da Contribuição Social e de Apropriação de Crédito </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0110efdc/add/'.$parentView.'/'.$IdParent)); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0110_Reg'>Registro</label>
							<input type='text' name='0110_Reg' id='0110_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data']['0110_Reg']) ? $response['data']['0110_Reg'] : '0110' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_Reg']) ? $response['error']['0110_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_CodIncTrib'>Código Incidência Tributária</label>
							<select name='0110_CodIncTrib' id='0110_CodIncTrib' class='custom-select' placeholder='Código Incidência Tributária' required>
								<option value=''> Selecione </option>
								<option value='1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo' <?= isset($response['data']['0110_CodIncTrib']) ? $response['data']['0110_CodIncTrib'] == '1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo' ? 'selected' : '' : '' ?>> 1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo </option>
								<option value='2 – Escrituração de operações com incidência exclusivamente no regime cumulativo' <?= isset($response['data']['0110_CodIncTrib']) ? $response['data']['0110_CodIncTrib'] == '2 – Escrituração de operações com incidência exclusivamente no regime cumulativo' ? 'selected' : '' : '' ?>> 2 – Escrituração de operações com incidência exclusivamente no regime cumulativo </option>
								<option value='3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo' <?= isset($response['data']['0110_CodIncTrib']) ? $response['data']['0110_CodIncTrib'] == '3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo' ? 'selected' : '' : '' ?>> 3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0110_IndAproCred'>Código Método Apropriação Créditos comuns</label>
							<select name='0110_IndAproCred' id='0110_IndAproCred' class='custom-select' placeholder='Código Método Apropriação Créditos comuns' required>
								<option value=''> Selecione </option>
								<option value='1 – Método de Apropriação Direta' <?= isset($response['data']['0110_IndAproCred']) ? $response['data']['0110_IndAproCred'] == '1 – Método de Apropriação Direta' ? 'selected' : '' : '' ?>> 1 – Método de Apropriação Direta </option>
								<option value='2 – Método de Rateio Proporcional (Receita Bruta' <?= isset($response['data']['0110_IndAproCred']) ? $response['data']['0110_IndAproCred'] == '2 – Método de Rateio Proporcional (Receita Bruta' ? 'selected' : '' : '' ?>> 2 – Método de Rateio Proporcional (Receita Bruta </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0110_CodTipoCont'>Código Tipo de Contribuição Apurada</label>
							<select name='0110_CodTipoCont' id='0110_CodTipoCont' class='custom-select' placeholder='Código Tipo de Contribuição Apurada' required>
								<option value=''> Selecione </option>
								<option value='1 – Apuração da Contribuição Exclusivamente a Alíquota Básica' <?= isset($response['data']['0110_CodTipoCont']) ? $response['data']['0110_CodTipoCont'] == '1 – Apuração da Contribuição Exclusivamente a Alíquota Básica' ? 'selected' : '' : '' ?>> 1 – Apuração da Contribuição Exclusivamente a Alíquota Básica </option>
								<option value='2 – Apuração da Contribuição a Alíquotas Específicas' <?= isset($response['data']['0110_CodTipoCont']) ? $response['data']['0110_CodTipoCont'] == '2 – Apuração da Contribuição a Alíquotas Específicas' ? 'selected' : '' : '' ?>> 2 – Apuração da Contribuição a Alíquotas Específicas </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0110_IndRegCum'>Código Critério de Escrituração</label>
							<select name='0110_IndRegCum' id='0110_IndRegCum' class='custom-select' placeholder='Código Critério de Escrituração' required>
								<option value=''> Selecione </option>
								<option value='1 – Regime de Caixa – Escrituração consolidada' <?= isset($response['data']['0110_IndRegCum']) ? $response['data']['0110_IndRegCum'] == '1 – Regime de Caixa – Escrituração consolidada' ? 'selected' : '' : '' ?>> 1 – Regime de Caixa – Escrituração consolidada </option>
								<option value='2 – Regime de Competência - Escrituração consolidada' <?= isset($response['data']['0110_IndRegCum']) ? $response['data']['0110_IndRegCum'] == '2 – Regime de Competência - Escrituração consolidada' ? 'selected' : '' : '' ?>> 2 – Regime de Competência - Escrituração consolidada </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0110_DtIni'>Data Inicial</label>
							<input type='date' name='0110_DtIni' id='0110_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data']['0110_DtIni']) ? $response['data']['0110_DtIni'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_DtIni']) ? $response['error']['0110_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_DtFin'>Data Final</label>
							<input type='date' name='0110_DtFin' id='0110_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data']['0110_DtFin']) ? $response['data']['0110_DtFin'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_DtFin']) ? $response['error']['0110_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='0110_PessoaJuridicaId' id='0110_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica' >
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data']['0110_PessoaJuridicaId']) ? $response['data']['0110_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_PessoaJuridicaId']) ? $response['error']['0110_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_Reg0111EFDCId'></label>
							<input type='hidden' name='0110_Reg0111EFDCId' value='<?= $IdParent ?>' required>
							<select name='0110_Reg0111EFDCId' id='0110_Reg0111EFDCId' class='custom-select' placeholder=''  disabled>
								<?= getOptionToSelect('regs0111efdc','0111_Id', '', $IdParent, $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_Reg0111EFDCId']) ? $response['error']['0110_Reg0111EFDCId'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0111efdc/'.$parentView.'/'.$IdParent) ?>'">Cancelar</button>
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
