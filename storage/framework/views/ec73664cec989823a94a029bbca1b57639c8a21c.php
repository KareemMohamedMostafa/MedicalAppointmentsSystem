<!doctype html>

<html class="no-js " lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <meta name="description" content="It is really appropriate system for Doctors, Dentist, Hospitals, Health clinics, Surgeons and Medical organization">

    <title>Medical Appointments System</title>

    <link rel="icon" href="favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/bootstrap/css/bootstrap.min.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/morrisjs/morris.min.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(URL::asset('css/main.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(URL::asset('css/color_skins.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')); ?>" />

    <link rel="stylesheet" href="<?php echo e(URL::asset('plugins/bootstrap-select/css/bootstrap-select.css')); ?>" />

</head>

<body class="theme-blue" id="app-layout">

    <div class="overlay"></div>

    <?php echo $__env->make('layouts.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="<?php echo e(URL::asset('bundles/libscripts.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('bundles/vendorscripts.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('bundles/morrisscripts.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('bundles/jvectormap.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('bundles/knob.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('bundles/sparkline.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('bundles/countTo.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('bundles/mainscripts.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('js/pages/index.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('bundles/datatablescripts.bundle.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/jquery-datatable/buttons/dataTables.buttons.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/jquery-datatable/buttons/buttons.colVis.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/jquery-datatable/buttons/buttons.flash.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/jquery-datatable/buttons/buttons.html5.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/jquery-datatable/buttons/buttons.print.min.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/momentjs/moment.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('js/pages/tables/jquery-datatable.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('js/pages/forms/basic-form-elements.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('plugins/bootstrap-notify/bootstrap-notify.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('js/pages/ui/notifications.js')); ?>"></script>

    <script src="<?php echo e(URL::asset('js/custom.js')); ?>"></script>
</body>

</html>