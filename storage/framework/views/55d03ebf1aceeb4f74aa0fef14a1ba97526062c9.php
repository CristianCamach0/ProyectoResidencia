<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Login</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                        <?php echo csrf_field(); ?>
                        <h3>SII ITTG</h4>
                        <h4>Seleccione su usuario</h3>
                        <div class="col-12">
                        <li><a href="/academia/index">Academia</a></li>
                        </div>
                        <div class="col-12">
                        <li><a href="/alumno/index">Alumno</a></li>
                        </div>
                        <div class="col-12">
                        <li><a href="/coordinacion/index">Coordinación</a></li>
                        </div>
                        <div class="col-12">
                        <li><a href="/revisor/index">Revisor</a></li>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\ProyectoResidencia\resources\views/login.blade.php ENDPATH**/ ?>