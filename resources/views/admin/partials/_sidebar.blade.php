<div id="wrapper">
  <nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav metismenu" id="side-menu">
        <li class="nav-header">
          <div class="dropdown profile-element"> <span>
            <img alt="image" class="img-circle" src="/images/default_profile.jpg" />
             </span>
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
            <ul class="dropdown-menu animated fadeInRight m-t-xs">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Contacts</a></li>
              <li><a href="#">Mailbox</a></li>
              <li class="divider"></li>
              <li><a href="{{ url('logout') }}">Cerrar sesión</a></li>
            </ul>
          </div>
          <div class="logo-element">
              IN+
          </div>
        </li>
        <li class="active">
            <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></span></a>
        </li>
        <li class="">
            <a href="{{ url('admin/products') }}"><i class="fa fa-list" aria-hidden="true"></i> <span class="nav-label">Productos</span></a>
        </li>
      </ul>

    </div>
  </nav>
</div>
