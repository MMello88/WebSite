
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
                    <a href='<?= base_url('Submenus') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Submenus </h1>
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
								<label for='sbm_MenusId'>Menu</label>
							<select name='sbm_MenusId' id='sbm_MenusId' class='custom-select' placeholder='Menu' required disabled>
								<?= getOptionToSelect('menus','mns_Id', '', isset($response['data'][0]['sbm_MenusId']) ? $response['data'][0]['sbm_MenusId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['sbm_MenusId']) ? $response['error']['sbm_MenusId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='sbm_Nome'>Nome do Submenu</label>
							<input type='text' name='sbm_Nome' id='sbm_Nome' class='form-control' placeholder='Nome do Submenu' value='<?= isset($response['data'][0]['sbm_Nome']) ? $response['data'][0]['sbm_Nome'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['sbm_Nome']) ? $response['error']['sbm_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='sbm_Ativo'>Ativo</label>
							<select name='sbm_Ativo' id='sbm_Ativo' class='custom-select' placeholder='Ativo' required disabled>
								<option value=''> Selecione </option>
								<option value='True' <?= isset($response['data'][0]['sbm_Ativo']) ? $response['data'][0]['sbm_Ativo'] == 'True' ? 'selected' : '' : '' ?>> True </option>
								<option value='False' <?= isset($response['data'][0]['sbm_Ativo']) ? $response['data'][0]['sbm_Ativo'] == 'False' ? 'selected' : '' : '' ?>> False </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='sbm_Icone'>Icone</label>
							<input type='' name='sbm_Icone' id='sbm_Icone' class='form-control' placeholder='Icone' value='<?= isset($response['data'][0]['sbm_Icone']) ? $response['data'][0]['sbm_Icone'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['sbm_Icone']) ? $response['error']['sbm_Icone'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='sbm_Url'>Url</label>
							<input type='' name='sbm_Url' id='sbm_Url' class='form-control' placeholder='Url' value='<?= isset($response['data'][0]['sbm_Url']) ? $response['data'][0]['sbm_Url'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['sbm_Url']) ? $response['error']['sbm_Url'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='sbm_Nivel'>Nível</label>
							<input type='number' name='sbm_Nivel' id='sbm_Nivel' class='form-control' placeholder='Nível' value='<?= isset($response['data'][0]['sbm_Nivel']) ? $response['data'][0]['sbm_Nivel'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['sbm_Nivel']) ? $response['error']['sbm_Nivel'] : ''; ?></div>
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
<script>
  var url_get = '<?= base_url('submenus/get'); ?>';
  var url_upd = '<?= base_url('submenus/edit'); ?>';
  var url_view = '<?= base_url('submenus/view'); ?>';
</script>
