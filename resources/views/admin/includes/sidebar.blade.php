<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center
   justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"
    style="text-decoration: none; color:aliceblue">
    ControlPanel   </a>
    <a class="sidebar-brand brand-logo-mini" href="index.html" style="text-decoration: none; color:aliceblue">
       CP</a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle "
            src="{{ asset('backendTemp/assets/images/faces/face15.jpg') }}" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal">
               {{ Auth::user()->name }}  </h5>
            <span> {{ Auth::user()->email }}  </span>
          </div>
        </div>
        <a href="#" id="profile-dropdown" data-bs-toggle="dropdown">
            <i class="mdi mdi-dots-vertical"></i></a>
        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
         aria-labelledby="profile-dropdown">
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-settings text-primary"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-onepassword  text-info"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-dark rounded-circle">
                <i class="mdi mdi-calendar-today text-success"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
            </div>
          </a>
        </div>
      </div>
    </li>
    <hr style="color: #191c24">

    <li class="nav-item menu-items">
      <a class="nav-link" href="">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>




    <li class="nav-item menu-items">
      <a class="nav-link" href="{{ route('backend.products') }}">
        <span class="menu-icon">
          <i class="mdi mdi-menu"></i>
        </span>
        <span class="menu-title">Products</span>
      </a>
    </li>


    {{--  <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse"
         href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Basic UI Elements</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"></li>
            <li class="nav-item"></li>
          </ul>
        </div>
      </li>  --}}

  </ul>
</nav>
<!-- partial -->
