
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
                    <a href='<?= base_url('Municipios/'.$parentView.'/'.$IdParent) ?>'><i class='breadcrumb-icon fa fa-angle-left mr-2'></i>Voltar Matheus</a>
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
                  <h1 class='page-title'> Cadastro do Participante </h1>
                </header><!-- /.page-title-bar -->
                <!-- .base-style -->
                <div id='base-style' class='card'>
                  <!-- .card-body -->
                  <div class='card-body'>
                    <!-- .form -->
                    <?= form_open(base_url('Regs0150efdc/add/'.$parentView.'/'.$IdParent)); ?>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Adicionar um novo registro</legend> <!-- .form-group -->
							<div class='form-group'>
								<label for='0150_Reg'>Registro</label>
							<input type='text'  name='0150_Reg' id='0150_Reg' class='form-control' placeholder='Registro' value='<?= isset($response['data']['0150_Reg']) ? $response['data']['0150_Reg'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_Reg']) ? $response['error']['0150_Reg'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_CodPart'>Código Participante</label>
							<input type='text'  name='0150_CodPart' id='0150_CodPart' class='form-control' placeholder='Código Participante' value='<?= isset($response['data']['0150_CodPart']) ? $response['data']['0150_CodPart'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_CodPart']) ? $response['error']['0150_CodPart'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_Nome'>Nome</label>
							<input type='text'  name='0150_Nome' id='0150_Nome' class='form-control' placeholder='Nome' value='<?= isset($response['data']['0150_Nome']) ? $response['data']['0150_Nome'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_Nome']) ? $response['error']['0150_Nome'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_PaisId'>País</label>
							<select name='0150_PaisId' id='0150_PaisId' class='custom-select' placeholder='País' >
								<?= getOptionToSelect('paises','pss_Id', '', isset($response['data']['0150_PaisId']) ? $response['data']['0150_PaisId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_PaisId']) ? $response['error']['0150_PaisId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_CNPJ'>CNPJ</label>
							<input type='number' step='1' name='0150_CNPJ' id='0150_CNPJ' class='form-control' placeholder='CNPJ' value='<?= isset($response['data']['0150_CNPJ']) ? $response['data']['0150_CNPJ'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_CNPJ']) ? $response['error']['0150_CNPJ'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_CPF'>CPF</label>
							<input type='number' step='1' name='0150_CPF' id='0150_CPF' class='form-control' placeholder='CPF' value='<?= isset($response['data']['0150_CPF']) ? $response['data']['0150_CPF'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_CPF']) ? $response['error']['0150_CPF'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_IE'>Inscrição Estadual</label>
							<input type='text'  name='0150_IE' id='0150_IE' class='form-control' placeholder='Inscrição Estadual' value='<?= isset($response['data']['0150_IE']) ? $response['data']['0150_IE'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_IE']) ? $response['error']['0150_IE'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_MunicipioId'>Municipio</label>
							<input type='hidden' name='0150_MunicipioId' value='<?= $IdParent ?>' required>
							<select name='0150_MunicipioId' id='0150_MunicipioId' class='custom-select' placeholder='Municipio' required disabled>
								<?= getOptionToSelect('municipios','mun_Id', '', $IdParent, $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_MunicipioId']) ? $response['error']['0150_MunicipioId'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_Suframa'>Suframa</label>
							<input type='text'  name='0150_Suframa' id='0150_Suframa' class='form-control' placeholder='Suframa' value='<?= isset($response['data']['0150_Suframa']) ? $response['data']['0150_Suframa'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_Suframa']) ? $response['error']['0150_Suframa'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_End'>Endereço</label>
							<input type='text'  name='0150_End' id='0150_End' class='form-control' placeholder='Endereço' value='<?= isset($response['data']['0150_End']) ? $response['data']['0150_End'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_End']) ? $response['error']['0150_End'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_Num'>Número</label>
							<input type='text'  name='0150_Num' id='0150_Num' class='form-control' placeholder='Número' value='<?= isset($response['data']['0150_Num']) ? $response['data']['0150_Num'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_Num']) ? $response['error']['0150_Num'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_Compl'>Complemento</label>
							<input type='text'  name='0150_Compl' id='0150_Compl' class='form-control' placeholder='Complemento' value='<?= isset($response['data']['0150_Compl']) ? $response['data']['0150_Compl'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_Compl']) ? $response['error']['0150_Compl'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_Bairro'>Bairro</label>
							<input type='text'  name='0150_Bairro' id='0150_Bairro' class='form-control' placeholder='Bairro' value='<?= isset($response['data']['0150_Bairro']) ? $response['data']['0150_Bairro'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_Bairro']) ? $response['error']['0150_Bairro'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_DtIni'>Data Inicial</label>
							<input type='date'  name='0150_DtIni' id='0150_DtIni' class='form-control' placeholder='Data Inicial' value='<?= isset($response['data']['0150_DtIni']) ? $response['data']['0150_DtIni'] : '' ?>' required>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_DtIni']) ? $response['error']['0150_DtIni'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_DtFin'>Data Final</label>
							<input type='date'  name='0150_DtFin' id='0150_DtFin' class='form-control' placeholder='Data Final' value='<?= isset($response['data']['0150_DtFin']) ? $response['data']['0150_DtFin'] : '' ?>' >
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_DtFin']) ? $response['error']['0150_DtFin'] : ''; ?></div>
							<?php endif; ?>
						</div>
							<div class='form-group'>
								<label for='0150_PessoaJuridicaId'>Pessoa Juridica</label>
							<select name='0150_PessoaJuridicaId' id='0150_PessoaJuridicaId' class='custom-select' placeholder='Pessoa Juridica' >
								<?= getOptionToSelect('pessoasjuridica','pj_Id', '', isset($response['data']['0150_PessoaJuridicaId']) ? $response['data']['0150_PessoaJuridicaId'] : '', $login->data->token) ?>
							</select>
							<?php if(isset($response)): ?>
								<div class='invalid-feedback' style='display:block'><?= isset($response['error']['0150_PessoaJuridicaId']) ? $response['error']['0150_PessoaJuridicaId'] : ''; ?></div>
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
                          <button class='btn btn-secondary ml-auto' type='button' onclick="window.location.href='<?= base_url('Municipios/'.$parentView.'/'.$IdParent) ?>'">Cancelar</button>
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
