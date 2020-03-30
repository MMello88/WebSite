
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <div class="d-flex flex-column flex-md-row">
                  <p class="lead">
                    <span class="font-weight-bold">Olá, <?= $login->data->Nome ?>.</span> <span class="d-block text-muted">Área de escolha do Perfil.</span>
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
                          <a href="user-profile.html"><?= $perfil->Nome ?></a>
                        </h3>
                        <?php if(!empty($perfil->tag)): ?>
                        <!-- .skills -->
                        <p class="skills">
                          <?php 
                            $pieces = explode(";", $perfil->tag);
                            foreach ($pieces as $key => $value): 
                          ?>
                            <?php if(!empty($value)): ?>
                            <a href="#" class="btn btn-xs btn-outline-secondary circle mt-1"><?= $value ?></a>                          
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </p><!-- /.skills -->
                        <?php endif; ?>
                        <p class="text-muted"> <?= $perfil->Descricao ?> </p>
                        <p>
                          <a href="<?= base_url("perfis/selecionar/{$perfil->Id}") ?>" class="btn btn-primary circle">Entrar <i class="fa fa-arrow-right ml-2"></i></a>
                        </p>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
                <?php endforeach; ?>
                  <!-- .masonry-item -->
                  <div class="masonry-item col-lg-6">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body text-center">
                        <!-- .user-avatar -->
                        <a href="<?= base_url("perfis/contratar") ?>" class="user-avatar user-avatar-xxl mb-5"><i class="fa fa-plus-circle"></i></a> <!-- /.user-avatar -->
                        <p>
                          <a href="<?= base_url("perfis/contratar") ?>" class="btn btn-primary circle"><i class="fa fa-plus-circle mr-1"></i> Add Novo Perfil</a>
                        </p>
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.masonry-item -->
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
