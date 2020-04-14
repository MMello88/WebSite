
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
                    <?= form_open(base_url('Pessoasjuridica/update/'.$response['data'][0]['pj_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='pj_Nome'>Nome</label>
							<input type='text' name='pj_Nome' id='pj_Nome' class='form-control' placeholder='Nome' value='<?= $response['data'][0]['pj_Nome'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Nome']) ? $response['error']['pj_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_NomeFantasia'>Nome Fantasia</label>
							<input type='text' name='pj_NomeFantasia' id='pj_NomeFantasia' class='form-control' placeholder='Nome Fantasia' value='<?= $response['data'][0]['pj_NomeFantasia'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_NomeFantasia']) ? $response['error']['pj_NomeFantasia'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Matriz'>Matriz</label>
							<input type='number' name='pj_Matriz' id='pj_Matriz' class='form-control' placeholder='Matriz' value='<?= $response['data'][0]['pj_Matriz'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Matriz']) ? $response['error']['pj_Matriz'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Endereco'>Endereço</label>
							<input type='text' name='pj_Endereco' id='pj_Endereco' class='form-control' placeholder='Endereço' value='<?= $response['data'][0]['pj_Endereco'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Endereco']) ? $response['error']['pj_Endereco'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Numero'>Numero</label>
							<input type='text' name='pj_Numero' id='pj_Numero' class='form-control' placeholder='Numero' value='<?= $response['data'][0]['pj_Numero'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Numero']) ? $response['error']['pj_Numero'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Complemento'>Complemento</label>
							<input type='text' name='pj_Complemento' id='pj_Complemento' class='form-control' placeholder='Complemento' value='<?= $response['data'][0]['pj_Complemento'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Complemento']) ? $response['error']['pj_Complemento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Bairro'>Bairro</label>
							<input type='text' name='pj_Bairro' id='pj_Bairro' class='form-control' placeholder='Bairro' value='<?= $response['data'][0]['pj_Bairro'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Bairro']) ? $response['error']['pj_Bairro'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_CEP'>Cep</label>
							<input type='text' name='pj_CEP' id='pj_CEP' class='form-control' placeholder='Cep' value='<?= $response['data'][0]['pj_CEP'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_CEP']) ? $response['error']['pj_CEP'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Telefone'>Telefone</label>
							<input type='text' name='pj_Telefone' id='pj_Telefone' class='form-control' placeholder='Telefone' value='<?= $response['data'][0]['pj_Telefone'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Telefone']) ? $response['error']['pj_Telefone'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Celular'>Celular</label>
							<input type='text' name='pj_Celular' id='pj_Celular' class='form-control' placeholder='Celular' value='<?= $response['data'][0]['pj_Celular'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Celular']) ? $response['error']['pj_Celular'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Email'>E-mail</label>
							<input type='text' name='pj_Email' id='pj_Email' class='form-control' placeholder='E-mail' value='<?= $response['data'][0]['pj_Email'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Email']) ? $response['error']['pj_Email'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_InscricaoEstadual'>Inscrição Estadual</label>
							<input type='text' name='pj_InscricaoEstadual' id='pj_InscricaoEstadual' class='form-control' placeholder='Inscrição Estadual' value='<?= $response['data'][0]['pj_InscricaoEstadual'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_InscricaoEstadual']) ? $response['error']['pj_InscricaoEstadual'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Cnpj'>CNPJ</label>
							<input type='text' name='pj_Cnpj' id='pj_Cnpj' class='form-control' placeholder='CNPJ' value='<?= $response['data'][0]['pj_Cnpj'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_Cnpj']) ? $response['error']['pj_Cnpj'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_CNAE'>CNAE</label>
							<input type='text' name='pj_CNAE' id='pj_CNAE' class='form-control' placeholder='CNAE' value='<?= $response['data'][0]['pj_CNAE'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_CNAE']) ? $response['error']['pj_CNAE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_InscricaoMunicipal'>Inscrição Municipal</label>
							<input type='text' name='pj_InscricaoMunicipal' id='pj_InscricaoMunicipal' class='form-control' placeholder='Inscrição Municipal' value='<?= $response['data'][0]['pj_InscricaoMunicipal'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_InscricaoMunicipal']) ? $response['error']['pj_InscricaoMunicipal'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_NrSuframa'>Numero Suframa</label>
							<input type='text' name='pj_NrSuframa' id='pj_NrSuframa' class='form-control' placeholder='Numero Suframa' value='<?= $response['data'][0]['pj_NrSuframa'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_NrSuframa']) ? $response['error']['pj_NrSuframa'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_NaturezaJuridica'>Natureza Juridica</label>
							<input type='number' name='pj_NaturezaJuridica' id='pj_NaturezaJuridica' class='form-control' placeholder='Natureza Juridica' value='<?= $response['data'][0]['pj_NaturezaJuridica'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_NaturezaJuridica']) ? $response['error']['pj_NaturezaJuridica'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_NomeContato'>Nome do Contato</label>
							<input type='text' name='pj_NomeContato' id='pj_NomeContato' class='form-control' placeholder='Nome do Contato' value='<?= $response['data'][0]['pj_NomeContato'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_NomeContato']) ? $response['error']['pj_NomeContato'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_WebSite'>Web Site</label>
							<input type='text' name='pj_WebSite' id='pj_WebSite' class='form-control' placeholder='Web Site' value='<?= $response['data'][0]['pj_WebSite'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_WebSite']) ? $response['error']['pj_WebSite'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_DmContribuicao'>Contribuinte</label>
							<input type='number' name='pj_DmContribuicao' id='pj_DmContribuicao' class='form-control' placeholder='Contribuinte' value='<?= $response['data'][0]['pj_DmContribuicao'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_DmContribuicao']) ? $response['error']['pj_DmContribuicao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_MunicipioId'>Municipio</label>
							<input type='number' name='pj_MunicipioId' id='pj_MunicipioId' class='form-control' placeholder='Municipio' value='<?= $response['data'][0]['pj_MunicipioId'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_MunicipioId']) ? $response['error']['pj_MunicipioId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_PessoaFisicaId'>Pessoa Fisica</label>
							<input type='number' name='pj_PessoaFisicaId' id='pj_PessoaFisicaId' class='form-control' placeholder='Pessoa Fisica' value='<?= $response['data'][0]['pj_PessoaFisicaId'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pj_PessoaFisicaId']) ? $response['error']['pj_PessoaFisicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pj_Ativo'>Ativo</label>
							<select name='pj_Ativo' id='pj_Ativo' class='custom-select' placeholder='Ativo' required>
								<option value=''> Selecione </option>
								<option value='True' <?= $response['data'][0]['pj_Ativo'] == 'True' ? 'selected' : '' ?>> True </option>
								<option value='False' <?= $response['data'][0]['pj_Ativo'] == 'False' ? 'selected' : '' ?>> False </option>
							</select>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Pessoasjuridica') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('pessoasjuridica/get'); ?>';
  var url_upd = '<?= base_url('pessoasjuridica/edit'); ?>';
</script>
