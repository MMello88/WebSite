
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
                    <a href='<?= base_url('Regsa170efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Complemento do Documento - Itens do Documento </h1>
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
								<label for='a170_Reg'>Registro</label>
							<input type='text' name='a170_Reg' id='a170_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data'][0]['a170_Reg']) ? $response['data'][0]['a170_Reg'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_Reg']) ? $response['error']['a170_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_NumItem'>Sequencia</label>
							<input type='number' name='a170_NumItem' id='a170_NumItem' class='form-control' placeholder='Sequencia' value='<?= isset($response['data'][0]['a170_NumItem']) ? $response['data'][0]['a170_NumItem'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_NumItem']) ? $response['error']['a170_NumItem'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_Reg0200EFDCId'>Código do Item</label>
							<select name='a170_Reg0200EFDCId' id='a170_Reg0200EFDCId' class='custom-select' placeholder='Código do Item'  disabled>
								<?= getOptionToSelect('regs0200efdc','0200_Id', '', isset($response['data'][0]['a170_Reg0200EFDCId']) ? $response['data'][0]['a170_Reg0200EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_Reg0200EFDCId']) ? $response['error']['a170_Reg0200EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_DescricaoComplementar'>Descrição complementar</label>
							<input type='text' name='a170_DescricaoComplementar' id='a170_DescricaoComplementar' class='form-control' placeholder='Descrição complementar' value='<?= isset($response['data'][0]['a170_DescricaoComplementar']) ? $response['data'][0]['a170_DescricaoComplementar'] : '' ?>'  disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_DescricaoComplementar']) ? $response['error']['a170_DescricaoComplementar'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_VlItem'>Valor Total do Item</label>
							<input type='' name='a170_VlItem' id='a170_VlItem' class='form-control' placeholder='Valor Total do Item' value='<?= isset($response['data'][0]['a170_VlItem']) ? $response['data'][0]['a170_VlItem'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_VlItem']) ? $response['error']['a170_VlItem'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_VlDesconto'>Valor do Desconto</label>
							<input type='' name='a170_VlDesconto' id='a170_VlDesconto' class='form-control' placeholder='Valor do Desconto' value='<?= isset($response['data'][0]['a170_VlDesconto']) ? $response['data'][0]['a170_VlDesconto'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_VlDesconto']) ? $response['error']['a170_VlDesconto'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_Ref431Id'>Código da Situação Tributária</label>
							<select name='a170_Ref431Id' id='a170_Ref431Id' class='custom-select' placeholder='Código da Situação Tributária'  disabled>
								<?= getOptionToSelect('ref431','431_Id', '', isset($response['data'][0]['a170_Ref431Id']) ? $response['data'][0]['a170_Ref431Id'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_Ref431Id']) ? $response['error']['a170_Ref431Id'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_IndicadorOrigemCredito'>Origem do Crédito</label>
							<select name='a170_IndicadorOrigemCredito' id='a170_IndicadorOrigemCredito' class='custom-select' placeholder='Origem do Crédito' required disabled>
								<option value=''> Selecione </option>
								<option value='0 – Operação no Mercado Interno' <?= isset($response['data'][0]['a170_IndicadorOrigemCredito']) ? $response['data'][0]['a170_IndicadorOrigemCredito'] == '0 – Operação no Mercado Interno' ? 'selected' : '' : '' ?>> 0 – Operação no Mercado Interno </option>
								<option value='1 – Operação de Importação' <?= isset($response['data'][0]['a170_IndicadorOrigemCredito']) ? $response['data'][0]['a170_IndicadorOrigemCredito'] == '1 – Operação de Importação' ? 'selected' : '' : '' ?>> 1 – Operação de Importação </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='a170_Ref433Id'>Código da Situação Tributária Referente ao PIS/Pasep</label>
							<select name='a170_Ref433Id' id='a170_Ref433Id' class='custom-select' placeholder='Código da Situação Tributária Referente ao PIS/Pasep'  disabled>
								<?= getOptionToSelect('ref433','433_Id', '', isset($response['data'][0]['a170_Ref433Id']) ? $response['data'][0]['a170_Ref433Id'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_Ref433Id']) ? $response['error']['a170_Ref433Id'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_VlBcPis'>Valor BC PIS</label>
							<input type='' name='a170_VlBcPis' id='a170_VlBcPis' class='form-control' placeholder='Valor BC PIS' value='<?= isset($response['data'][0]['a170_VlBcPis']) ? $response['data'][0]['a170_VlBcPis'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_VlBcPis']) ? $response['error']['a170_VlBcPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_VlAliqPis'>Valor Alíquota do PIS</label>
							<input type='' name='a170_VlAliqPis' id='a170_VlAliqPis' class='form-control' placeholder='Valor Alíquota do PIS' value='<?= isset($response['data'][0]['a170_VlAliqPis']) ? $response['data'][0]['a170_VlAliqPis'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_VlAliqPis']) ? $response['error']['a170_VlAliqPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_VlPis'>Valor PIS</label>
							<input type='' name='a170_VlPis' id='a170_VlPis' class='form-control' placeholder='Valor PIS' value='<?= isset($response['data'][0]['a170_VlPis']) ? $response['data'][0]['a170_VlPis'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_VlPis']) ? $response['error']['a170_VlPis'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_Ref434Id'>Código da Situação Tributária Referente à Cofins</label>
							<select name='a170_Ref434Id' id='a170_Ref434Id' class='custom-select' placeholder='Código da Situação Tributária Referente à Cofins'  disabled>
								<?= getOptionToSelect('ref434','434_Id', '', isset($response['data'][0]['a170_Ref434Id']) ? $response['data'][0]['a170_Ref434Id'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_Ref434Id']) ? $response['error']['a170_Ref434Id'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_VlBcCofins'>Valor BC COFINS</label>
							<input type='' name='a170_VlBcCofins' id='a170_VlBcCofins' class='form-control' placeholder='Valor BC COFINS' value='<?= isset($response['data'][0]['a170_VlBcCofins']) ? $response['data'][0]['a170_VlBcCofins'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_VlBcCofins']) ? $response['error']['a170_VlBcCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_VlAliqCofins'>Valor Alíquota do COFINS</label>
							<input type='' name='a170_VlAliqCofins' id='a170_VlAliqCofins' class='form-control' placeholder='Valor Alíquota do COFINS' value='<?= isset($response['data'][0]['a170_VlAliqCofins']) ? $response['data'][0]['a170_VlAliqCofins'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_VlAliqCofins']) ? $response['error']['a170_VlAliqCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_VlCofins'>Valor da COFINS</label>
							<input type='' name='a170_VlCofins' id='a170_VlCofins' class='form-control' placeholder='Valor da COFINS' value='<?= isset($response['data'][0]['a170_VlCofins']) ? $response['data'][0]['a170_VlCofins'] : '' ?>' required disabled>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_VlCofins']) ? $response['error']['a170_VlCofins'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_Reg0500EFDCId'>Plano de Conta</label>
							<select name='a170_Reg0500EFDCId' id='a170_Reg0500EFDCId' class='custom-select' placeholder='Plano de Conta'  disabled>
								<?= getOptionToSelect('regs0500efdc','0500_Id', '', isset($response['data'][0]['a170_Reg0500EFDCId']) ? $response['data'][0]['a170_Reg0500EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_Reg0500EFDCId']) ? $response['error']['a170_Reg0500EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_Reg0600EFDCId'>Centro de Custo</label>
							<select name='a170_Reg0600EFDCId' id='a170_Reg0600EFDCId' class='custom-select' placeholder='Centro de Custo'  disabled>
								<?= getOptionToSelect('regs0600efdc','0600_Id', '', isset($response['data'][0]['a170_Reg0600EFDCId']) ? $response['data'][0]['a170_Reg0600EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_Reg0600EFDCId']) ? $response['error']['a170_Reg0600EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='a170_RegA100EFDCId'>Documento - Nota Fiscal de Serviço</label>
							<select name='a170_RegA100EFDCId' id='a170_RegA100EFDCId' class='custom-select' placeholder='Documento - Nota Fiscal de Serviço'  disabled>
								<?= getOptionToSelect('regsa100efdc','a100_Id', '', isset($response['data'][0]['a170_RegA100EFDCId']) ? $response['data'][0]['a170_RegA100EFDCId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['a170_RegA100EFDCId']) ? $response['error']['a170_RegA100EFDCId'] : ''; ?></div>
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
