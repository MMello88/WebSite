
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
                    <a href='<?= base_url('Users') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Usuários </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Users/add')); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='uu_Nome'>Nome</label>
							<input type='text' name='uu_Nome' id='uu_Nome' class='form-control' placeholder='Nome' value='<?= isset($response['data']['uu_Nome']) ? $response['data']['uu_Nome'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Nome']) ? $response['error']['uu_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_Sobrenome'>Sobrenome</label>
							<input type='text' name='uu_Sobrenome' id='uu_Sobrenome' class='form-control' placeholder='Sobrenome' value='<?= isset($response['data']['uu_Sobrenome']) ? $response['data']['uu_Sobrenome'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Sobrenome']) ? $response['error']['uu_Sobrenome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_DataNascimento'>Data Nascimento</label>
							<input type='date' name='uu_DataNascimento' id='uu_DataNascimento' class='form-control' placeholder='Data Nascimento' value='<?= isset($response['data']['uu_DataNascimento']) ? $response['data']['uu_DataNascimento'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_DataNascimento']) ? $response['error']['uu_DataNascimento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_UrlFoto'>Foto</label>
							<input type='text' name='uu_UrlFoto' id='uu_UrlFoto' class='form-control' placeholder='Foto' value='<?= isset($response['data']['uu_UrlFoto']) ? $response['data']['uu_UrlFoto'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_UrlFoto']) ? $response['error']['uu_UrlFoto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_Ativo'>Ativo</label>
							<select name='uu_Ativo' id='uu_Ativo' class='custom-select' placeholder='Ativo' required>
								<option value=''> Selecione </option>
								<option value='True' <?= isset($response['data']['uu_Ativo']) ? $response['data']['uu_Ativo'] == 'True' ? 'selected' : '' : '' ?>> True </option>
								<option value='False' <?= isset($response['data']['uu_Ativo']) ? $response['data']['uu_Ativo'] == 'False' ? 'selected' : '' : '' ?>> False </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='uu_Criacao'></label>
							<input type='datetime-local' name='uu_Criacao' id='uu_Criacao' class='form-control' placeholder='' value='<?= isset($response['data']['uu_Criacao']) ? $response['data']['uu_Criacao'] : 'CURRENT_TIMESTAMP(6)' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Criacao']) ? $response['error']['uu_Criacao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_Email'>E-mail</label>
							<input type='text' name='uu_Email' id='uu_Email' class='form-control' placeholder='E-mail' value='<?= isset($response['data']['uu_Email']) ? $response['data']['uu_Email'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Email']) ? $response['error']['uu_Email'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_Senha'>Senha</label>
							<input type='text' name='uu_Senha' id='uu_Senha' class='form-control' placeholder='Senha' value='<?= isset($response['data']['uu_Senha']) ? $response['data']['uu_Senha'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_Senha']) ? $response['error']['uu_Senha'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_DataReset'></label>
							<input type='datetime-local' name='uu_DataReset' id='uu_DataReset' class='form-control' placeholder='' value='<?= isset($response['data']['uu_DataReset']) ? $response['data']['uu_DataReset'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_DataReset']) ? $response['error']['uu_DataReset'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='uu_IdReset'></label>
							<input type='text' name='uu_IdReset' id='uu_IdReset' class='form-control' placeholder='' value='<?= isset($response['data']['uu_IdReset']) ? $response['data']['uu_IdReset'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['uu_IdReset']) ? $response['error']['uu_IdReset'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Users') ?>'">Cancelar</button>
                        </div>
                      </fieldset><!-- /.fieldset -->
                    <?= form_close(); ?><!-- /.form -->
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
              <li class='nav-item'>
                <a class='nav-link active show' data-toggle='tab' href='#TabRef0'>Grupo de Usuário</a>
              </li>                
            </ul>
          </div><!-- /.card-header -->

          <!-- .card-body -->
          <div class='card-body'>
            <!-- .tab-content -->
            <div id='myTabContent' class='tab-content'>
          
                  <!-- .tab-pane -->
                  <div class='tab-pane fade active show' id='TabRef0'>
                    <div class='d-flex align-items-center mb-4'>
                      <button type='button' class='btn btn-outline-success' onclick="window.location.href='<?= base_url('Usersgrupo/create') ?>'">
                        <span class='fa fa-plus'></span>
                      </button> <!-- /floating action -->
                      <div class='dropdown ml-auto'>
                        <button type='button' class='btn btn-icon btn-light' data-toggle='dropdown'>
                        <i class='fa fa-ellipsis-v'></i></button>
                        <div class='dropdown-menu dropdown-menu-right'>
                          <div class='dropdown-arrow'></div>
                          <a href='#' class='dropdown-item' id='btnFloatedAdd'>Atualizar</a>
                        </div>
                      </div>
                    </div>

                    <!-- .form-group -->
                    <div class='form-group'>
                      <!-- .input-group -->
                      <div class='input-group input-group-alt'>
                        <!-- .input-group-prepend -->
                        <div class='input-group-prepend'>
                          <select id='filterBy' class='custom-select' style='width: 150px'>
                            <option value='' selected> Filtrar por </option>
													<option value='2'> Ativo </option>

                          </select>
                        </div><!-- /.input-group-prepend -->
                        <!-- .input-group -->
                        <div class='input-group has-clearable'>
                          <button id='clear-search' type='button' class='close' aria-label='Close'>
                            <span aria-hidden='true'><i class='fa fa-times-circle'></i></span>
                          </button>
                          <div class='input-group-prepend'>
                            <span class='input-group-text'><span class='oi oi-magnifying-glass'></span></span>
                          </div>
                          <input id='table-search' type='text' class='form-control' placeholder='Search products'>
                        </div><!-- /.input-group -->
                      </div><!-- /.input-group -->
                    </div><!-- /.form-group -->
                    <!-- .table -->
                    <table id='myTable' class='table'>
                      <!-- thead -->
                      <thead>
                        <tr>
                          <th>
                            <div class='thead-dd dropdown'>
                              <span class='custom-control custom-control-nolabel custom-checkbox'><input type='checkbox' class='custom-control-input' id='check-handle'> <label class='custom-control-label' for='check-handle'></label></span>
                              <div class='thead-btn' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class='fa fa-caret-down'></span>
                              </div>
                              <div class='dropdown-menu'>
                                <div class='dropdown-arrow'></div>
                                <a class='dropdown-item' href='#'>Select all</a> 
                                <a class='dropdown-item' href='#'>Unselect all</a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='#'>Bulk remove</a> 
                                <a class='dropdown-item' href='#'>Bulk edit</a> 
                                <a class='dropdown-item' href='#'>Separate actions</a>
                              </div>
                            </div>
                          </th>
												<th style='width:100px; min-width:120px;'> # </th>
												<th style='width:100px; min-width:120px;'> # </th>
												<th> Ativo </th>

                        </tr>
                      </thead><!-- /thead -->
                      <!-- tbody -->
                      <tbody>
                        <!-- create empty row to passing html validator -->
                        <tr>
												<td></td>
												<td></td>
												<td></td>

                        </tr>
                      </tbody><!-- /tbody -->
                    </table><!-- /.table -->

                  </div><!-- /.tab-pane -->
      
      </div><!-- /.tab-content -->
    </div><!-- /.card-body -->
  </div><!-- /.card -->
