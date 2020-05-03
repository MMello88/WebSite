
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
                    <a href='<?= base_url('Ref714') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Detalhamento Analítico das Deduções e Exclusões </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Ref714/update/'.$response['data'][0]['714_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='714_Codigo'>Código</label>
							<input type='text' name='714_Codigo' id='714_Codigo' class='form-control' placeholder='Código' value='<?= $response['data'][0]['714_Codigo'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_Codigo']) ? $response['error']['714_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='714_Descricao'>Descrição</label>
							<input type='text' name='714_Descricao' id='714_Descricao' class='form-control' placeholder='Descrição' value='<?= $response['data'][0]['714_Descricao'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_Descricao']) ? $response['error']['714_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='714_DtIni'>Data Inicial</label>
							<input type='date' name='714_DtIni' id='714_DtIni' class='form-control' placeholder='Data Inicial' value='<?= $response['data'][0]['714_DtIni'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_DtIni']) ? $response['error']['714_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='714_DtFin'>Data Final</label>
							<input type='date' name='714_DtFin' id='714_DtFin' class='form-control' placeholder='Data Final' value='<?= $response['data'][0]['714_DtFin'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_DtFin']) ? $response['error']['714_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='714_IndTipoAtividade'>Indicador Tipo Atividade</label>
							<input type='text' name='714_IndTipoAtividade' id='714_IndTipoAtividade' class='form-control' placeholder='Indicador Tipo Atividade' value='<?= $response['data'][0]['714_IndTipoAtividade'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_IndTipoAtividade']) ? $response['error']['714_IndTipoAtividade'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='714_IndAjuste'>Indicador Ajuste</label>
							<input type='text' name='714_IndAjuste' id='714_IndAjuste' class='form-control' placeholder='Indicador Ajuste' value='<?= $response['data'][0]['714_IndAjuste'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_IndAjuste']) ? $response['error']['714_IndAjuste'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='714_Grupo'>Cód. Grupo</label>
							<input type='text' name='714_Grupo' id='714_Grupo' class='form-control' placeholder='Cód. Grupo' value='<?= $response['data'][0]['714_Grupo'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_Grupo']) ? $response['error']['714_Grupo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='714_SubGrupo'>Cód. SubGrupo</label>
							<input type='text' name='714_SubGrupo' id='714_SubGrupo' class='form-control' placeholder='Cód. SubGrupo' value='<?= $response['data'][0]['714_SubGrupo'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_SubGrupo']) ? $response['error']['714_SubGrupo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='714_IndOutros'>Indicador Outros</label>
							<input type='text' name='714_IndOutros' id='714_IndOutros' class='form-control' placeholder='Indicador Outros' value='<?= $response['data'][0]['714_IndOutros'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['714_IndOutros']) ? $response['error']['714_IndOutros'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Ref714') ?>'">Cancelar</button>
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

