
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
                    <a href='<?= base_url('Ref4316') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Operações com Suspensão da Contribuição Social </h1>
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
								<label for='4316_Codigo'>Código</label>
							<input type='text'  name='4316_Codigo' id='4316_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data'][0]['4316_Codigo']) ? $response['data'][0]['4316_Codigo'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4316_Codigo']) ? $response['error']['4316_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4316_Descricao'>Descrição</label>
							<input type='text'  name='4316_Descricao' id='4316_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data'][0]['4316_Descricao']) ? $response['data'][0]['4316_Descricao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4316_Descricao']) ? $response['error']['4316_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4316_DtIni'>Data Inicial</label>
							<input type='date'  name='4316_DtIni' id='4316_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['4316_DtIni']) ? $response['data'][0]['4316_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4316_DtIni']) ? $response['error']['4316_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4316_DtFin'>Data Final</label>
							<input type='date'  name='4316_DtFin' id='4316_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['4316_DtFin']) ? $response['data'][0]['4316_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4316_DtFin']) ? $response['error']['4316_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4316_Ncm'>NCM</label>
							<input type='text'  name='4316_Ncm' id='4316_Ncm' class='form-control' placeholder='NCM' value='<?= isset($response['data'][0]['4316_Ncm']) ? $response['data'][0]['4316_Ncm'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4316_Ncm']) ? $response['error']['4316_Ncm'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4316_NcmEx'>Exceto NCM</label>
							<input type='text'  name='4316_NcmEx' id='4316_NcmEx' class='form-control' placeholder='Exceto NCM' value='<?= isset($response['data'][0]['4316_NcmEx']) ? $response['data'][0]['4316_NcmEx'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4316_NcmEx']) ? $response['error']['4316_NcmEx'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='4316_ExIpi'>Código EX TIPI</label>
							<input type='text'  name='4316_ExIpi' id='4316_ExIpi' class='form-control' placeholder='Código EX TIPI' value='<?= isset($response['data'][0]['4316_ExIpi']) ? $response['data'][0]['4316_ExIpi'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['4316_ExIpi']) ? $response['error']['4316_ExIpi'] : ''; ?></div>
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
