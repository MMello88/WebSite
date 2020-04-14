
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
              <div class='page-message bg-success' role='alert>
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
                    <a href='<?= base_url('Regs0111efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Tabela de Receita Bruta Mensal Para Fins de Rateio de Créditos Comuns </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0111efdc/update/'.$response['data'][0]['0111_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0111_Reg'>Registro</label>
							<input type='text' name='0111_Reg' id='0111_Reg' class='form-control' placeholder='Registro' value='<?= $response['data'][0]['0111_Reg'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_Reg']) ? $response['error']['0111_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCumTribMI'>Tributada</label>
							<input type='number' name='0111_RecBruNCumTribMI' id='0111_RecBruNCumTribMI' class='form-control' placeholder='Tributada' value='<?= $response['data'][0]['0111_RecBruNCumTribMI'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCumTribMI']) ? $response['error']['0111_RecBruNCumTribMI'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCumNaoTribMI'>Não Tributada</label>
							<input type='number' name='0111_RecBruNCumNaoTribMI' id='0111_RecBruNCumNaoTribMI' class='form-control' placeholder='Não Tributada' value='<?= $response['data'][0]['0111_RecBruNCumNaoTribMI'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCumNaoTribMI']) ? $response['error']['0111_RecBruNCumNaoTribMI'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCumExp'>Exportação</label>
							<input type='number' name='0111_RecBruNCumExp' id='0111_RecBruNCumExp' class='form-control' placeholder='Exportação' value='<?= $response['data'][0]['0111_RecBruNCumExp'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCumExp']) ? $response['error']['0111_RecBruNCumExp'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCum'>Receita Bruta Cumulativa</label>
							<input type='number' name='0111_RecBruNCum' id='0111_RecBruNCum' class='form-control' placeholder='Receita Bruta Cumulativa' value='<?= $response['data'][0]['0111_RecBruNCum'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCum']) ? $response['error']['0111_RecBruNCum'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCumTotal'>Receita Bruta Total</label>
							<input type='number' name='0111_RecBruNCumTotal' id='0111_RecBruNCumTotal' class='form-control' placeholder='Receita Bruta Total' value='<?= $response['data'][0]['0111_RecBruNCumTotal'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCumTotal']) ? $response['error']['0111_RecBruNCumTotal'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0111efdc') ?>'">Cancelar</button>
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
<script>
  var url_get = '<?= base_url('regs0111efdc/get'); ?>';
  var url_upd = '<?= base_url('regs0111efdc/edit'); ?>';
</script>
