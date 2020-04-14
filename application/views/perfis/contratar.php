
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <?php if($this->session->flashdata("status")): ?>
              <?php if($this->session->flashdata("status") == "TRUE"): ?>
            <!-- .page-message -->
            <div class="page-message bg-success" role="alert">
              <span class="mr-5">Contrato realizado com sucesso!</span> <a href="#" class="btn btn-sm btn-icon btn-success" aria-label="Close" onclick="$(this).parent().fadeOut()"><span aria-hidden="true"><i class="fa fa-times"></i></span></a>
            </div><!-- /.page-message -->
              <?php else: ?>
            <!-- .page-message -->
            <div class="page-message bg-warning" role="alert">
              <span class="mr-5">Falha ao realizar o contrato!</span> <a href="#" class="btn btn-sm btn-icon btn-warning" aria-label="Close" onclick="$(this).parent().fadeOut()"><span aria-hidden="true"><i class="fa fa-times"></i></span></a>
            </div><!-- /.page-message -->
              <?php endif; ?>
            <?php endif; ?>
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <div class="d-flex flex-column flex-md-row">
                  <p class="lead">
                    <span class="font-weight-bold">Olá, <?= $login->data->uu_Nome ?>.</span> <span class="d-block text-muted">Obtenha novos contratos de Perfil.</span>
                  </p>
                </div>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .masonry-layout -->
                <div class="masonry-layout">
                <?php foreach ($perfis as $key => $perfil) : ?>
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body text-center">
                        <!-- .user-avatar -->
                        <a href="user-profile.html" class="user-avatar user-avatar-xxl my-3"><img src="<?= base_url('assets/images/avatars/uifaces16.jpg') ?>" alt=""></a> <!-- /.user-avatar -->
                        <h3 class="card-title text-truncate">
                          <a href="user-profile.html"><?= $perfil->ps_Nome ?></a>
                        </h3>
                        <?php if(!empty($perfil->ps_tag)): ?>
                        <!-- .skills -->
                        <p class="skills">
                          <?php 
                            $pieces = explode(";", $perfil->ps_tag);
                            foreach ($pieces as $key => $value): 
                          ?>
                            <?php if(!empty($value)): ?>
                            <a href="#" class="btn btn-xs btn-outline-secondary circle mt-1"><?= $value ?></a>                          
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </p><!-- /.skills -->
                        <?php endif; ?>
                        <p class="text-muted"> <?= $perfil->ps_Descricao ?> </p>
                        <?= form_open(base_url("perfis/add"), ["class" => "teste"]) ?>
                        <input type="hidden" name="pu_PerfisId" value="<?= $perfil->ps_Id ?>">
                        <input type="hidden" name="pu_UsersId" value="<?= $login->data->uu_Id ?>">
                        <p>
                          <button class="btn btn-primary circle" type="submit" >Contratar <i class="fa fa-arrow-right ml-2"></i></button>
                        </p>
                        <?= form_close() ?>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                <?php endforeach; ?>
                </div><!-- /.masonry-layout -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- /.wrapper -->

        <!-- .app-footer -->
        <footer class="app-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="text-muted" href="#">Support</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Help Center</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Terms of Service</a>
            </li>
          </ul>
          <div class="copyright"> Copyright © 2018. All right reserved. </div>
        </footer><!-- /.app-footer -->
      </main><!-- /.app-main -->
