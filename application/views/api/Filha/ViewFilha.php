
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
                    <a href='<?= base_url('Pai/'.$parentView.'/'.$IdParent) ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Filha Prodigio </h1>
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
								<label for='pfa_PaiId'>Tabela Pai</label>
							<select name='pfa_PaiId' id='pfa_PaiId' class='custom-select' placeholder='Tabela Pai' required disabled>
								<?= getOptionToSelect('pai','pp_Id', '', isset($response['data'][0]['pfa_PaiId']) ? $response['data'][0]['pfa_PaiId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pfa_PaiId']) ? $response['error']['pfa_PaiId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pfa_Nome'>Nome</label>
							<input type='text'  name='pfa_Nome' id='pfa_Nome' class='form-control' placeholder='Nome' value='<?= isset($response['data'][0]['pfa_Nome']) ? $response['data'][0]['pfa_Nome'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pfa_Nome']) ? $response['error']['pfa_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pfa_Valor'>Valor</label>
							<input type='number' step='0.01' name='pfa_Valor' id='pfa_Valor' class='form-control' placeholder='Valor' value='<?= isset($response['data'][0]['pfa_Valor']) ? $response['data'][0]['pfa_Valor'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pfa_Valor']) ? $response['error']['pfa_Valor'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pfa_Total'>Total</label>
							<input type='number' step='0.01' name='pfa_Total' id='pfa_Total' class='form-control' placeholder='Total' value='<?= isset($response['data'][0]['pfa_Total']) ? $response['data'][0]['pfa_Total'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pfa_Total']) ? $response['error']['pfa_Total'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pfa_DtNascimento'>Data Nascimento</label>
							<input type='datetime-local'  name='pfa_DtNascimento' id='pfa_DtNascimento' class='form-control' placeholder='Data Nascimento' value='<?= isset($response['data'][0]['pfa_DtNascimento']) ? (substr($response['data'][0]['pfa_DtNascimento'],10,1) !== 'T' ? date_format(date_create_from_format('Y-m-d H:i:s', $response['data'][0]['pfa_DtNascimento']),'Y-m-d\TH:i') : $response['data'][0]['pfa_DtNascimento'])  : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pfa_DtNascimento']) ? $response['error']['pfa_DtNascimento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pfa_DtCadastro'>Data Cadastro</label>
							<input type='date'  name='pfa_DtCadastro' id='pfa_DtCadastro' class='form-control' placeholder='Data Cadastro' value='<?= isset($response['data'][0]['pfa_DtCadastro']) ? $response['data'][0]['pfa_DtCadastro'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['pfa_DtCadastro']) ? $response['error']['pfa_DtCadastro'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='pfa_Sexo'>Sexo</label>
							<select name='pfa_Sexo' id='pfa_Sexo' class='custom-select' placeholder='Sexo' required disabled>
								<option value=''> Selecione </option>
								<option value='Masculino' <?= isset($response['data'][0]['pfa_Sexo']) ? $response['data'][0]['pfa_Sexo'] == 'Masculino' ? 'selected' : '' : '' ?>> Masculino </option>
								<option value='Feminino' <?= isset($response['data'][0]['pfa_Sexo']) ? $response['data'][0]['pfa_Sexo'] == 'Feminino' ? 'selected' : '' : '' ?>> Feminino </option>
							</select>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Pai/'.$parentView.'/'.$IdParent) ?>'">Cancelar</button>
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

