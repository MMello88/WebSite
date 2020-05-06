
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
                    <a href='<?= base_url('Regs0600efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Centro de Custos </h1>
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
								<label for='0600_Reg'>Registro</label>
							<input type='text'  name='0600_Reg' id='0600_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['0600_Reg']) ? $response['data'][0]['0600_Reg'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0600_Reg']) ? $response['error']['0600_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0600_DtAlteracao'>Data Alteração</label>
							<input type='datetime-local'  name='0600_DtAlteracao' id='0600_DtAlteracao' class='form-control' placeholder='Data Alteração' value='<?= isset($response['data'][0]['0600_DtAlteracao']) ? (substr($response['data'][0]['0600_DtAlteracao'],10,1) !== 'T' ? date_format(date_create_from_format('Y-m-d H:i:s', $response['data'][0]['0600_DtAlteracao']),'Y-m-d\TH:i') : $response['data'][0]['0600_DtAlteracao'])  : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0600_DtAlteracao']) ? $response['error']['0600_DtAlteracao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0600_CodCCusto'>Código</label>
							<input type='text'  name='0600_CodCCusto' id='0600_CodCCusto' class='form-control' placeholder='Código' value='<?= isset($response['data'][0]['0600_CodCCusto']) ? $response['data'][0]['0600_CodCCusto'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0600_CodCCusto']) ? $response['error']['0600_CodCCusto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0600_NomeCCusto'>Nome</label>
							<input type='text'  name='0600_NomeCCusto' id='0600_NomeCCusto' class='form-control' placeholder='Nome' value='<?= isset($response['data'][0]['0600_NomeCCusto']) ? $response['data'][0]['0600_NomeCCusto'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0600_NomeCCusto']) ? $response['error']['0600_NomeCCusto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0600_DtIni'>Data Inicial</label>
							<input type='date'  name='0600_DtIni' id='0600_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['0600_DtIni']) ? $response['data'][0]['0600_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0600_DtIni']) ? $response['error']['0600_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0600_DtFin'>Data Final</label>
							<input type='date'  name='0600_DtFin' id='0600_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['0600_DtFin']) ? $response['data'][0]['0600_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0600_DtFin']) ? $response['error']['0600_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0600_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='0600_PessoaJuridicaId' id='0600_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica'  disabled>
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data'][0]['0600_PessoaJuridicaId']) ? $response['data'][0]['0600_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0600_PessoaJuridicaId']) ? $response['error']['0600_PessoaJuridicaId'] : ''; ?></div>
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
