
    <!-- .app-main -->
    <main class='app-main'>
      <!-- .wrapper -->
      <div class='wrapper'>
        <!-- .page -->
        <div class='page'>
        <?php if($response->method !== 'GET'): ?>
          <?php if($response->status == 'FALSE'): ?>
          <!-- .page-message -->
          <div class='page-message bg-warning' role='alert'>
            <span class='mr-5'><?= $response->message ?></span> <a href='#' class='btn btn-sm btn-icon btn-warning' aria-label='Close' onclick='$(this).parent().fadeOut()'><span aria-hidden='true'><i class='fa fa-times'></i></span></a>
          </div><!-- /.page-message -->
          <?php else: ?>
          <!-- .page-message -->
          <div class='page-message bg-success' role='alert'>
            <span class='mr-5'><?= $response->message ?></span> <a href='#' class='btn btn-sm btn-icon btn-success' aria-label='Close' onclick='$(this).parent().fadeOut()'><span aria-hidden='true'><i class='fa fa-times'></i></span></a>
          </div><!-- /.page-message -->    
          <?php endif; ?>
        <?php else: ?>
          <?php if($response->status == 'FALSE'): ?>
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
                    <a href='#'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Pessoa Juridica</a>
                  </li>
                </ol>
              </nav><!-- /.breadcrumb -->
              <!-- floating action -->
              <button type='button' class='btn btn-success btn-floated'><span class='fa fa-plus'></span></button> <!-- /floating action -->
            </header><!-- /.page-title-bar -->
            <!-- .page-section -->
            <div class='page-section'>
              <!-- .card -->
              <div class='card card-fluid'>
                <!-- .card-header -->
                <div class='card-header d-md-flex align-items-md-start'>
                  <h1 class='page-title mr-sm-auto'> Pessoa Juridica </h1><!-- .btn-toolbar -->
                  <div id='dt-buttons' class='btn-toolbar'></div><!-- /.btn-toolbar -->
                </div><!-- /.card-header -->
                <!-- .card-body -->
                <div class='card-body'>
                  <!-- .form-group -->
                  <div class='form-group'>
                    <!-- .input-group -->
                    <div class='input-group input-group-alt'>
                      <!-- .input-group-prepend -->
                      <div class='input-group-prepend'>
                        <select id='filterBy' class='custom-select'>
                          <option value='' selected> Filtrar por </option>
													<option value='0'> pj_Id </option>
													<option value='1'> pj_Nome </option>
													<option value='2'> pj_NomeFantasia </option>
													<option value='3'> pj_Matriz </option>
													<option value='4'> pj_Endereco </option>
													<option value='5'> pj_Numero </option>
													<option value='6'> pj_Complemento </option>
													<option value='7'> pj_Bairro </option>
													<option value='8'> pj_CEP </option>
													<option value='9'> pj_Telefone </option>
													<option value='10'> pj_Celular </option>
													<option value='11'> pj_Email </option>
													<option value='12'> pj_InscricaoEstadual </option>
													<option value='13'> pj_Cnpj </option>
													<option value='14'> pj_CNAE </option>
													<option value='15'> pj_InscricaoMunicipal </option>
													<option value='16'> pj_NrSuframa </option>
													<option value='17'> pj_NaturezaJuridica </option>
													<option value='18'> pj_NomeContato </option>
													<option value='19'> pj_WebSite </option>
													<option value='20'> pj_DmContribuicao </option>
													<option value='21'> MunicipioId </option>
													<option value='22'> PessoaFisicaId </option>
													<option value='23'> pj_Ativo </option>

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
                        <th colspan='2' style='min-width: 320px;'>
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
													<th> pj_Nome </th>
													<th> pj_NomeFantasia </th>
													<th> pj_Matriz </th>
													<th> pj_Endereco </th>
													<th> pj_Numero </th>
													<th> pj_Complemento </th>
													<th> pj_Bairro </th>
													<th> pj_CEP </th>
													<th> pj_Telefone </th>
													<th> pj_Celular </th>
													<th> pj_Email </th>
													<th> pj_InscricaoEstadual </th>
													<th> pj_Cnpj </th>
													<th> pj_CNAE </th>
													<th> pj_InscricaoMunicipal </th>
													<th> pj_NrSuframa </th>
													<th> pj_NaturezaJuridica </th>
													<th> pj_NomeContato </th>
													<th> pj_WebSite </th>
													<th> pj_DmContribuicao </th>
													<th> MunicipioId </th>
													<th> PessoaFisicaId </th>
													<th> pj_Ativo </th>
													<th style='width:100px; min-width:100px;'> &nbsp; </th>

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

    <title>Pessoa Juridica</title>
<script>
var url_get = '<?= base_url('pessoasjuridica/get'); ?>';
</script>