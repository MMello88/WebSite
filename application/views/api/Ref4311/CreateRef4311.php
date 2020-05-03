
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
                    <a href='<?= base_url('Ref4311') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Produtos Sujeitos a Alíquotas por Unidade de Medida de Produto </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Ref4311/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='4311_Codigo'>Código</label>
							<input type='text' name='4311_Codigo' id='4311_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data']['4311_Codigo']) ? $response['data']['4311_Codigo'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_Codigo']) ? $response['error']['4311_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_Descricao'>Descrição</label>
							<input type='text' name='4311_Descricao' id='4311_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data']['4311_Descricao']) ? $response['data']['4311_Descricao'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_Descricao']) ? $response['error']['4311_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_DtIni'>Data Inicial</label>
							<input type='date' name='4311_DtIni' id='4311_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data']['4311_DtIni']) ? $response['data']['4311_DtIni'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_DtIni']) ? $response['error']['4311_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_DtFin'>Data Final</label>
							<input type='date' name='4311_DtFin' id='4311_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data']['4311_DtFin']) ? $response['data']['4311_DtFin'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_DtFin']) ? $response['error']['4311_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_Ncm'>NCM</label>
							<input type='text' name='4311_Ncm' id='4311_Ncm' class='form-control' placeholder='NCM' value='<?= isset($response['data']['4311_Ncm']) ? $response['data']['4311_Ncm'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_Ncm']) ? $response['error']['4311_Ncm'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_NcmEx'>Exceto NCM</label>
							<input type='text' name='4311_NcmEx' id='4311_NcmEx' class='form-control' placeholder='Exceto NCM' value='<?= isset($response['data']['4311_NcmEx']) ? $response['data']['4311_NcmEx'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_NcmEx']) ? $response['error']['4311_NcmEx'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_ExIpi'>Código EX TIPI</label>
							<input type='text' name='4311_ExIpi' id='4311_ExIpi' class='form-control' placeholder='Código EX TIPI' value='<?= isset($response['data']['4311_ExIpi']) ? $response['data']['4311_ExIpi'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_ExIpi']) ? $response['error']['4311_ExIpi'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_Unid'>Unidade</label>
							<input type='text' name='4311_Unid' id='4311_Unid' class='form-control' placeholder='Unidade' value='<?= isset($response['data']['4311_Unid']) ? $response['data']['4311_Unid'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_Unid']) ? $response['error']['4311_Unid'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_AliqPis'>Alíquota do PIS %</label>
							<input type='number' name='4311_AliqPis' id='4311_AliqPis' class='form-control' placeholder='Alíquota do PIS %' value='<?= isset($response['data']['4311_AliqPis']) ? $response['data']['4311_AliqPis'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_AliqPis']) ? $response['error']['4311_AliqPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4311_AliqCofins'>Alíquota da COFINS %</label>
							<input type='number' name='4311_AliqCofins' id='4311_AliqCofins' class='form-control' placeholder='Alíquota da COFINS %' value='<?= isset($response['data']['4311_AliqCofins']) ? $response['data']['4311_AliqCofins'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4311_AliqCofins']) ? $response['error']['4311_AliqCofins'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Ref4311') ?>'">Cancelar</button>
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
