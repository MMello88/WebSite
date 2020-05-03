
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
                    <a href='<?= base_url('Regs0200efdc') ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar</a>
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
                  <h1 class='page-title'> Identificação do Item (Produtos e Serviços) </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0200efdc/update/'.$response['data'][0]['0200_Id'])); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Alteração do registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0200_Reg'>Registro</label>
							<input type='text' name='0200_Reg' id='0200_Reg' class='form-control' placeholder='Registro' value='<?= $response['data'][0]['0200_Reg'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg']) ? $response['error']['0200_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodItem'>Código do Item</label>
							<input type='text' name='0200_CodItem' id='0200_CodItem' class='form-control' placeholder='Código do Item' value='<?= $response['data'][0]['0200_CodItem'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodItem']) ? $response['error']['0200_CodItem'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_DescricaoItem'>Descrição</label>
							<input type='text' name='0200_DescricaoItem' id='0200_DescricaoItem' class='form-control' placeholder='Descrição' value='<?= $response['data'][0]['0200_DescricaoItem'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_DescricaoItem']) ? $response['error']['0200_DescricaoItem'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodBarra'>Código de Barra</label>
							<input type='text' name='0200_CodBarra' id='0200_CodBarra' class='form-control' placeholder='Código de Barra' value='<?= $response['data'][0]['0200_CodBarra'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodBarra']) ? $response['error']['0200_CodBarra'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodAntItem'>Código Anterior do Item</label>
							<input type='text' name='0200_CodAntItem' id='0200_CodAntItem' class='form-control' placeholder='Código Anterior do Item' value='<?= $response['data'][0]['0200_CodAntItem'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodAntItem']) ? $response['error']['0200_CodAntItem'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_Reg0190EFDCId'>Unidades de Medida</label>
							<select name='0200_Reg0190EFDCId' id='0200_Reg0190EFDCId' class='custom-select' placeholder='Unidades de Medida' >
								<?= getOptionToSelect('regs0190efdc','0190_Id', '', $response['data'][0]['0200_Reg0190EFDCId'], $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg0190EFDCId']) ? $response['error']['0200_Reg0190EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_TipoItem'>Tipo do item</label>
							<select name='0200_TipoItem' id='0200_TipoItem' class='custom-select' placeholder='Tipo do item' required>
								<option value=''> Selecione </option>
								<option value='00 – Mercadoria para Revenda' <?= $response['data'][0]['0200_TipoItem'] == '00 – Mercadoria para Revenda' ? 'selected' : '' ?>> 00 – Mercadoria para Revenda </option>
								<option value='01 – Matéria-Prima' <?= $response['data'][0]['0200_TipoItem'] == '01 – Matéria-Prima' ? 'selected' : '' ?>> 01 – Matéria-Prima </option>
								<option value='02 – Embalagem' <?= $response['data'][0]['0200_TipoItem'] == '02 – Embalagem' ? 'selected' : '' ?>> 02 – Embalagem </option>
								<option value='03 – Produto em Processo' <?= $response['data'][0]['0200_TipoItem'] == '03 – Produto em Processo' ? 'selected' : '' ?>> 03 – Produto em Processo </option>
								<option value='04 – Produto Acabado' <?= $response['data'][0]['0200_TipoItem'] == '04 – Produto Acabado' ? 'selected' : '' ?>> 04 – Produto Acabado </option>
								<option value='05 – Subproduto' <?= $response['data'][0]['0200_TipoItem'] == '05 – Subproduto' ? 'selected' : '' ?>> 05 – Subproduto </option>
								<option value='06 – Produto Intermediário' <?= $response['data'][0]['0200_TipoItem'] == '06 – Produto Intermediário' ? 'selected' : '' ?>> 06 – Produto Intermediário </option>
								<option value='07 – Material de Uso e Consumo' <?= $response['data'][0]['0200_TipoItem'] == '07 – Material de Uso e Consumo' ? 'selected' : '' ?>> 07 – Material de Uso e Consumo </option>
								<option value='08 – Ativo Imobilizado' <?= $response['data'][0]['0200_TipoItem'] == '08 – Ativo Imobilizado' ? 'selected' : '' ?>> 08 – Ativo Imobilizado </option>
								<option value='09 – Serviços' <?= $response['data'][0]['0200_TipoItem'] == '09 – Serviços' ? 'selected' : '' ?>> 09 – Serviços </option>
								<option value='10 – Outros insumos' <?= $response['data'][0]['0200_TipoItem'] == '10 – Outros insumos' ? 'selected' : '' ?>> 10 – Outros insumos </option>
								<option value='99 – Outras' <?= $response['data'][0]['0200_TipoItem'] == '99 – Outras' ? 'selected' : '' ?>> 99 – Outras </option>
							</select>
						</div>
							<div class='form-group'>
								<label for='0200_CodNcm'>NCM</label>
							<input type='text' name='0200_CodNcm' id='0200_CodNcm' class='form-control' placeholder='NCM' value='<?= $response['data'][0]['0200_CodNcm'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodNcm']) ? $response['error']['0200_CodNcm'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_ExIpi'>Código EX TIPI</label>
							<input type='text' name='0200_ExIpi' id='0200_ExIpi' class='form-control' placeholder='Código EX TIPI' value='<?= $response['data'][0]['0200_ExIpi'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_ExIpi']) ? $response['error']['0200_ExIpi'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodGen'>Código Gênero Item</label>
							<input type='number' name='0200_CodGen' id='0200_CodGen' class='form-control' placeholder='Código Gênero Item' value='<?= $response['data'][0]['0200_CodGen'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodGen']) ? $response['error']['0200_CodGen'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_CodLst'>Código do Serviço</label>
							<input type='number' name='0200_CodLst' id='0200_CodLst' class='form-control' placeholder='Código do Serviço' value='<?= $response['data'][0]['0200_CodLst'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_CodLst']) ? $response['error']['0200_CodLst'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_AliqIcms'>Alíquota de ICMS</label>
							<input type='' name='0200_AliqIcms' id='0200_AliqIcms' class='form-control' placeholder='Alíquota de ICMS' value='<?= $response['data'][0]['0200_AliqIcms'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_AliqIcms']) ? $response['error']['0200_AliqIcms'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_DtIni'>Data Inicial</label>
							<input type='date' name='0200_DtIni' id='0200_DtIni' class='form-control' placeholder='Data Inicial' value='<?= $response['data'][0]['0200_DtIni'] ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_DtIni']) ? $response['error']['0200_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_DtFin'>Data Final</label>
							<input type='date' name='0200_DtFin' id='0200_DtFin' class='form-control' placeholder='Data Final' value='<?= $response['data'][0]['0200_DtFin'] ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_DtFin']) ? $response['error']['0200_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='0200_PessoaJuridicaId' id='0200_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica' >
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', $response['data'][0]['0200_PessoaJuridicaId'], $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_PessoaJuridicaId']) ? $response['error']['0200_PessoaJuridicaId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_Reg0205EFDCId'>Alteração do Item</label>
							<select name='0200_Reg0205EFDCId' id='0200_Reg0205EFDCId' class='custom-select' placeholder='Alteração do Item' >
								<?= getOptionToSelect('regs0205efdc','0205_Id', '', $response['data'][0]['0200_Reg0205EFDCId'], $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg0205EFDCId']) ? $response['error']['0200_Reg0205EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_Reg0206EFDCId'>Código de Produto Conforme Tabela ANP</label>
							<select name='0200_Reg0206EFDCId' id='0200_Reg0206EFDCId' class='custom-select' placeholder='Código de Produto Conforme Tabela ANP' >
								<?= getOptionToSelect('regs0206efdc','0206_Id', '', $response['data'][0]['0200_Reg0206EFDCId'], $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg0206EFDCId']) ? $response['error']['0200_Reg0206EFDCId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0200_Reg020EFDCId'>Código de Grupos por Marca Comercial</label>
							<select name='0200_Reg020EFDCId' id='0200_Reg020EFDCId' class='custom-select' placeholder='Código de Grupos por Marca Comercial' >
								<?= getOptionToSelect('regs0208efdc','0208_Id', '', $response['data'][0]['0200_Reg020EFDCId'], $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0200_Reg020EFDCId']) ? $response['error']['0200_Reg020EFDCId'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Regs0200efdc') ?>'">Cancelar</button>
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

