<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title>Helpdesk</title><!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/brands.css">
   <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/regular.css">
   <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/solid.css">
   <link rel="stylesheet" href="vendor/@fortawesome/fontawesome-free/css/fontawesome.css"><!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css"><!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="css/bootstrap.css" id="bscss"><!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="css/app.css" id="maincss">
</head>

<body id="body-recuperar-senha">
    <div class="wrapper d-flex">
        <div class="block-center wd-xl justify-content-center align-self-center">
         <!-- START card-->
         <div class="card card-flat shadow-sm">
            <div class="card-header text-center bg-dark">
                <h4 class="block-center rounded text-white shadow-sm">
                    <i class="fa fa-headphones-alt"></i>
                    Helpdesk
                </h4>
            </div>
            <div class="card-body">
               <p class="text-center py-2 text-bold">Redefinição de senha</p>
               <form action="login.php">
<!--                  <p class="text-center">Preencha seu e-mail para receber instruções sobre como redefinir sua senha.</p>-->
                  <div class="form-group">
<!--                      <label class="text-muted" for="resetInputEmail1">Endereço de e-mail</label>-->
                     <div class="input-group with-focus">
                         <input class="form-control border-right-0" id="senha" type="password" placeholder="Senha" autocomplete="off">
                        <div class="input-group-append"><span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span></div>
                     </div>
                  </div>
                   <div class="form-group">
<!--                      <label class="text-muted" for="resetInputEmail1">Endereço de e-mail</label>-->
                     <div class="input-group with-focus">
                         <input class="form-control border-right-0" id="senha" type="password" placeholder="Confirme sua senha" autocomplete="off">
                        <div class="input-group-append"><span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span></div>
                     </div>
                  </div>
                   <button class="btn btn-danger btn-block" type="submit">Salvar</button>
                   <div class="text-center mt-4">
                       <a class="text-muted" href="login.php">Ir para o login</a>
                   </div>
               </form>
            </div>
         </div><!-- END card-->
          <div class="p-3 text-center text-bold text-black">
              <span class="mr-1">&copy;</span>
              <span>2019</span> - <span>Helpdesk</span>
              <br>
          </div>
      </div>
   </div><!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="vendor/modernizr/modernizr.custom.js"></script><!-- STORAGE API-->
   <script src="vendor/js-storage/js.storage.js"></script><!-- i18next-->
   <script src="vendor/i18next/i18next.js"></script>
   <script src="vendor/i18next-xhr-backend/i18nextXHRBackend.js"></script><!-- JQUERY-->
   <script src="vendor/jquery/dist/jquery.js"></script><!-- BOOTSTRAP-->
   <script src="vendor/popper.js/dist/umd/popper.js"></script>
   <script src="vendor/bootstrap/dist/js/bootstrap.js"></script><!-- PARSLEY-->
   <script src="vendor/parsleyjs/dist/parsley.js"></script><!-- =============== APP SCRIPTS ===============-->
   <script src="js/app.js"></script>
</body>

</html>