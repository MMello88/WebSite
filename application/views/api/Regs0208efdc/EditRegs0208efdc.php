
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
                    <a href='<?= base_url('Regs0208efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Grupos por Marca Comercial – Refri </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0208efdc/update/'.$response['data'][0]['0208_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0208_Reg'>Registro</label>
							<input type='text'  name='0208_Reg' id='0208_Reg' class='form-control' placeholder='Registro' value='<?= $response['data'][0]['0208_Reg'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0208_Reg']) ? $response['error']['0208_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0208_CodTabIncidencia'>Código Tabela de Incidência</label>
							<select name='0208_CodTabIncidencia' id='0208_CodTabIncidencia' class='custom-select' placeholder='Código Tabela de Incidência' required>
								<option value=''> Selecione </option>
								<option value='01 – Tabela I' <?= $response['data'][0]['0208_CodTabIncidencia'] == '01 – Tabela I' ? 'selected' : '' ?>> 01 – Tabela I </option>
								<option value='02 – Tabela II' <?= $response['data'][0]['0208_CodTabIncidencia'] == '02 – Tabela II' ? 'selected' : '' ?>> 02 – Tabela II </option>
								<option value='03 – Tabela III' <?= $response['data'][0]['0208_CodTabIncidencia'] == '03 – Tabela III' ? 'selected' : '' ?>> 03 – Tabela III </option>
								<option value='04 – Tabela IV' <?= $response['data'][0]['0208_CodTabIncidencia'] == '04 – Tabela IV' ? 'selected' : '' ?>> 04 – Tabela IV </option>
								<option value='05 – Tabela V' <?= $response['data'][0]['0208_CodTabIncidencia'] == '05 – Tabela V' ? 'selected' : '' ?>> 05 – Tabela V </option>
								<option value='06 – Tabela VI' <?= $response['data'][0]['0208_CodTabIncidencia'] == '06 – Tabela VI' ? 'selected' : '' ?>> 06 – Tabela VI </option>
								<option value='07 – Tabela VII' <?= $response['data'][0]['0208_CodTabIncidencia'] == '07 – Tabela VII' ? 'selected' : '' ?>> 07 – Tabela VII </option>
								<option value='08– Tabela VIII' <?= $response['data'][0]['0208_CodTabIncidencia'] == '08– Tabela VIII' ? 'selected' : '' ?>> 08– Tabela VIII </option>
								<option value='09 – Tabela IX' <?= $response['data'][0]['0208_CodTabIncidencia'] == '09 – Tabela IX' ? 'selected' : '' ?>> 09 – Tabela IX </option>
								<option value='10 – Tabela X' <?= $response['data'][0]['0208_CodTabIncidencia'] == '10 – Tabela X' ? 'selected' : '' ?>> 10 – Tabela X </option>
								<option value='11 – Tabela XI' <?= $response['data'][0]['0208_CodTabIncidencia'] == '11 – Tabela XI' ? 'selected' : '' ?>> 11 – Tabela XI </option>
								<option value='12 – Tabela XII' <?= $response['data'][0]['0208_CodTabIncidencia'] == '12 – Tabela XII' ? 'selected' : '' ?>> 12 – Tabela XII </option>
								<option value='13 – Tabela XIII' <?= $response['data'][0]['0208_CodTabIncidencia'] == '13 – Tabela XIII' ? 'selected' : '' ?>> 13 – Tabela XIII </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0208_CodGrupo'>Código Grupo</label>
							<input type='text'  name='0208_CodGrupo' id='0208_CodGrupo' class='form-control' placeholder='Código Grupo' value='<?= $response['data'][0]['0208_CodGrupo'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0208_CodGrupo']) ? $response['error']['0208_CodGrupo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0208_MarcaComercial'>Marca Comercial</label>
							<input type='text'  name='0208_MarcaComercial' id='0208_MarcaComercial' class='form-control' placeholder='Marca Comercial' value='<?= $response['data'][0]['0208_MarcaComercial'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0208_MarcaComercial']) ? $response['error']['0208_MarcaComercial'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0208efdc') ?>'">Cancelar</button>
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

