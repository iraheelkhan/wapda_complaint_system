<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="https://www.thewrap.com/wp-content/uploads/2015/11/Donald-Trump.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->name }}</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('Dashboard')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          @can('adminonly')
          <li class="nav-item">
            <a class="nav-link" href="{{route('CityList')}}" >
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Cities</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('DivisionList')}}">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Divisions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('SubDivisionList')}}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Sub Divisions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('ManageUsers')}}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Manage Users</span>
            </a>
          </li>
          @endcan
          <li class="nav-item">
            <a class="nav-link"  data-toggle="collapse" href="#complaintdropdown" aria-expanded="false" aria-controls="complaintdropdown">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Complaints</span>
            </a>
          <div class="collapse" id="complaintdropdown">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{route('ComplaintList')}}"> Complaints</a>
                </li>
                @can('adminonly')
                <li class="nav-item">
                  <a class="nav-link" href="{{route('ComplaintListOpen')}}"> Open Complaints </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('ComplaintListOpenDivision')}}"> Open Division Complaints </a>
                </li>
                @endcan
            </ul>
          </div>
          </li>
     {{--      <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a>
                </li>
              </ul>
            </div>
          </li> --}}
        </ul>
      </nav>