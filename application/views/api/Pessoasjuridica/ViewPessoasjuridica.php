
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
                    <a href='<?= base_url('Pessoasjuridica') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Pessoa Juridica </h1>
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
								<label for='pj_Nome'>Nome</label>
							<input type='text' name='pj_Nome' id='pj_Nome' class='form-control' placeholder='Nome' value='<?= isset($response['data'][0]['pj_Nome']) ? $response['data'][0]['pj_Nome'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Nome']) ? $response['error']['pj_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_NomeFantasia'>Nome Fantasia</label>
							<input type='text' name='pj_NomeFantasia' id='pj_NomeFantasia' class='form-control' placeholder='Nome Fantasia' value='<?= isset($response['data'][0]['pj_NomeFantasia']) ? $response['data'][0]['pj_NomeFantasia'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_NomeFantasia']) ? $response['error']['pj_NomeFantasia'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Matriz'>Matriz</label>
							<input type='number' name='pj_Matriz' id='pj_Matriz' class='form-control' placeholder='Matriz' value='<?= isset($response['data'][0]['pj_Matriz']) ? $response['data'][0]['pj_Matriz'] : '0' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Matriz']) ? $response['error']['pj_Matriz'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Endereco'>Endereço</label>
							<input type='text' name='pj_Endereco' id='pj_Endereco' class='form-control' placeholder='Endereço' value='<?= isset($response['data'][0]['pj_Endereco']) ? $response['data'][0]['pj_Endereco'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Endereco']) ? $response['error']['pj_Endereco'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Numero'>Numero</label>
							<input type='text' name='pj_Numero' id='pj_Numero' class='form-control' placeholder='Numero' value='<?= isset($response['data'][0]['pj_Numero']) ? $response['data'][0]['pj_Numero'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Numero']) ? $response['error']['pj_Numero'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Complemento'>Complemento</label>
							<input type='text' name='pj_Complemento' id='pj_Complemento' class='form-control' placeholder='Complemento' value='<?= isset($response['data'][0]['pj_Complemento']) ? $response['data'][0]['pj_Complemento'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Complemento']) ? $response['error']['pj_Complemento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Bairro'>Bairro</label>
							<input type='text' name='pj_Bairro' id='pj_Bairro' class='form-control' placeholder='Bairro' value='<?= isset($response['data'][0]['pj_Bairro']) ? $response['data'][0]['pj_Bairro'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Bairro']) ? $response['error']['pj_Bairro'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_CEP'>Cep</label>
							<input type='text' name='pj_CEP' id='pj_CEP' class='form-control' placeholder='Cep' value='<?= isset($response['data'][0]['pj_CEP']) ? $response['data'][0]['pj_CEP'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_CEP']) ? $response['error']['pj_CEP'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Telefone'>Telefone</label>
							<input type='text' name='pj_Telefone' id='pj_Telefone' class='form-control' placeholder='Telefone' value='<?= isset($response['data'][0]['pj_Telefone']) ? $response['data'][0]['pj_Telefone'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Telefone']) ? $response['error']['pj_Telefone'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Celular'>Celular</label>
							<input type='text' name='pj_Celular' id='pj_Celular' class='form-control' placeholder='Celular' value='<?= isset($response['data'][0]['pj_Celular']) ? $response['data'][0]['pj_Celular'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Celular']) ? $response['error']['pj_Celular'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Email'>E-mail</label>
							<input type='text' name='pj_Email' id='pj_Email' class='form-control' placeholder='E-mail' value='<?= isset($response['data'][0]['pj_Email']) ? $response['data'][0]['pj_Email'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Email']) ? $response['error']['pj_Email'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_InscricaoEstadual'>Inscrição Estadual</label>
							<input type='text' name='pj_InscricaoEstadual' id='pj_InscricaoEstadual' class='form-control' placeholder='Inscrição Estadual' value='<?= isset($response['data'][0]['pj_InscricaoEstadual']) ? $response['data'][0]['pj_InscricaoEstadual'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_InscricaoEstadual']) ? $response['error']['pj_InscricaoEstadual'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Cnpj'>CNPJ</label>
							<input type='text' name='pj_Cnpj' id='pj_Cnpj' class='form-control' placeholder='CNPJ' value='<?= isset($response['data'][0]['pj_Cnpj']) ? $response['data'][0]['pj_Cnpj'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Cnpj']) ? $response['error']['pj_Cnpj'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_CNAE'>CNAE</label>
							<input type='text' name='pj_CNAE' id='pj_CNAE' class='form-control' placeholder='CNAE' value='<?= isset($response['data'][0]['pj_CNAE']) ? $response['data'][0]['pj_CNAE'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_CNAE']) ? $response['error']['pj_CNAE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_InscricaoMunicipal'>Inscrição Municipal</label>
							<input type='text' name='pj_InscricaoMunicipal' id='pj_InscricaoMunicipal' class='form-control' placeholder='Inscrição Municipal' value='<?= isset($response['data'][0]['pj_InscricaoMunicipal']) ? $response['data'][0]['pj_InscricaoMunicipal'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_InscricaoMunicipal']) ? $response['error']['pj_InscricaoMunicipal'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_NrSuframa'>Numero Suframa</label>
							<input type='text' name='pj_NrSuframa' id='pj_NrSuframa' class='form-control' placeholder='Numero Suframa' value='<?= isset($response['data'][0]['pj_NrSuframa']) ? $response['data'][0]['pj_NrSuframa'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_NrSuframa']) ? $response['error']['pj_NrSuframa'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_NaturezaJuridica'>Natureza Juridica</label>
							<input type='number' name='pj_NaturezaJuridica' id='pj_NaturezaJuridica' class='form-control' placeholder='Natureza Juridica' value='<?= isset($response['data'][0]['pj_NaturezaJuridica']) ? $response['data'][0]['pj_NaturezaJuridica'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_NaturezaJuridica']) ? $response['error']['pj_NaturezaJuridica'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_NomeContato'>Nome do Contato</label>
							<input type='text' name='pj_NomeContato' id='pj_NomeContato' class='form-control' placeholder='Nome do Contato' value='<?= isset($response['data'][0]['pj_NomeContato']) ? $response['data'][0]['pj_NomeContato'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_NomeContato']) ? $response['error']['pj_NomeContato'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_WebSite'>Web Site</label>
							<input type='text' name='pj_WebSite' id='pj_WebSite' class='form-control' placeholder='Web Site' value='<?= isset($response['data'][0]['pj_WebSite']) ? $response['data'][0]['pj_WebSite'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_WebSite']) ? $response['error']['pj_WebSite'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_DmContribuicao'>Contribuinte</label>
							<input type='number' name='pj_DmContribuicao' id='pj_DmContribuicao' class='form-control' placeholder='Contribuinte' value='<?= isset($response['data'][0]['pj_DmContribuicao']) ? $response['data'][0]['pj_DmContribuicao'] : '0' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_DmContribuicao']) ? $response['error']['pj_DmContribuicao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_MunicipioId'>Municipio</label>
							<select name='pj_MunicipioId' id='pj_MunicipioId' class='custom-select' placeholder='Municipio' required disabled>
								<?= getOptionToSelect('municipios','mun_Id', '', isset($response['data'][0]['pj_MunicipioId']) ? $response['data'][0]['pj_MunicipioId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_MunicipioId']) ? $response['error']['pj_MunicipioId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_PessoaFisicaId'>Pessoa Fisica</label>
							<select name='pj_PessoaFisicaId' id='pj_PessoaFisicaId' class='custom-select' placeholder='Pessoa Fisica' required disabled>
								<?= getOptionToSelect('pessoasfisica','pf_Id', '', isset($response['data'][0]['pj_PessoaFisicaId']) ? $response['data'][0]['pj_PessoaFisicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_PessoaFisicaId']) ? $response['error']['pj_PessoaFisicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Ativo'>Ativo</label>
							<select name='pj_Ativo' id='pj_Ativo' class='custom-select' placeholder='Ativo' required disabled>
								<option value=''> Selecione </option>
								<option value='True' <?= isset($response['data'][0]['pj_Ativo']) ? $response['data'][0]['pj_Ativo'] == 'True' ? 'selected' : '' : '' ?>> True </option>
								<option value='False' <?= isset($response['data'][0]['pj_Ativo']) ? $response['data'][0]['pj_Ativo'] == 'False' ? 'selected' : '' : '' ?>> False </option>
							</select>
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
  var url_get = '<?= base_url('pessoasjuridica/get'); ?>';
  var url_upd = '<?= base_url('pessoasjuridica/edit'); ?>';
  var url_view = '<?= base_url('pessoasjuridica/view'); ?>';
</script>
