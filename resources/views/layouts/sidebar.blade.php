<aside id="leftsidebar" class="sidebar">

  <div class="menu">

    <ul class="list">

      <li>

        <div class="user-info">

          <div class="image">

            <a href="{{ route('viewuser') }}"><img src="{{ url('/miniatura/' . Auth::user()->image) }}" /></a>

          </div>

          <div class="detail">

            <h4>{{ Auth::user()->name }}</h4>

            <small>{{ Auth::user()->name }}</small>

          </div>

          <a href="{{ route('appointments') }}" title="appointments"><i class="zmdi zmdi-calendar"></i></a>

          <a href="{{ route('doctors') }}" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>

          <a href="{{ route('patients') }}" title="Contact List"><i class="zmdi zmdi-account-o"></i></a>

          <a href="{{ route('users') }}" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>

          <a href="{{ url('/logout') }}" title="Sign out"><i class="zmdi zmdi-power"></i></a>

        </div>

      </li>

      <li class="header">MAIN</li>

      <li class="active"> <a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a> </li>

      <li> <a href="{{ route('saveappointment') }}"><i class="zmdi zmdi-calendar-check"></i><span>Book Appointment</span></a> </li>

      <li> <a href="{{ route('appointments') }}"><i class="zmdi zmdi-copy"></i><span>All appointments</span></a> </li>

      <li> <a href="{{ route('doctors') }}"><i class="zmdi zmdi-account-add"></i><span>All Doctors</span></a> </li>

      <li> <a href="{{ route('patients') }}"><i class="zmdi zmdi-account-o"></i><span>All Patients</span></a> </li>

      <li class="header">ADMIN</li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Reports</span> </a>

        <ul class="ml-menu">

          <li><a href="{{ url('report/patient') }}"> Appointments x patient </a></li>

          <li><a href="{{ url('report/doctor') }}"> Appointments x doctor </a></li>

          <li><a href="{{ url('report/room') }}"> Appointments x room </a></li>

        </ul>

      </li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Settings</span> </a>

        <ul class="ml-menu">

          <li><a href="{{ url('settings') }}"> Rooms </a></li>

          <li><a href="{{ url('settings') }}"> Especialties </a></li>

          <li><a href="{{ url('settings') }}"> Company </a></li>

        </ul>

      </li>

      <li> <a href="{{ route('users') }}"><i class="zmdi zmdi-lock"></i><span>Users</span></a> </li>

    </ul>

  </div>

</aside>