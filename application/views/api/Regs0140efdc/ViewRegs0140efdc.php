
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
                    <a href='<?= base_url('Regs0140efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Tabela de Cadastro de Estabelecimentos </h1>
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
								<label for='0140_Reg'>Registro</label>
							<input type='text' name='0140_Reg' id='0140_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['0140_Reg']) ? $response['data'][0]['0140_Reg'] : '0140' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_Reg']) ? $response['error']['0140_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_CodEstab'>Código</label>
							<input type='text' name='0140_CodEstab' id='0140_CodEstab' class='form-control' placeholder='Código' value='<?= isset($response['data'][0]['0140_CodEstab']) ? $response['data'][0]['0140_CodEstab'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_CodEstab']) ? $response['error']['0140_CodEstab'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_Nome'>Nome</label>
							<input type='text' name='0140_Nome' id='0140_Nome' class='form-control' placeholder='Nome' value='<?= isset($response['data'][0]['0140_Nome']) ? $response['data'][0]['0140_Nome'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_Nome']) ? $response['error']['0140_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_CNPJ'>CNPJ</label>
							<input type='number' name='0140_CNPJ' id='0140_CNPJ' class='form-control' placeholder='CNPJ' value='<?= isset($response['data'][0]['0140_CNPJ']) ? $response['data'][0]['0140_CNPJ'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_CNPJ']) ? $response['error']['0140_CNPJ'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_UF'>UF</label>
							<input type='text' name='0140_UF' id='0140_UF' class='form-control' placeholder='UF' value='<?= isset($response['data'][0]['0140_UF']) ? $response['data'][0]['0140_UF'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_UF']) ? $response['error']['0140_UF'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_IE'>Inscrição Estadual</label>
							<input type='text' name='0140_IE' id='0140_IE' class='form-control' placeholder='Inscrição Estadual' value='<?= isset($response['data'][0]['0140_IE']) ? $response['data'][0]['0140_IE'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_IE']) ? $response['error']['0140_IE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_MunicipioId'>Municipio</label>
							<select name='0140_MunicipioId' id='0140_MunicipioId' class='custom-select' placeholder='Municipio' required disabled>
								<?= getOptionToSelect('municipios','mun_Id', '', isset($response['data'][0]['0140_MunicipioId']) ? $response['data'][0]['0140_MunicipioId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_MunicipioId']) ? $response['error']['0140_MunicipioId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_IM'>Inscrição Municipal</label>
							<input type='text' name='0140_IM' id='0140_IM' class='form-control' placeholder='Inscrição Municipal' value='<?= isset($response['data'][0]['0140_IM']) ? $response['data'][0]['0140_IM'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_IM']) ? $response['error']['0140_IM'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_Suframa'>Suframa</label>
							<input type='text' name='0140_Suframa' id='0140_Suframa' class='form-control' placeholder='Suframa' value='<?= isset($response['data'][0]['0140_Suframa']) ? $response['data'][0]['0140_Suframa'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_Suframa']) ? $response['error']['0140_Suframa'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_DtIni'>Data Inicial</label>
							<input type='date' name='0140_DtIni' id='0140_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['0140_DtIni']) ? $response['data'][0]['0140_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_DtIni']) ? $response['error']['0140_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_DtFin'>Data Final</label>
							<input type='date' name='0140_DtFin' id='0140_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['0140_DtFin']) ? $response['data'][0]['0140_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_DtFin']) ? $response['error']['0140_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='0140_PessoaJuridicaId' id='0140_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica'  disabled>
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data'][0]['0140_PessoaJuridicaId']) ? $response['data'][0]['0140_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_PessoaJuridicaId']) ? $response['error']['0140_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0140_Reg0145EFDCId'>Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta</label>
							<select name='0140_Reg0145EFDCId' id='0140_Reg0145EFDCId' class='custom-select' placeholder='Regime de Apuração da Contribuição Previdenciária Sobre a Receita Bruta'  disabled>
								<?= getOptionToSelect('regs0145efdc','0145_Id', '', isset($response['data'][0]['0140_Reg0145EFDCId']) ? $response['data'][0]['0140_Reg0145EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0140_Reg0145EFDCId']) ? $response['error']['0140_Reg0145EFDCId'] : ''; ?></div>
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
  var url_get = '<?= base_url('regs0140efdc/get'); ?>';
  var url_upd = '<?= base_url('regs0140efdc/edit'); ?>';
  var url_view = '<?= base_url('regs0140efdc/view'); ?>';
</script>
