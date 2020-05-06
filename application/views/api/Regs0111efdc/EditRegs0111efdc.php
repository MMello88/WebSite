
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
							<input type='text'  name='0111_Reg' id='0111_Reg' class='form-control' placeholder='Registro' value='<?= $response['data'][0]['0111_Reg'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_Reg']) ? $response['error']['0111_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCumTribMI'>Tributada</label>
							<input type='number' step='1' name='0111_RecBruNCumTribMI' id='0111_RecBruNCumTribMI' class='form-control' placeholder='Tributada' value='<?= $response['data'][0]['0111_RecBruNCumTribMI'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCumTribMI']) ? $response['error']['0111_RecBruNCumTribMI'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCumNaoTribMI'>Não Tributada</label>
							<input type='number' step='1' name='0111_RecBruNCumNaoTribMI' id='0111_RecBruNCumNaoTribMI' class='form-control' placeholder='Não Tributada' value='<?= $response['data'][0]['0111_RecBruNCumNaoTribMI'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCumNaoTribMI']) ? $response['error']['0111_RecBruNCumNaoTribMI'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCumExp'>Exportação</label>
							<input type='number' step='1' name='0111_RecBruNCumExp' id='0111_RecBruNCumExp' class='form-control' placeholder='Exportação' value='<?= $response['data'][0]['0111_RecBruNCumExp'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCumExp']) ? $response['error']['0111_RecBruNCumExp'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCum'>Receita Bruta Cumulativa</label>
							<input type='number' step='1' name='0111_RecBruNCum' id='0111_RecBruNCum' class='form-control' placeholder='Receita Bruta Cumulativa' value='<?= $response['data'][0]['0111_RecBruNCum'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCum']) ? $response['error']['0111_RecBruNCum'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0111_RecBruNCumTotal'>Receita Bruta Total</label>
							<input type='number' step='1' name='0111_RecBruNCumTotal' id='0111_RecBruNCumTotal' class='form-control' placeholder='Receita Bruta Total' value='<?= $response['data'][0]['0111_RecBruNCumTotal'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0111_RecBruNCumTotal']) ? $response['error']['0111_RecBruNCumTotal'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0111efdc') ?>'">Cancelar</button>
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
                <a class='nav-link active show' data-toggle='tab' href='#TabRef0'>Regimes de Apuração da Contribuição Social e de Apropriação de Crédito</a>
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
                      <?php if(isset($response['data'][0]['0111_Id'])): ?>
                      <button type='button' class='btn btn-outline-success' onclick="window.location.href='<?= base_url('Regs0110efdc/create/'.$nameView.'/'. $response['data'][0]['0111_Id']) ?>'">
                      <?php else: ?>
                      <button type='button' class='btn btn-outline-success' onclick="window.location.href='<?= base_url('Regs0110efdc/create/'.$nameView.'/') ?>'" disabled>
                      <?php endif; ?>
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
													<option value='1'> Registro </option>
													<option value='2'> Código Incidência Tributária </option>
													<option value='3'> Código Método Apropriação Créditos comuns </option>
													<option value='4'> Código Tipo de Contribuição Apurada </option>
													<option value='5'> Código Critério de Escrituração </option>
													<option value='6'> Data Inicial </option>
													<option value='7'> Data Final </option>
													<option value='8'> Pessoa Juridica </option>
													<option value='9'> Usuário </option>
													<option value='10'>  </option>

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
                    <table id='myTableRegs0110efdc' class='table'>
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
												<th> Registro </th>
												<th> Código Incidência Tributária </th>
												<th> Código Método Apropriação Créditos comuns </th>
												<th> Código Tipo de Contribuição Apurada </th>
												<th> Código Critério de Escrituração </th>
												<th> Data Inicial </th>
												<th> Data Final </th>
												<th> Pessoa Juridica </th>
												<th> Usuário </th>
												<th>  </th>

                        </tr>
                      </thead><!-- /thead -->
                      <!-- tbody -->
                      <tbody>
                        <!-- create empty row to passing html validator -->
                        <tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
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
      <div class='modal fade' id='modalDeleteRegistroregs0110efdc' tabindex='-1' role='dialog' aria-labelledby='ModalDeleteLabel' aria-hidden='true'>
        <!-- .modal-dialog -->
        <div class='modal-dialog modal-dialog-centered' role='document'>
          <!-- .modal-content -->
          <div class='modal-content'>
            <!-- .modal-header -->
            <div class='modal-header'>
              <h5 id='ModalDeleteLabel' class='modal-title'> Deseja Deletar este Registro? </h5>
            </div><!-- /.modal-header -->
          <?php if(isset($response['data'][0]['0111_Id'])): ?>
            <?= form_open('regs0110efdc/delete/'.$nameView.'/'.$response['data'][0]['0111_Id']) ?>
          <?php else: ?>
            <?= form_open('regs0110efdc/delete/'.$nameView.'/') ?>
          <?php endif; ?>
              <!-- .modal-body -->
              <div class='modal-body'>
                <input type='hidden' id='DeleteBy0110_id' name='Id' value=''>
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

<?php if(isset($response['data'][0]['0111_Id'])): ?>
  <script>
  var url_get_regs0110efdc = '<?= base_url('regs0110efdc/get/'.$response['data'][0]['0111_Id']); ?>';
  var url_upd_regs0110efdc = '<?= base_url('regs0110efdc/edit/'.$nameView.'/'. $response['data'][0]['0111_Id']); ?>';
  var url_view_regs0110efdc = '<?= base_url('regs0110efdc/view/'.$nameView.'/'. $response['data'][0]['0111_Id']); ?>';
</script>
<?php endif; ?>
      
          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->

