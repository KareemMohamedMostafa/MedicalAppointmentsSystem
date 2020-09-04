<aside id="leftsidebar" class="sidebar">

  <div class="menu">

    <ul class="list">

      <li>

        <div class="user-info">

          <div class="image">

            <a href="<?php echo e(route('viewuser')); ?>"><img src="<?php echo e(url('/miniatura/' . Auth::user()->image)); ?>" /></a>

          </div>

          <div class="detail">

            <h4><?php echo e(Auth::user()->name); ?></h4>

            <small><?php echo e(Auth::user()->name); ?></small>

          </div>

          <a href="<?php echo e(route('appointments')); ?>" title="appointments"><i class="zmdi zmdi-calendar"></i></a>

          <a href="<?php echo e(route('doctors')); ?>" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>

          <a href="<?php echo e(route('patients')); ?>" title="Contact List"><i class="zmdi zmdi-account-o"></i></a>

          <a href="<?php echo e(route('users')); ?>" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>

          <a href="<?php echo e(url('/logout')); ?>" title="Sign out"><i class="zmdi zmdi-power"></i></a>

        </div>

      </li>

      <li class="header">MAIN</li>

      <li class="active open"> <a href="<?php echo e(url('/')); ?>"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a> </li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>

        <ul class="ml-menu">

          <li><a href="<?php echo e(route('appointments')); ?>">Doctor Schedule</a></li>

          <li><a href="<?php echo e(route('saveappointment')); ?>">Book Appointment</a></li>

        </ul>

      </li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>

        <ul class="ml-menu">

          <li><a href="<?php echo e(route('savedoctor')); ?>">Add Doctor</a></li>

          <li><a href="<?php echo e(route('doctors')); ?>">All Doctors</a></li>

          <li><a href="<?php echo e(route('viewuser')); ?>">Doctor Profile</a></li>

        </ul>

      </li>

      <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>

        <ul class="ml-menu">

          <li><a href="<?php echo e(route('patients')); ?>">All Patients</a></li>

          <li><a href="<?php echo e(route('newpatient')); ?>">Add Patient</a></li>

          <li><a href="<?php echo e(route('viewpatient')); ?>">Patient Profile</a></li>

        </ul>

      </li>

      <li class="header">ADMIN</li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Reports</span> </a>

        <ul class="ml-menu">

          <li><a href="<?php echo e(url('report/patient')); ?>"> Appointments x patient </a></li>

          <li><a href="<?php echo e(url('report/doctor')); ?>"> Appointments x doctor </a></li>

          <li><a href="<?php echo e(url('report/room')); ?>"> Appointments x room </a></li>

        </ul>

      </li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Settings</span> </a>

        <ul class="ml-menu">

          <li><a href="<?php echo e(url('settings')); ?>"> Rooms </a></li>

          <li><a href="<?php echo e(url('settings')); ?>"> Especialties </a></li>

          <li><a href="<?php echo e(url('settings')); ?>"> Company </a></li>

        </ul>

      </li>

      <li> <a href="<?php echo e(route('users')); ?>"><i class="zmdi zmdi-lock"></i><span>Users</span></a> </li>

    </ul>

  </div>

</aside>