<?php $__env->startSection('content'); ?>

<form class="form" role="form" method="post" action="<?php echo e(url('/login')); ?>">

    <?php echo e(csrf_field()); ?>


    <div class="content">

        <div class="input-group input-lg">

            <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo e(old('email')); ?>" required>

            <span class="input-group-addon"> <i class="zmdi zmdi-account-circle"></i> </span>

        </div>

        <div class="input-group input-lg">

            <input type="password" name="password" placeholder="Password" class="form-control" />

            <span class="input-group-addon"> <i class="zmdi zmdi-lock"></i> </span>

        </div>

    </div>

    <div class="footer text-center">

        <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light"> <i class="fa fa-btn fa-sign-in"></i> Login </button>

        <a href="<?php echo e(url('/password/reset')); ?>" class="link">

            <span class="m-t-20">Forgot Password?</span>

        </a>

        |

        <a href="<?php echo e(url('/register')); ?>" class="link">

            <span class="m-t-20">New patient!</span>

        </a>

    </div>

</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>