
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
                    <a href='<?= base_url('Ref712') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Composição das Deduções e Exclusões </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Ref712/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='712_Codigo'>Código</label>
							<input type='text'  name='712_Codigo' id='712_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data']['712_Codigo']) ? $response['data']['712_Codigo'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_Codigo']) ? $response['error']['712_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='712_Descricao'>Descrição</label>
							<input type='text'  name='712_Descricao' id='712_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data']['712_Descricao']) ? $response['data']['712_Descricao'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_Descricao']) ? $response['error']['712_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='712_DtIni'>Data Inicial</label>
							<input type='date'  name='712_DtIni' id='712_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data']['712_DtIni']) ? $response['data']['712_DtIni'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_DtIni']) ? $response['error']['712_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='712_DtFin'>Data Final</label>
							<input type='date'  name='712_DtFin' id='712_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data']['712_DtFin']) ? $response['data']['712_DtFin'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_DtFin']) ? $response['error']['712_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='712_IndTipoAtividade'>Indicador Tipo Atividade</label>
							<input type='text'  name='712_IndTipoAtividade' id='712_IndTipoAtividade' class='form-control' placeholder='Indicador Tipo Atividade' value='<?= isset($response['data']['712_IndTipoAtividade']) ? $response['data']['712_IndTipoAtividade'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_IndTipoAtividade']) ? $response['error']['712_IndTipoAtividade'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='712_IndAjuste'>Indicador Ajuste</label>
							<input type='text'  name='712_IndAjuste' id='712_IndAjuste' class='form-control' placeholder='Indicador Ajuste' value='<?= isset($response['data']['712_IndAjuste']) ? $response['data']['712_IndAjuste'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_IndAjuste']) ? $response['error']['712_IndAjuste'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='712_Grupo'>Cód. Grupo</label>
							<input type='text'  name='712_Grupo' id='712_Grupo' class='form-control' placeholder='Cód. Grupo' value='<?= isset($response['data']['712_Grupo']) ? $response['data']['712_Grupo'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_Grupo']) ? $response['error']['712_Grupo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='712_IndOutros'>Indicador Outros</label>
							<input type='text'  name='712_IndOutros' id='712_IndOutros' class='form-control' placeholder='Indicador Outros' value='<?= isset($response['data']['712_IndOutros']) ? $response['data']['712_IndOutros'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_IndOutros']) ? $response['error']['712_IndOutros'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='712_IndTipoDeducoes'>Geral/Específica</label>
							<input type='text'  name='712_IndTipoDeducoes' id='712_IndTipoDeducoes' class='form-control' placeholder='Geral/Específica' value='<?= isset($response['data']['712_IndTipoDeducoes']) ? $response['data']['712_IndTipoDeducoes'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['712_IndTipoDeducoes']) ? $response['error']['712_IndTipoDeducoes'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Ref712') ?>'">Cancelar</button>
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
