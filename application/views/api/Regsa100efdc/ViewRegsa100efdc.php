
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
                    <a href='<?= base_url('Regsa100efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Documento - Nota Fiscal de Serviço </h1>
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
								<label for='a100_Reg'>Registro</label>
							<input type='text' name='a100_Reg' id='a100_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['a100_Reg']) ? $response['data'][0]['a100_Reg'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_Reg']) ? $response['error']['a100_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_CNPJ'>CNPJ</label>
							<input type='text' name='a100_CNPJ' id='a100_CNPJ' class='form-control' placeholder='CNPJ' value='<?= isset($response['data'][0]['a100_CNPJ']) ? $response['data'][0]['a100_CNPJ'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_CNPJ']) ? $response['error']['a100_CNPJ'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_IndicadorTipoOperacao'>Indicador Tipo Operação</label>
							<input type='number' name='a100_IndicadorTipoOperacao' id='a100_IndicadorTipoOperacao' class='form-control' placeholder='Indicador Tipo Operação' value='<?= isset($response['data'][0]['a100_IndicadorTipoOperacao']) ? $response['data'][0]['a100_IndicadorTipoOperacao'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_IndicadorTipoOperacao']) ? $response['error']['a100_IndicadorTipoOperacao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_IndicadorEmitenteDocumento'>Indicador Emitente</label>
							<input type='number' name='a100_IndicadorEmitenteDocumento' id='a100_IndicadorEmitenteDocumento' class='form-control' placeholder='Indicador Emitente' value='<?= isset($response['data'][0]['a100_IndicadorEmitenteDocumento']) ? $response['data'][0]['a100_IndicadorEmitenteDocumento'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_IndicadorEmitenteDocumento']) ? $response['error']['a100_IndicadorEmitenteDocumento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='Reg0150EFDCId'>Participante</label>
							<select name='Reg0150EFDCId' id='Reg0150EFDCId' class='custom-select' placeholder='Participante'  disabled>
								<?= getOptionToSelect('regs0150efdc','0150_Id', '', isset($response['data'][0]['Reg0150EFDCId']) ? $response['data'][0]['Reg0150EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['Reg0150EFDCId']) ? $response['error']['Reg0150EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_SituacaoDocumentoFiscal'>Código Situação</label>
							<input type='number' name='a100_SituacaoDocumentoFiscal' id='a100_SituacaoDocumentoFiscal' class='form-control' placeholder='Código Situação' value='<?= isset($response['data'][0]['a100_SituacaoDocumentoFiscal']) ? $response['data'][0]['a100_SituacaoDocumentoFiscal'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_SituacaoDocumentoFiscal']) ? $response['error']['a100_SituacaoDocumentoFiscal'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_Ser'>Série</label>
							<input type='text' name='a100_Ser' id='a100_Ser' class='form-control' placeholder='Série' value='<?= isset($response['data'][0]['a100_Ser']) ? $response['data'][0]['a100_Ser'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_Ser']) ? $response['error']['a100_Ser'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_Sub'>Subserie</label>
							<input type='text' name='a100_Sub' id='a100_Sub' class='form-control' placeholder='Subserie' value='<?= isset($response['data'][0]['a100_Sub']) ? $response['data'][0]['a100_Sub'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_Sub']) ? $response['error']['a100_Sub'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_NumDoc'>Número Documento</label>
							<input type='text' name='a100_NumDoc' id='a100_NumDoc' class='form-control' placeholder='Número Documento' value='<?= isset($response['data'][0]['a100_NumDoc']) ? $response['data'][0]['a100_NumDoc'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_NumDoc']) ? $response['error']['a100_NumDoc'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_ChaveEletronica'>Chave Eletrônica</label>
							<input type='text' name='a100_ChaveEletronica' id='a100_ChaveEletronica' class='form-control' placeholder='Chave Eletrônica' value='<?= isset($response['data'][0]['a100_ChaveEletronica']) ? $response['data'][0]['a100_ChaveEletronica'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_ChaveEletronica']) ? $response['error']['a100_ChaveEletronica'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_DtEmissaoDoc'>Data Emissão Documento</label>
							<input type='date' name='a100_DtEmissaoDoc' id='a100_DtEmissaoDoc' class='form-control' placeholder='Data Emissão Documento' value='<?= isset($response['data'][0]['a100_DtEmissaoDoc']) ? $response['data'][0]['a100_DtEmissaoDoc'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_DtEmissaoDoc']) ? $response['error']['a100_DtEmissaoDoc'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_DtConclusaoServico'>Data Conclusão do Serviço</label>
							<input type='date' name='a100_DtConclusaoServico' id='a100_DtConclusaoServico' class='form-control' placeholder='Data Conclusão do Serviço' value='<?= isset($response['data'][0]['a100_DtConclusaoServico']) ? $response['data'][0]['a100_DtConclusaoServico'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_DtConclusaoServico']) ? $response['error']['a100_DtConclusaoServico'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlDocumento'>Valor Total</label>
							<input type='' name='a100_VlDocumento' id='a100_VlDocumento' class='form-control' placeholder='Valor Total' value='<?= isset($response['data'][0]['a100_VlDocumento']) ? $response['data'][0]['a100_VlDocumento'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlDocumento']) ? $response['error']['a100_VlDocumento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_IndicadorTipoPagamento'>Tipo de Pagamento</label>
							<select name='a100_IndicadorTipoPagamento' id='a100_IndicadorTipoPagamento' class='custom-select' placeholder='Tipo de Pagamento' required disabled>
								<option value=''> Selecione </option>
								<option value='0- À vista' <?= isset($response['data'][0]['a100_IndicadorTipoPagamento']) ? $response['data'][0]['a100_IndicadorTipoPagamento'] == '0- À vista' ? 'selected' : '' : '' ?>> 0- À vista </option>
								<option value='1- A prazo' <?= isset($response['data'][0]['a100_IndicadorTipoPagamento']) ? $response['data'][0]['a100_IndicadorTipoPagamento'] == '1- A prazo' ? 'selected' : '' : '' ?>> 1- A prazo </option>
								<option value='9- Sem pagamento' <?= isset($response['data'][0]['a100_IndicadorTipoPagamento']) ? $response['data'][0]['a100_IndicadorTipoPagamento'] == '9- Sem pagamento' ? 'selected' : '' : '' ?>> 9- Sem pagamento </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='a100_VlDesconto'>Valor Total do Desconto</label>
							<input type='' name='a100_VlDesconto' id='a100_VlDesconto' class='form-control' placeholder='Valor Total do Desconto' value='<?= isset($response['data'][0]['a100_VlDesconto']) ? $response['data'][0]['a100_VlDesconto'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlDesconto']) ? $response['error']['a100_VlDesconto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlBcPis'>Valor Base Cálculo PIS/PASEP</label>
							<input type='' name='a100_VlBcPis' id='a100_VlBcPis' class='form-control' placeholder='Valor Base Cálculo PIS/PASEP' value='<?= isset($response['data'][0]['a100_VlBcPis']) ? $response['data'][0]['a100_VlBcPis'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlBcPis']) ? $response['error']['a100_VlBcPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlPis'>Valor Total do PIS</label>
							<input type='' name='a100_VlPis' id='a100_VlPis' class='form-control' placeholder='Valor Total do PIS' value='<?= isset($response['data'][0]['a100_VlPis']) ? $response['data'][0]['a100_VlPis'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlPis']) ? $response['error']['a100_VlPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlBcCofins'>Valor Base Cálculo COFINS</label>
							<input type='' name='a100_VlBcCofins' id='a100_VlBcCofins' class='form-control' placeholder='Valor Base Cálculo COFINS' value='<?= isset($response['data'][0]['a100_VlBcCofins']) ? $response['data'][0]['a100_VlBcCofins'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlBcCofins']) ? $response['error']['a100_VlBcCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlCofins'>Valor Total COFINS</label>
							<input type='' name='a100_VlCofins' id='a100_VlCofins' class='form-control' placeholder='Valor Total COFINS' value='<?= isset($response['data'][0]['a100_VlCofins']) ? $response['data'][0]['a100_VlCofins'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlCofins']) ? $response['error']['a100_VlCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlPisRetido'>Valor Total do PIS Retido na Fonte</label>
							<input type='' name='a100_VlPisRetido' id='a100_VlPisRetido' class='form-control' placeholder='Valor Total do PIS Retido na Fonte' value='<?= isset($response['data'][0]['a100_VlPisRetido']) ? $response['data'][0]['a100_VlPisRetido'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlPisRetido']) ? $response['error']['a100_VlPisRetido'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlConfinsRetido'>Valor Total da COFINS Retido na Fonte</label>
							<input type='' name='a100_VlConfinsRetido' id='a100_VlConfinsRetido' class='form-control' placeholder='Valor Total da COFINS Retido na Fonte' value='<?= isset($response['data'][0]['a100_VlConfinsRetido']) ? $response['data'][0]['a100_VlConfinsRetido'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlConfinsRetido']) ? $response['error']['a100_VlConfinsRetido'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlIss'>Valor do ISS</label>
							<input type='' name='a100_VlIss' id='a100_VlIss' class='form-control' placeholder='Valor do ISS' value='<?= isset($response['data'][0]['a100_VlIss']) ? $response['data'][0]['a100_VlIss'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlIss']) ? $response['error']['a100_VlIss'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_DtIni'>Data Inicial</label>
							<input type='date' name='a100_DtIni' id='a100_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data'][0]['a100_DtIni']) ? $response['data'][0]['a100_DtIni'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_DtIni']) ? $response['error']['a100_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_DtFin'>Data Final</label>
							<input type='date' name='a100_DtFin' id='a100_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data'][0]['a100_DtFin']) ? $response['data'][0]['a100_DtFin'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_DtFin']) ? $response['error']['a100_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='a100_PessoaJuridicaId' id='a100_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica'  disabled>
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data'][0]['a100_PessoaJuridicaId']) ? $response['data'][0]['a100_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_PessoaJuridicaId']) ? $response['error']['a100_PessoaJuridicaId'] : ''; ?></div>
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
              <li class='nav-item'>
                <a class='nav-link active show' data-toggle='tab' href='#TabRef0'>Complemento do Documento - Informação Complementar da NF</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link ' data-toggle='tab' href='#TabRef1'>Informação Complementar - Operações de Importação</a>
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
                      <button type='button' class='btn btn-outline-success' onclick="window.location.href='<?= base_url('Regsa110efdc/create') ?>'">
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
													<option value='2'> Informação Complementar </option>
													<option value='3'> Informação Complementar do Documento Fiscal </option>
													<option value='4'> Documento - Nota Fiscal de Serviço </option>
													<option value='5'> Usuário </option>

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
												<th> Registro </th>
												<th> Informação Complementar </th>
												<th> Informação Complementar do Documento Fiscal </th>
												<th> Documento - Nota Fiscal de Serviço </th>
												<th> Usuário </th>

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

                  </div><!-- /.tab-pane -->
      
                  <!-- .tab-pane -->
                  <div class='tab-pane fade ' id='TabRef1'>
                    <div class='d-flex align-items-center mb-4'>
                      <button type='button' class='btn btn-outline-success' onclick="window.location.href='<?= base_url('Regsa120efdc/create') ?>'">
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
													<option value='2'> Valor Total do Serviço </option>
													<option value='3'> Valor BC PIS </option>
													<option value='4'> Valor Pago PIS </option>
													<option value='5'> Data Pgto PIS </option>
													<option value='6'> Valor BC COFINS </option>
													<option value='7'> Valor Pago COFINS </option>
													<option value='8'> Data do Pgto COFINS </option>
													<option value='9'> Local da execução do serviço </option>
													<option value='10'> Documento - Nota Fiscal de Serviço </option>
													<option value='11'> Usuário </option>

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
												<th> Registro </th>
												<th> Valor Total do Serviço </th>
												<th> Valor BC PIS </th>
												<th> Valor Pago PIS </th>
												<th> Data Pgto PIS </th>
												<th> Valor BC COFINS </th>
												<th> Valor Pago COFINS </th>
												<th> Data do Pgto COFINS </th>
												<th> Local da execução do serviço </th>
												<th> Documento - Nota Fiscal de Serviço </th>
												<th> Usuário </th>

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
            <?= form_open('regsa110efdc/delete') ?>
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
            <?= form_open('regsa120efdc/delete') ?>
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
  var url_get = '<?= base_url('regsa100efdc/get'); ?>';
  var url_upd = '<?= base_url('regsa100efdc/edit'); ?>';
  var url_view = '<?= base_url('regsa100efdc/view'); ?>';
</script>
