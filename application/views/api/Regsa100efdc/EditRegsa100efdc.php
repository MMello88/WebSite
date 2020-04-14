
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
                    <?= form_open(base_url('Regsa100efdc/update/'.$response['data'][0]['a100_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='a100_Reg'>Registro</label>
							<input type='text' name='a100_Reg' id='a100_Reg' class='form-control' placeholder='Registro' value='<?= $response['data'][0]['a100_Reg'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_Reg']) ? $response['error']['a100_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_CNPJ'>CNPJ</label>
							<input type='text' name='a100_CNPJ' id='a100_CNPJ' class='form-control' placeholder='CNPJ' value='<?= $response['data'][0]['a100_CNPJ'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_CNPJ']) ? $response['error']['a100_CNPJ'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_IndicadorTipoOperacao'>Indicador Tipo Operação</label>
							<input type='number' name='a100_IndicadorTipoOperacao' id='a100_IndicadorTipoOperacao' class='form-control' placeholder='Indicador Tipo Operação' value='<?= $response['data'][0]['a100_IndicadorTipoOperacao'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_IndicadorTipoOperacao']) ? $response['error']['a100_IndicadorTipoOperacao'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_IndicadorEmitenteDocumento'>Indicador Emitente</label>
							<input type='number' name='a100_IndicadorEmitenteDocumento' id='a100_IndicadorEmitenteDocumento' class='form-control' placeholder='Indicador Emitente' value='<?= $response['data'][0]['a100_IndicadorEmitenteDocumento'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_IndicadorEmitenteDocumento']) ? $response['error']['a100_IndicadorEmitenteDocumento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='Reg0150EFDCId'>Participante</label>
							<input type='number' name='Reg0150EFDCId' id='Reg0150EFDCId' class='form-control' placeholder='Participante' value='<?= $response['data'][0]['Reg0150EFDCId'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['Reg0150EFDCId']) ? $response['error']['Reg0150EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_SituacaoDocumentoFiscal'>Código Situação</label>
							<input type='number' name='a100_SituacaoDocumentoFiscal' id='a100_SituacaoDocumentoFiscal' class='form-control' placeholder='Código Situação' value='<?= $response['data'][0]['a100_SituacaoDocumentoFiscal'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_SituacaoDocumentoFiscal']) ? $response['error']['a100_SituacaoDocumentoFiscal'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_Ser'>Série</label>
							<input type='text' name='a100_Ser' id='a100_Ser' class='form-control' placeholder='Série' value='<?= $response['data'][0]['a100_Ser'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_Ser']) ? $response['error']['a100_Ser'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_Sub'>Subserie</label>
							<input type='text' name='a100_Sub' id='a100_Sub' class='form-control' placeholder='Subserie' value='<?= $response['data'][0]['a100_Sub'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_Sub']) ? $response['error']['a100_Sub'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_NumDoc'>Número Documento</label>
							<input type='text' name='a100_NumDoc' id='a100_NumDoc' class='form-control' placeholder='Número Documento' value='<?= $response['data'][0]['a100_NumDoc'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_NumDoc']) ? $response['error']['a100_NumDoc'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_ChaveEletronica'>Chave Eletrônica</label>
							<input type='text' name='a100_ChaveEletronica' id='a100_ChaveEletronica' class='form-control' placeholder='Chave Eletrônica' value='<?= $response['data'][0]['a100_ChaveEletronica'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_ChaveEletronica']) ? $response['error']['a100_ChaveEletronica'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_DtEmissaoDoc'>Data Emissão Documento</label>
							<input type='date' name='a100_DtEmissaoDoc' id='a100_DtEmissaoDoc' class='form-control' placeholder='Data Emissão Documento' value='<?= $response['data'][0]['a100_DtEmissaoDoc'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_DtEmissaoDoc']) ? $response['error']['a100_DtEmissaoDoc'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_DtConclusaoServico'>Data Conclusão do Serviço</label>
							<input type='date' name='a100_DtConclusaoServico' id='a100_DtConclusaoServico' class='form-control' placeholder='Data Conclusão do Serviço' value='<?= $response['data'][0]['a100_DtConclusaoServico'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_DtConclusaoServico']) ? $response['error']['a100_DtConclusaoServico'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlDocumento'>Valor Total</label>
							<input type='' name='a100_VlDocumento' id='a100_VlDocumento' class='form-control' placeholder='Valor Total' value='<?= $response['data'][0]['a100_VlDocumento'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlDocumento']) ? $response['error']['a100_VlDocumento'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_IndicadorTipoPagamento'>Tipo de Pagamento</label>
							<select name='a100_IndicadorTipoPagamento' id='a100_IndicadorTipoPagamento' class='custom-select' placeholder='Tipo de Pagamento' required>
								<option value=''> Selecione </option>
								<option value='0- À vista' <?= $response['data'][0]['a100_IndicadorTipoPagamento'] == '0- À vista' ? 'selected' : '' ?>> 0- À vista </option>
								<option value='1- A prazo' <?= $response['data'][0]['a100_IndicadorTipoPagamento'] == '1- A prazo' ? 'selected' : '' ?>> 1- A prazo </option>
								<option value='9- Sem pagamento' <?= $response['data'][0]['a100_IndicadorTipoPagamento'] == '9- Sem pagamento' ? 'selected' : '' ?>> 9- Sem pagamento </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='a100_VlDesconto'>Valor Total do Desconto</label>
							<input type='' name='a100_VlDesconto' id='a100_VlDesconto' class='form-control' placeholder='Valor Total do Desconto' value='<?= $response['data'][0]['a100_VlDesconto'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlDesconto']) ? $response['error']['a100_VlDesconto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlBcPis'>Valor Base Cálculo PIS/PASEP</label>
							<input type='' name='a100_VlBcPis' id='a100_VlBcPis' class='form-control' placeholder='Valor Base Cálculo PIS/PASEP' value='<?= $response['data'][0]['a100_VlBcPis'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlBcPis']) ? $response['error']['a100_VlBcPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlPis'>Valor Total do PIS</label>
							<input type='' name='a100_VlPis' id='a100_VlPis' class='form-control' placeholder='Valor Total do PIS' value='<?= $response['data'][0]['a100_VlPis'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlPis']) ? $response['error']['a100_VlPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlBcCofins'>Valor Base Cálculo COFINS</label>
							<input type='' name='a100_VlBcCofins' id='a100_VlBcCofins' class='form-control' placeholder='Valor Base Cálculo COFINS' value='<?= $response['data'][0]['a100_VlBcCofins'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlBcCofins']) ? $response['error']['a100_VlBcCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlCofins'>Valor Total COFINS</label>
							<input type='' name='a100_VlCofins' id='a100_VlCofins' class='form-control' placeholder='Valor Total COFINS' value='<?= $response['data'][0]['a100_VlCofins'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlCofins']) ? $response['error']['a100_VlCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlPisRetido'>Valor Total do PIS Retido na Fonte</label>
							<input type='' name='a100_VlPisRetido' id='a100_VlPisRetido' class='form-control' placeholder='Valor Total do PIS Retido na Fonte' value='<?= $response['data'][0]['a100_VlPisRetido'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlPisRetido']) ? $response['error']['a100_VlPisRetido'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlConfinsRetido'>Valor Total da COFINS Retido na Fonte</label>
							<input type='' name='a100_VlConfinsRetido' id='a100_VlConfinsRetido' class='form-control' placeholder='Valor Total da COFINS Retido na Fonte' value='<?= $response['data'][0]['a100_VlConfinsRetido'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlConfinsRetido']) ? $response['error']['a100_VlConfinsRetido'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_VlIss'>Valor do ISS</label>
							<input type='' name='a100_VlIss' id='a100_VlIss' class='form-control' placeholder='Valor do ISS' value='<?= $response['data'][0]['a100_VlIss'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_VlIss']) ? $response['error']['a100_VlIss'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_DtIni'>Data Inicial</label>
							<input type='date' name='a100_DtIni' id='a100_DtIni' class='form-control' placeholder='Data Inicial' value='<?= $response['data'][0]['a100_DtIni'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_DtIni']) ? $response['error']['a100_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_DtFin'>Data Final</label>
							<input type='date' name='a100_DtFin' id='a100_DtFin' class='form-control' placeholder='Data Final' value='<?= $response['data'][0]['a100_DtFin'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_DtFin']) ? $response['error']['a100_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a100_PessoaJuridicaId'>Pessoa Juridica</label>
							<input type='number' name='a100_PessoaJuridicaId' id='a100_PessoaJuridicaId' class='form-control' placeholder='Pessoa Juridica' value='<?= $response['data'][0]['a100_PessoaJuridicaId'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a100_PessoaJuridicaId']) ? $response['error']['a100_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>

                        <div class='form-actions'>
                          <button class='btn btn-primary mr-auto' type='submit'>Salvar</button>
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regsa100efdc') ?>'">Cancelar</button>
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
  var url_get = '<?= base_url('regsa100efdc/get'); ?>';
  var url_upd = '<?= base_url('regsa100efdc/edit'); ?>';
</script>
