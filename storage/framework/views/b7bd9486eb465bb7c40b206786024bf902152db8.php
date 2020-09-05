<nav class="navbar">

    <div class="col-12">

        <div class="navbar-header text-center"> <a href="javascript:void(0);" class="bars"></a> <a class="navbar-brand" href="<?php echo e(url('/')); ?> "><img src="favicon.png" width="30" /><span class="m-l-10">System</span></a> </div>

        <ul class="nav navbar-nav navbar-left">

            <li> <a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a> </li>

            <li class="hidden-sm-down">

                <form role="search" action="<?php echo e(url('/buscar')); ?>">

                    <div class="input-group"> <input type="text" class="form-control" placeholder="Search appointment" name="search" /> <span class="input-group-addon"> <i class="zmdi zmdi-search"></i> </span> </div>

                </form>

            </li>

        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li><a href="<?php echo e(route('createVideo')); ?>">New Appointment</a></li>

            <li> <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a> </li>

            <li> <a href="<?php echo e(url('/logout')); ?>" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a> </li>

        </ul>

    </div>

</nav>