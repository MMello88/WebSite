
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
                    <a href='<?= base_url('Ref411') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'>  Modelos de Documentos Fiscais </h1>
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
								<label for='411_Codigo'>Código</label>
							<input type='text' name='411_Codigo' id='411_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data'][0]['411_Codigo']) ? $response['data'][0]['411_Codigo'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['411_Codigo']) ? $response['error']['411_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='411_Descricao'>Descrição</label>
							<input type='text' name='411_Descricao' id='411_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data'][0]['411_Descricao']) ? $response['data'][0]['411_Descricao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['411_Descricao']) ? $response['error']['411_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='411_Modelo'>Modelo</label>
							<input type='text' name='411_Modelo' id='411_Modelo' class='form-control' placeholder='Modelo' value='<?= isset($response['data'][0]['411_Modelo']) ? $response['data'][0]['411_Modelo'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['411_Modelo']) ? $response['error']['411_Modelo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='411_DtIni'>Data Inicial</label>
							<input type='date' name='411_DtIni' id='411_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['411_DtIni']) ? $response['data'][0]['411_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['411_DtIni']) ? $response['error']['411_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='411_DtFin'>Data Final</label>
							<input type='date' name='411_DtFin' id='411_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['411_DtFin']) ? $response['data'][0]['411_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['411_DtFin']) ? $response['error']['411_DtFin'] : ''; ?></div>
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
