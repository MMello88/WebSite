
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
                    <a href='<?= base_url('Ref433') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Código da Situação Tributária Referente ao PIS/Pasep </h1>
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
								<label for='433_Codigo'>Código</label>
							<input type='text'  name='433_Codigo' id='433_Codigo' class='form-control' placeholder='Código' value='<?= isset($response['data'][0]['433_Codigo']) ? $response['data'][0]['433_Codigo'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['433_Codigo']) ? $response['error']['433_Codigo'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='433_Descricao'>Descrição</label>
							<input type='text'  name='433_Descricao' id='433_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data'][0]['433_Descricao']) ? $response['data'][0]['433_Descricao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['433_Descricao']) ? $response['error']['433_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='433_DtIni'>Data Inicial</label>
							<input type='date'  name='433_DtIni' id='433_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['433_DtIni']) ? $response['data'][0]['433_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['433_DtIni']) ? $response['error']['433_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='433_DtFin'>Data Final</label>
							<input type='date'  name='433_DtFin' id='433_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['433_DtFin']) ? $response['data'][0]['433_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['433_DtFin']) ? $response['error']['433_DtFin'] : ''; ?></div>
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
