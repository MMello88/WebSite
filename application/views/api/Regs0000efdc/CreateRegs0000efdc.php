
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
                    <a href='<?= base_url('Regs0000efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Abertura do Arquivo Digital e Identificação da Pessoa Jurídica </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0000efdc/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0000_Reg'>Registro</label>
							<input type='text' name='0000_Reg' id='0000_Reg' class='form-control' placeholder='Registro' value='0000' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_Reg']) ? $response['error']['0000_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_Ref311Id'>Código Versão Leiaute</label>
							<input type='number' name='0000_Ref311Id' id='0000_Ref311Id' class='form-control' placeholder='Código Versão Leiaute' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_Ref311Id']) ? $response['error']['0000_Ref311Id'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_TipoEscrit'>Tipo Escrituração</label>
							<select name='0000_TipoEscrit' id='0000_TipoEscrit' class='custom-select' placeholder='Tipo Escrituração' required>
								<option value=''> Selecione </option>
								<option value='Original'> Original </option>
								<option value='Retificadora'> Retificadora </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0000_IndSitEsp'>Indicador Situação Especial</label>
							<select name='0000_IndSitEsp' id='0000_IndSitEsp' class='custom-select' placeholder='Indicador Situação Especial' required>
								<option value=''> Selecione </option>
								<option value='Abertura'> Abertura </option>
								<option value='Cisão'> Cisão </option>
								<option value='Fusão'> Fusão </option>
								<option value='Incorporação'> Incorporação </option>
								<option value='Encerramento'> Encerramento </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0000_NumRecAnterior'>Número Recibo Escrituração Anterior</label>
							<input type='text' name='0000_NumRecAnterior' id='0000_NumRecAnterior' class='form-control' placeholder='Número Recibo Escrituração Anterior' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_NumRecAnterior']) ? $response['error']['0000_NumRecAnterior'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_DtIni'>Data Inicial</label>
							<input type='date' name='0000_DtIni' id='0000_DtIni' class='form-control' placeholder='Data Inicial' value='' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_DtIni']) ? $response['error']['0000_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_DtFin'>Data Final</label>
							<input type='date' name='0000_DtFin' id='0000_DtFin' class='form-control' placeholder='Data Final' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_DtFin']) ? $response['error']['0000_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_IndNatPj'>Indicador da Natureza</label>
							<select name='0000_IndNatPj' id='0000_IndNatPj' class='custom-select' placeholder='Indicador da Natureza' required>
								<option value=''> Selecione </option>
								<option value='00 – Pessoa jurídica em geral'> 00 – Pessoa jurídica em geral </option>
								<option value='01 – Sociedade cooperativa'> 01 – Sociedade cooperativa </option>
								<option value='02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários'> 02 – Entidade sujeita ao PIS/Pasep exclusivamente com base na Folha de Salários </option>
								<option value='03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva'> 03 - Pessoa jurídica em geral participante de SCP como sócia ostensiva </option>
								<option value='04 – Sociedade cooperativa participante de SCP como sócia ostensiva'> 04 – Sociedade cooperativa participante de SCP como sócia ostensiva </option>
								<option value='05 – Sociedade em Conta de Participação - SCP'> 05 – Sociedade em Conta de Participação - SCP </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0000_IndAtiv'>Indicador Tipo Atividade Preponderante</label>
							<select name='0000_IndAtiv' id='0000_IndAtiv' class='custom-select' placeholder='Indicador Tipo Atividade Preponderante' required>
								<option value=''> Selecione </option>
								<option value='0 – Industrial ou equiparado a industrial'> 0 – Industrial ou equiparado a industrial </option>
								<option value='1 – Prestador de serviços'> 1 – Prestador de serviços </option>
								<option value='2 - Atividade de comércio'> 2 - Atividade de comércio </option>
								<option value='3 – Pessoas jurídicas referidas nos §§ 6º; 8º e 9º do art. 3º da Lei nº 9.718; de 1998'> 3 – Pessoas jurídicas referidas nos §§ 6º; 8º e 9º do art. 3º da Lei nº 9.718; de 1998 </option>
								<option value='4 – Atividade imobiliária'> 4 – Atividade imobiliária </option>
								<option value='9 – Outros'> 9 – Outros </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0000_PessoaJuridicaId'>Pessoa Juridica</label>
							<input type='number' name='0000_PessoaJuridicaId' id='0000_PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_PessoaJuridicaId']) ? $response['error']['0000_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_UsersId'>Usuário</label>
							<input type='number' name='0000_UsersId' id='0000_UsersId' class='form-control' placeholder='Usuário' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_UsersId']) ? $response['error']['0000_UsersId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_Reg0001EFDCId'>Abertura Bloco 0</label>
							<input type='number' name='0000_Reg0001EFDCId' id='0000_Reg0001EFDCId' class='form-control' placeholder='Abertura Bloco 0' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_Reg0001EFDCId']) ? $response['error']['0000_Reg0001EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0000_Regs0110EFDCId'>Regimes de Apuração da Contribuição Social e de Apropriação de Crédito</label>
							<input type='number' name='0000_Regs0110EFDCId' id='0000_Regs0110EFDCId' class='form-control' placeholder='Regimes de Apuração da Contribuição Social e de Apropriação de Crédito' value='' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0000_Regs0110EFDCId']) ? $response['error']['0000_Regs0110EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0000efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regs0000efdc/create'); ?>';
  var url_upd = '<?= base_url('regs0000efdc/edit'); ?>';
</script>
