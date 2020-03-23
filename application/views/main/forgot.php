<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Password Reset | Looper - Bootstrap 4 Admin Theme </title>
    <meta property="og:title" content="Password Reset">
    <meta name="author" content="Beni Arisandi">
    <meta property="og:locale" content="en_US">
    <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
    <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
    <link rel="canonical" href="https://uselooper.com">
    <meta property="og:url" content="https://uselooper.com">
    <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
    <script type="application/ld+json">
      {
        "name": "Looper - Bootstrap 4 Admin Theme",
        "description": "Responsive admin theme build on top of Bootstrap 4",
        "author":
        {
          "@type": "Person",
          "name": "Beni Arisandi"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Password Reset",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('assets/apple-touch-icon.png') ?>">
    <link rel="shortcut icon" href="<?= base_url('assets/favicon.ico') ?>">
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/fontawesome/css/all.css') ?>"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme.min.css') ?>" data-skin="default">
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/theme-dark.min.css') ?>" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url('assets/stylesheets/custom.css') ?>">
    <script>
      var skin = localStorage.getItem('skin') || 'default';
      var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
      var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth">
    <?php if(empty($hash)): ?>
      <?php if(isset($response)): ?>
        <?php if($response->status === "TRUE"): ?>
        <div class="alert alert-success alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">×</button> <strong>Pronto!</strong> <?= $response->message ?> </a>. 
        </div>
        <?php elseif($response->status === "FALSE"): ?>
          <?php print_r($response); ?>
        <div class="alert alert-warning has-icon" role="alert">
          <div class="alert-icon">
            <span class="fa fa-bullhorn"></span>
            <button type="button" class="close" data-dismiss="alert">×</button> <strong>Pronto!</strong> <?= isset($response->error->Email) ? $response->error->Email : "" ?> </a>
          </div>
        </div>
        <?php endif; ?>
      <?php endif; ?>
      <!-- form -->
      <?= form_open('user/forgot', ["class" => "auth-form auth-form-reflow", "id" => "formForgotUser"]); ?>
        <div class="text-center mb-4">
          <div class="mb-4">
            <img class="rounded" src="<?= base_url('assets/apple-touch-icon.png') ?>" alt="" height="72">
          </div>
          <h1 class="h3"> Reset Your Password </h1>
        </div>
        <p class="mb-4"> Tempora. iusto officia magnam fugiat sequi aliquam cum consectetur aperiam beatae, rerum obcaecati ea. </p><!-- .form-group -->
        <div class="form-group mb-4">
          <label class="d-block text-left" for="Email">E-mail</label> <input type="email" name='Email' id='Email' class='form-control' placeholder="Email" value="<?= set_value('Email') ?>" required>
          <p class="text-muted">
            <small>We'll send password reset link to your email.</small>
          </p>
        </div><!-- /.form-group -->
        <!-- actions -->
        <div class="d-block d-md-inline-block mb-2">
          <button class="btn btn-lg btn-block btn-primary" type="submit">Reset Password</button>
        </div>
        <div class="d-block d-md-inline-block">
          <a href="<?= base_url('user/login') ?>" class="btn btn-block btn-light">Return to login</a>
        </div>
      <?= form_close() ?><!-- /.auth-form -->
      <footer class="auth-footer mt-5"> © 2018 All Rights Reserved. Loper is Responsive Admin Theme build on top of latest Bootstrap 4. <a href="#">Privacy</a> and <a href="#">Terms</a>
      </footer>
    <?php else: ?>
      <?php if(isset($response)): ?>
        <?php if($response->status === "TRUE"): ?>
        <div class="alert alert-success alert-dismissible fade show">
          <button type="button" class="close" data-dismiss="alert">×</button> <strong>Pronto!</strong> <?= $response->message ?> </a>. 
        </div>
        <?php elseif($response->status === "FALSE" && isset($response->error->Email)): ?>
        <div class="alert alert-warning has-icon" role="alert">
          <div class="alert-icon">
            <span class="fa fa-bullhorn"></span>
            <button type="button" class="close" data-dismiss="alert">×</button> <strong>Pronto!</strong> <?= isset($response->error->Email) ? $response->error->Email : ""; ?> 
          </div>
        </div>
        <?php endif; ?>
      <?php endif; ?>
      <!-- form -->
      <?= form_open("user/forgot/$hash", ["class" => "auth-form auth-form-reflow", "id" => "formRecoverUser"]); ?>
        <div class="text-center mb-4">
          <div class="mb-4">
            <img class="rounded" src="<?= base_url('assets/apple-touch-icon.png') ?>" alt="" height="72">
          </div>
          <h1 class="h3"> Reset Your Password </h1>
        </div>
        <p class="mb-4"> Tempora iusto officia magnam fugiat sequi aliquam cum consectetur aperiam beatae, rerum obcaecati ea. </p>
        <?php if(isset($response) && $response->status === "TRUE"): ?>
        <div class="d-block">
          <a href="<?= base_url('user/login') ?>" class="btn btn-block btn-success">Return to login</a>
        </div>
        <?php else: ?>

        <!-- .form-group -->
        <div class="form-group mb-4">
          <label class="d-block text-left" for="Senha">Senha</label> 
          <input type="password" name='Senha' id='Senha' class='form-control' value="<?= set_value('Senha') ?>" placeholder="Senha" required>
          <div class="invalid-feedback" style="display:block"><?= isset($response->error->Senha) ? $response->error->Senha : ""; ?></div>
        </div>
        <div class="form-group mb-4">
          <label class="d-block text-left" for="SenhaConfirm">Confirmar Senha</label> 
          <input type="password" name='SenhaConfirm' id='SenhaConfirm' class='form-control' value="<?= set_value('SenhaConfirm') ?>" placeholder="Confirmar Senha" required>
          <div class="invalid-feedback" style="display:block"><?= isset($response->error->SenhaConf) ? $response->error->SenhaConf : ""; ?></div>
        </div><!-- /.form-group -->
        <!-- actions -->


        
        
        <div class="d-block d-md-inline-block mb-2">
          <button class="btn btn-lg btn-block btn-primary" type="submit">Reset Password</button>
        </div>
        <?php endif; ?>
      <?= form_close() ?><!-- /.auth-form -->
      <footer class="auth-footer mt-5"> © 2018 All Rights Reserved. Loper is Responsive Admin Theme build on top of latest Bootstrap 4. <a href="#">Privacy</a> and <a href="#">Terms</a>
      </footer>
    <?php endif; ?>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script> <!-- END BASE JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?= base_url('assets/javascript/theme.min.js') ?>"></script> 
    <script>
      $('#formForgotUser').find('input').each(function() {
        $(this).val('');
      });
      $('#formRecoverUser').find('input').each(function() {
        $(this).val('');
      });
    </script><!-- END THEME JS -->
  </body>
</html>