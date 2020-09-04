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

      <li class="active open"> <a href="{{ url('/') }}"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a> </li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-calendar-check"></i><span>Appointment</span> </a>

        <ul class="ml-menu">

          <li><a href="{{ route('appointments') }}">Doctor Schedule</a></li>

          <li><a href="{{ route('saveappointment') }}">Book Appointment</a></li>

        </ul>

      </li>

      <li>

        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>

        <ul class="ml-menu">

          <li><a href="{{ route('savedoctor') }}">Add Doctor</a></li>

          <li><a href="{{ route('doctors') }}">All Doctors</a></li>

          <li><a href="{{ route('viewuser') }}">Doctor Profile</a></li>

        </ul>

      </li>

      <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>

        <ul class="ml-menu">

          <li><a href="{{ route('patients') }}">All Patients</a></li>

          <li><a href="{{ route('newpatient') }}">Add Patient</a></li>

          <li><a href="{{ route('viewpatient') }}">Patient Profile</a></li>

        </ul>

      </li>

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