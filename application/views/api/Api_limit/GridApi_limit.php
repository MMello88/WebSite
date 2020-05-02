
    <!-- .app-main -->
    <main class='app-main'>
      <!-- .wrapper -->
      <div class='wrapper'>
        <!-- .page -->
        <div class='page'>
        <?php if($response['method'] !== 'GET'): ?>
          <?php if($response['status'] == 'FALSE'): ?>
          <!-- .page-message -->
          <div class='page-message bg-warning' role='alert'>
            <span class='mr-5'><?= $response['message'] ?></span> <a href='#' class='btn btn-sm btn-icon btn-warning' aria-label='Close' onclick='$(this).parent().fadeOut()'><span aria-hidden='true'><i class='fa fa-times'></i></span></a>
          </div><!-- /.page-message -->
          <?php else: ?>
          <!-- .page-message -->
          <div class='page-message bg-success' role='alert'>
            <span class='mr-5'><?= $response['message'] ?></span> <a href='#' class='btn btn-sm btn-icon btn-success' aria-label='Close' onclick='$(this).parent().fadeOut()'><span aria-hidden='true'><i class='fa fa-times'></i></span></a>
          </div><!-- /.page-message -->    
          <?php endif; ?>
        <?php else: ?>
          <?php if($response['status'] == 'FALSE'): ?>
          <!-- .page-message -->
          <div class='page-message bg-warning' role='alert'>
            <span class='mr-5'>Falha ao consultar o usuário!</span> <a href='#' class='btn btn-sm btn-icon btn-warning' aria-label='Close' onclick='$(this).parent().fadeOut()'><span aria-hidden='true'><i class='fa fa-times'></i></span></a>
          </div><!-- /.page-message -->
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
                    <a href='#'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Limit</a>
                  </li>
                </ol>
              </nav><!-- /.breadcrumb -->
              <!-- floating action -->
              <button type='button' class='btn btn-success btn-floated' onclick="window.location.href='<?= base_url('Api_limit/create') ?>'"><span class='fa fa-plus'></span></button> <!-- /floating action -->
            </header><!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class='page-section'>
              <!-- .card -->
              <div class='card card-fluid'>
                <!-- .card-header -->
                <div class='card-header d-md-flex align-items-md-start'>
                  <h1 class='page-title mr-sm-auto'> Limit </h1><!-- .btn-toolbar -->
                  <div id='dt-buttons' class='btn-toolbar'></div><!-- /.btn-toolbar -->
                  <div class='dropdown'>
                  <button type='button' class='btn btn-icon btn-light' data-toggle='dropdown'>
                  <i class='fa fa-ellipsis-v'></i></button>
                  <div class='dropdown-menu dropdown-menu-right'>
                    <div class='dropdown-arrow'></div>
                    <a href='#' class='dropdown-item' id='btnFloatedAdd'>Atualizar</a>
                  </div>
                </div>
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class='card-body'>
                  <!-- .form-group -->
                  <div class='form-group'>
                    <!-- .input-group -->
                    <div class='input-group input-group-alt'>
                      <!-- .input-group-prepend -->
                      <div class='input-group-prepend'>
                        <select id='filterBy' class='custom-select' style='width: 150px'>
                          <option value='' selected> Filtrar por </option>
													<option value='1'>  </option>
													<option value='2'>  </option>
													<option value='3'>  </option>
													<option value='4'>  </option>
													<option value='5'>  </option>

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
                  <table id='myTableApi_limit' class='table'>
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
												<th>  </th>
												<th>  </th>
												<th>  </th>
												<th>  </th>
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

                      </tr>
                    </tbody><!-- /tbody -->
                  </table><!-- /.table -->
                </div><!-- /.card-body -->
              </div><!-- /.card -->
            </div><!-- /.page-section -->



          </div><!-- /.page-inner -->
        </div><!-- /.page -->
      </div><!-- /.wrapper -->
    </main><!-- /.app-main -->

    <title>Limit</title>
<script>
var url_get = '<?= base_url('api_limit/get'); ?>';
var url_upd = '<?= base_url('api_limit/edit'); ?>';
var url_view = '<?= base_url('api_limit/view'); ?>';
</script>

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
      <?= form_open('api_limit/delete') ?>
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
