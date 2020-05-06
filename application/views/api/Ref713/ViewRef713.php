
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
                    <a href='<?= base_url('Ref713') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Detalhamento Analítico das Receitas </h1>
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
								<label for='713_Codigo'>Código</label>
							<input type='text'  name='713_Codigo' id='713_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data'][0]['713_Codigo']) ? $response['data'][0]['713_Codigo'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_Codigo']) ? $response['error']['713_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='713_Descricao'>Descrição</label>
							<input type='text'  name='713_Descricao' id='713_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data'][0]['713_Descricao']) ? $response['data'][0]['713_Descricao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_Descricao']) ? $response['error']['713_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='713_DtIni'>Data Inicial</label>
							<input type='date'  name='713_DtIni' id='713_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['713_DtIni']) ? $response['data'][0]['713_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_DtIni']) ? $response['error']['713_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='713_DtFin'>Data Final</label>
							<input type='date'  name='713_DtFin' id='713_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['713_DtFin']) ? $response['data'][0]['713_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_DtFin']) ? $response['error']['713_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='713_IndTipoAtividade'>Indicador Tipo Atividade</label>
							<input type='text'  name='713_IndTipoAtividade' id='713_IndTipoAtividade' class='form-control' placeholder='Indicador Tipo Atividade' value='<?= isset($response['data'][0]['713_IndTipoAtividade']) ? $response['data'][0]['713_IndTipoAtividade'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_IndTipoAtividade']) ? $response['error']['713_IndTipoAtividade'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='713_IndAjuste'>Indicador Ajuste</label>
							<input type='text'  name='713_IndAjuste' id='713_IndAjuste' class='form-control' placeholder='Indicador Ajuste' value='<?= isset($response['data'][0]['713_IndAjuste']) ? $response['data'][0]['713_IndAjuste'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_IndAjuste']) ? $response['error']['713_IndAjuste'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='713_Grupo'>Cód. Grupo</label>
							<input type='text'  name='713_Grupo' id='713_Grupo' class='form-control' placeholder='Cód. Grupo' value='<?= isset($response['data'][0]['713_Grupo']) ? $response['data'][0]['713_Grupo'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_Grupo']) ? $response['error']['713_Grupo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='713_SubGrupo'>Cód. SubGrupo</label>
							<input type='text'  name='713_SubGrupo' id='713_SubGrupo' class='form-control' placeholder='Cód. SubGrupo' value='<?= isset($response['data'][0]['713_SubGrupo']) ? $response['data'][0]['713_SubGrupo'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_SubGrupo']) ? $response['error']['713_SubGrupo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='713_IndOutros'>Indicador Outros</label>
							<input type='text'  name='713_IndOutros' id='713_IndOutros' class='form-control' placeholder='Indicador Outros' value='<?= isset($response['data'][0]['713_IndOutros']) ? $response['data'][0]['713_IndOutros'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['713_IndOutros']) ? $response['error']['713_IndOutros'] : ''; ?></div>
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
