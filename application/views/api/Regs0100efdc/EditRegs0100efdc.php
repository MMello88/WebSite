
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
                    <a href='<?= base_url('Regs0100efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Dados do Contabilista </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0100efdc/update/'.$response['data'][0]['0100_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0100_Reg'>Registro</label>
							<input type='text' name='0100_Reg' id='0100_Reg' class='form-control' placeholder='Registro' value='<?= $response['data'][0]['0100_Reg'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_Reg']) ? $response['error']['0100_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_Nome'>Nome</label>
							<input type='text' name='0100_Nome' id='0100_Nome' class='form-control' placeholder='Nome' value='<?= $response['data'][0]['0100_Nome'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_Nome']) ? $response['error']['0100_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_CPF'>CPF</label>
							<input type='number' name='0100_CPF' id='0100_CPF' class='form-control' placeholder='CPF' value='<?= $response['data'][0]['0100_CPF'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_CPF']) ? $response['error']['0100_CPF'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_CRC'>CRC</label>
							<input type='text' name='0100_CRC' id='0100_CRC' class='form-control' placeholder='CRC' value='<?= $response['data'][0]['0100_CRC'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_CRC']) ? $response['error']['0100_CRC'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_CNPJ'>CNPJ</label>
							<input type='number' name='0100_CNPJ' id='0100_CNPJ' class='form-control' placeholder='CNPJ' value='<?= $response['data'][0]['0100_CNPJ'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_CNPJ']) ? $response['error']['0100_CNPJ'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_CEP'>CEP</label>
							<input type='number' name='0100_CEP' id='0100_CEP' class='form-control' placeholder='CEP' value='<?= $response['data'][0]['0100_CEP'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_CEP']) ? $response['error']['0100_CEP'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_End'>Endereço</label>
							<input type='text' name='0100_End' id='0100_End' class='form-control' placeholder='Endereço' value='<?= $response['data'][0]['0100_End'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_End']) ? $response['error']['0100_End'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_Num'>Número</label>
							<input type='text' name='0100_Num' id='0100_Num' class='form-control' placeholder='Número' value='<?= $response['data'][0]['0100_Num'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_Num']) ? $response['error']['0100_Num'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_Compl'>Complemento</label>
							<input type='text' name='0100_Compl' id='0100_Compl' class='form-control' placeholder='Complemento' value='<?= $response['data'][0]['0100_Compl'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_Compl']) ? $response['error']['0100_Compl'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_Bairro'>Bairro</label>
							<input type='text' name='0100_Bairro' id='0100_Bairro' class='form-control' placeholder='Bairro' value='<?= $response['data'][0]['0100_Bairro'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_Bairro']) ? $response['error']['0100_Bairro'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_Fone'>Fone</label>
							<input type='text' name='0100_Fone' id='0100_Fone' class='form-control' placeholder='Fone' value='<?= $response['data'][0]['0100_Fone'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_Fone']) ? $response['error']['0100_Fone'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_Fax'>Fax</label>
							<input type='text' name='0100_Fax' id='0100_Fax' class='form-control' placeholder='Fax' value='<?= $response['data'][0]['0100_Fax'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_Fax']) ? $response['error']['0100_Fax'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_Email'>E-mail</label>
							<input type='text' name='0100_Email' id='0100_Email' class='form-control' placeholder='E-mail' value='<?= $response['data'][0]['0100_Email'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_Email']) ? $response['error']['0100_Email'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_MunicipioId'>Municipio</label>
							<input type='number' name='0100_MunicipioId' id='0100_MunicipioId' class='form-control' placeholder='Municipio' value='<?= $response['data'][0]['0100_MunicipioId'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_MunicipioId']) ? $response['error']['0100_MunicipioId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_DtIni'>Data Inicial</label>
							<input type='date' name='0100_DtIni' id='0100_DtIni' class='form-control' placeholder='Data Inicial' value='<?= $response['data'][0]['0100_DtIni'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_DtIni']) ? $response['error']['0100_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_DtFin'>Data Final</label>
							<input type='date' name='0100_DtFin' id='0100_DtFin' class='form-control' placeholder='Data Final' value='<?= $response['data'][0]['0100_DtFin'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_DtFin']) ? $response['error']['0100_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0100_PessoaJuridicaId'>Pessoa Juridica</label>
							<input type='number' name='0100_PessoaJuridicaId' id='0100_PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' value='<?= $response['data'][0]['0100_PessoaJuridicaId'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0100_PessoaJuridicaId']) ? $response['error']['0100_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0100efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regs0100efdc/get'); ?>';
  var url_upd = '<?= base_url('regs0100efdc/edit'); ?>';
  var url_view = '<?= base_url('regs0100efdc/view'); ?>';
</script>
