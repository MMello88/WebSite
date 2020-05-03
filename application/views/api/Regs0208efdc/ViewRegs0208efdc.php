
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
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0208_Reg'>Registro</label>
							<input type='text' name='0208_Reg' id='0208_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['0208_Reg']) ? $response['data'][0]['0208_Reg'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0208_Reg']) ? $response['error']['0208_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0208_CodTabIncidencia'>Código Tabela de Incidência</label>
							<select name='0208_CodTabIncidencia' id='0208_CodTabIncidencia' class='custom-select' placeholder='Código Tabela de Incidência' required disabled>
								<option value=''> Selecione </option>
								<option value='01 – Tabela I' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '01 – Tabela I' ? 'selected' : '' : '' ?>> 01 – Tabela I </option>
								<option value='02 – Tabela II' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '02 – Tabela II' ? 'selected' : '' : '' ?>> 02 – Tabela II </option>
								<option value='03 – Tabela III' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '03 – Tabela III' ? 'selected' : '' : '' ?>> 03 – Tabela III </option>
								<option value='04 – Tabela IV' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '04 – Tabela IV' ? 'selected' : '' : '' ?>> 04 – Tabela IV </option>
								<option value='05 – Tabela V' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '05 – Tabela V' ? 'selected' : '' : '' ?>> 05 – Tabela V </option>
								<option value='06 – Tabela VI' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '06 – Tabela VI' ? 'selected' : '' : '' ?>> 06 – Tabela VI </option>
								<option value='07 – Tabela VII' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '07 – Tabela VII' ? 'selected' : '' : '' ?>> 07 – Tabela VII </option>
								<option value='08– Tabela VIII' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '08– Tabela VIII' ? 'selected' : '' : '' ?>> 08– Tabela VIII </option>
								<option value='09 – Tabela IX' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '09 – Tabela IX' ? 'selected' : '' : '' ?>> 09 – Tabela IX </option>
								<option value='10 – Tabela X' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '10 – Tabela X' ? 'selected' : '' : '' ?>> 10 – Tabela X </option>
								<option value='11 – Tabela XI' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '11 – Tabela XI' ? 'selected' : '' : '' ?>> 11 – Tabela XI </option>
								<option value='12 – Tabela XII' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '12 – Tabela XII' ? 'selected' : '' : '' ?>> 12 – Tabela XII </option>
								<option value='13 – Tabela XIII' <?= isset($response['data'][0]['0208_CodTabIncidencia']) ? $response['data'][0]['0208_CodTabIncidencia'] == '13 – Tabela XIII' ? 'selected' : '' : '' ?>> 13 – Tabela XIII </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0208_CodGrupo'>Código Grupo</label>
							<input type='text' name='0208_CodGrupo' id='0208_CodGrupo' class='form-control' placeholder='Código Grupo' value='<?= isset($response['data'][0]['0208_CodGrupo']) ? $response['data'][0]['0208_CodGrupo'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0208_CodGrupo']) ? $response['error']['0208_CodGrupo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0208_MarcaComercial'>Marca Comercial</label>
							<input type='text' name='0208_MarcaComercial' id='0208_MarcaComercial' class='form-control' placeholder='Marca Comercial' value='<?= isset($response['data'][0]['0208_MarcaComercial']) ? $response['data'][0]['0208_MarcaComercial'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0208_MarcaComercial']) ? $response['error']['0208_MarcaComercial'] : ''; ?></div>
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
