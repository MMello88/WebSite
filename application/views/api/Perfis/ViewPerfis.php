
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
                    <a href='<?= base_url('Perfis') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Perfil </h1>
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
								<label for='ps_Nome'>Nome do Perfil</label>
							<input type='text' name='ps_Nome' id='ps_Nome' class='form-control' placeholder='Nome do Perfil' value='<?= isset($response['data'][0]['ps_Nome']) ? $response['data'][0]['ps_Nome'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['ps_Nome']) ? $response['error']['ps_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='ps_Ativo'>Ativo</label>
							<select name='ps_Ativo' id='ps_Ativo' class='custom-select' placeholder='Ativo' required disabled>
								<option value=''> Selecione </option>
								<option value='True' <?= isset($response['data'][0]['ps_Ativo']) ? $response['data'][0]['ps_Ativo'] == 'True' ? 'selected' : '' : '' ?>> True </option>
								<option value='False' <?= isset($response['data'][0]['ps_Ativo']) ? $response['data'][0]['ps_Ativo'] == 'False' ? 'selected' : '' : '' ?>> False </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='ps_Descricao'>Descrição</label>
							<input type='text' name='ps_Descricao' id='ps_Descricao' class='form-control' placeholder='Descrição' value='<?= isset($response['data'][0]['ps_Descricao']) ? $response['data'][0]['ps_Descricao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['ps_Descricao']) ? $response['error']['ps_Descricao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='ps_tag'>Tags do Perfil</label>
							<input type='text' name='ps_tag' id='ps_tag' class='form-control' placeholder='Tags do Perfil' value='<?= isset($response['data'][0]['ps_tag']) ? $response['data'][0]['ps_tag'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['ps_tag']) ? $response['error']['ps_tag'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='ps_Imagem'>Imagem</label>
							<input type='' name='ps_Imagem' id='ps_Imagem' class='form-control' placeholder='Imagem' value='<?= isset($response['data'][0]['ps_Imagem']) ? $response['data'][0]['ps_Imagem'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['ps_Imagem']) ? $response['error']['ps_Imagem'] : ''; ?></div>
							<?php endif; ?>
						</div>

                      </fieldset><!-- /.fieldset -->
                  </div><!-- /.card-body -->
                </div><!-- /.base-style -->
              </div><!-- /.section-block -->
            </div><!-- /.page-section -->

      <!-- .page-section -->
      <div class='page-section'>

        <!-- .card -->
        <div class='card card-fluid'>

          <!-- .card-header -->
          <div class='card-header d-md-flex align-items-md-start'>
            <ul class='nav nav-tabs card-header-tabs'>                
            </ul>
          </div><!-- /.card-header -->

          <!-- .card-body -->
          <div class='card-body'>
            <!-- .tab-content -->
            <div id='myTabContent' class='tab-content'>
          
      </div><!-- /.tab-content -->
    </div><!-- /.card-body -->
  </div><!-- /.card -->
</div><!-- /.page-section -->
    
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
<script>
  var url_get = '<?= base_url('perfis/get'); ?>';
  var url_upd = '<?= base_url('perfis/edit'); ?>';
  var url_view = '<?= base_url('perfis/view'); ?>';
</script>
