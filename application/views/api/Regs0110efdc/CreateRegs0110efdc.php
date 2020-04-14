
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
                    <a href='<?= base_url('Regs0110efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                    <?= form_open(base_url('Regs0110efdc/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0110_Reg'>Registro</label>
							<input type='text' name='0110_Reg' id='0110_Reg' class='form-control' placeholder='Registro' value='0110' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_Reg']) ? $response['error']['0110_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_CodIncTrib'>Código Incidência Tributária</label>
							<select name='0110_CodIncTrib' id='0110_CodIncTrib' class='custom-select' placeholder='Código Incidência Tributária' required>
								<option value=''> Selecione </option>
								<option value='1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo'> 1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo </option>
								<option value='2 – Escrituração de operações com incidência exclusivamente no regime cumulativo'> 2 – Escrituração de operações com incidência exclusivamente no regime cumulativo </option>
								<option value='3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo'> 3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0110_IndAproCred'>Código Método Apropriação Créditos comuns</label>
							<select name='0110_IndAproCred' id='0110_IndAproCred' class='custom-select' placeholder='Código Método Apropriação Créditos comuns' required>
								<option value=''> Selecione </option>
								<option value='1 – Método de Apropriação Direta'> 1 – Método de Apropriação Direta </option>
								<option value='2 – Método de Rateio Proporcional (Receita Bruta'> 2 – Método de Rateio Proporcional (Receita Bruta </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0110_CodTipoCont'>Código Tipo de Contribuição Apurada</label>
							<select name='0110_CodTipoCont' id='0110_CodTipoCont' class='custom-select' placeholder='Código Tipo de Contribuição Apurada' required>
								<option value=''> Selecione </option>
								<option value='1 – Apuração da Contribuição Exclusivamente a Alíquota Básica'> 1 – Apuração da Contribuição Exclusivamente a Alíquota Básica </option>
								<option value='2 – Apuração da Contribuição a Alíquotas Específicas'> 2 – Apuração da Contribuição a Alíquotas Específicas </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0110_IndRegCum'>Código Critério de Escrituração</label>
							<select name='0110_IndRegCum' id='0110_IndRegCum' class='custom-select' placeholder='Código Critério de Escrituração' required>
								<option value=''> Selecione </option>
								<option value='1 – Regime de Caixa – Escrituração consolidada'> 1 – Regime de Caixa – Escrituração consolidada </option>
								<option value='2 – Regime de Competência - Escrituração consolidada'> 2 – Regime de Competência - Escrituração consolidada </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0110_DtIni'>Data Inicial</label>
							<input type='date' name='0110_DtIni' id='0110_DtIni' class='form-control' placeholder='Data Inicial' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_DtIni']) ? $response['error']['0110_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_DtFin'>Data Final</label>
							<input type='date' name='0110_DtFin' id='0110_DtFin' class='form-control' placeholder='Data Final' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_DtFin']) ? $response['error']['0110_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_PessoaJuridicaId'>Pessoa Juridica</label>
							<input type='number' name='0110_PessoaJuridicaId' id='0110_PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_PessoaJuridicaId']) ? $response['error']['0110_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_UsersId'>Usuário</label>
							<input type='number' name='0110_UsersId' id='0110_UsersId' class='form-control' placeholder='Usuário' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_UsersId']) ? $response['error']['0110_UsersId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0110_Reg0111EFDCId'></label>
							<input type='number' name='0110_Reg0111EFDCId' id='0110_Reg0111EFDCId' class='form-control' placeholder='' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0110_Reg0111EFDCId']) ? $response['error']['0110_Reg0111EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0110efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regs0110efdc/create'); ?>';
  var url_upd = '<?= base_url('regs0110efdc/edit'); ?>';
</script>