</div><!-- /.page-section -->
    
      <!-- Central modal -->
      <div class='modal fade' id='modalDeleteRegistro' tabindex='-1' role='dialog' aria-labelledby='ModalDeleteLabel' aria-hidden='true'>
        <!-- .modal-dialog -->
        <div class='modal-dialog modal-dialog-centered' role='document'>
          <!-- .modal-content -->
          <div class='modal-content'>
            <!-- .modal-header -->
            <div class='modal-header'>
              <h5 id='ModalDeleteLabel' class='modal-title'> Deseja Deletar este Registro? </h5>
            </div><!-- /.modal-header -->
            <?= form_open('usersgrupo/delete') ?>
              <!-- .modal-body -->
              <div class='modal-body'>
                <input type='hidden' id='DeleteById' name='Id' value=''>
              </div><!-- /.modal-body -->
              <!-- .modal-footer -->
              <div class='modal-footer'>
                <button type='submit' class='btn btn-primary'>Deletar</button>
                <button type='button' class='btn btn-light' data-dismiss='modal'>Cancelar</button>
              </div><!-- /.modal-footer -->
            <?= form_close() ?>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->
<script>
  var url_get = '<?= base_url('users/create'); ?>';
  var url_upd = '<?= base_url('users/edit'); ?>';
  var url_view = '<?= base_url('users/view'); ?>';
</script>
