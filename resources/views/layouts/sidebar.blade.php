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

            <small>{{ Auth::user()->role }}</small>

          </div>

          <a href="{{ route('appointments') }}" title="appointments"><i class="zmdi zmdi-calendar"></i></a>

          <a href="{{ route('doctors') }}" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>

          <a href="{{ route('patients') }}" title="Contact List"><i class="zmdi zmdi-account-o"></i></a>

          <a href="{{ route('users') }}" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a>

          <a href="{{ url('/logout') }}" title="Sign out"><i class="zmdi zmdi-power"></i></a>

        </div>

      </li>

      <li class="header">MAIN</li>

      <li class="active open"><a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>

      <li> <a href="{{ route('saveappointment') }}"><i class="zmdi zmdi-calendar-check"></i><span>Book Appointment</span></a> </li>

      <li class="header">ADMIN</li>

      <li> <a href="{{ route('appointments') }}"><i class="zmdi zmdi-copy"></i><span>All appointments</span></a> </li>

      <li> <a href="{{ route('doctors') }}"><i class="zmdi zmdi-accounts-list"></i><span>All Doctors</span></a> </li>

      <li> <a href="{{ route('patients') }}"><i class="zmdi zmdi-face"></i><span>All Patients</span></a> </li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Reports</span> </a>

        <ul class="ml-menu">

          <li><a href="{{ route('reportpatient') }}"> Appointments x patient </a></li>

          <li><a href="{{ route('reportdoctor') }}"> Appointments x doctor </a></li>

          <li><a href="{{ route('reportroom') }}"> Appointments x room </a></li>

        </ul>

      </li>

      <li class="header">SETTINGS</li>

      <li> <a href="{{ route('rooms') }}"><i class="zmdi zmdi-labels"></i><span>Rooms</span></a> </li>

      <li> <a href="{{ route('specialtys') }}"><i class="zmdi zmdi-puzzle-piece"></i><span>Specialties</span></a> </li>

      <li> <a href="{{ route('companys') }}"><i class="zmdi zmdi-lock"></i><span>Companies</span></a> </li>

      <li> <a href="{{ route('users') }}"><i class="zmdi zmdi-accounts"></i><span>Users</span></a> </li>

    </ul>

  </div>

</aside>