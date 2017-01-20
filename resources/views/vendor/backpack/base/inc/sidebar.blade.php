@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li class="treeview"><a href="{{ url(config('backpack.base.route_prefix', 'intra').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-users"></i><span>Gestion Users</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                    <li><a href="{{ url('intra/coordonate') }}"><i class="fa fa-circle-o"></i> <span>Coordonates</span></a></li>
                    <li><a href="{{ url('intra/group') }}"><i class="fa fa-circle-o"></i> <span>Groups</span></a></li>
                    <li><a href="{{ url('intra/role') }}"><i class="fa fa-circle-o"></i> <span>Roles</span></a></li>
                    <li><a href="{{ url('intra/user') }}"><i class="fa fa-circle-o"></i> <span>Users</span></a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-question"></i><span>Gestion QCM</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                    <li><a href="{{ url('intra/examen') }}"><i class="fa fa-circle-o"></i> <span>Examens</span></a></li>
                    <li><a href="{{ url('intra/category') }}"><i class="fa fa-circle-o"></i> <span>Categories</span></a></li>
                    <li><a href="{{ url('intra/typequestion') }}"><i class="fa fa-circle-o"></i> <span>Type de question</span></a></li>
                    <li><a href="{{ url('intra/question') }}"><i class="fa fa-circle-o"></i> <span>Question</span></a></li>
                    <li><a href="{{ url('intra/choice') }}"><i class="fa fa-circle-o"></i> <span>Choices</span></a></li>
                    <li><a href="{{ url('intra/survey') }}"><i class="fa fa-circle-o"></i> <span>Survey</span></a></li>

            </ul>
          </li>
          <li class="treeview">
            <a href="#"><i class="fa fa-flag-checkered"></i><span>Gestion Résultat QCM</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
                    <li><a href=""><i class="fa fa-circle-o"></i> <span>Test</span></a></li>

            </ul>
          </li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'intra') . '/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
          
          <li><a href="{{ url(config('backpack.base.route_prefix', 'inrta').'/log') }}"><i class="fa fa-terminal"></i><span> Manage Logs</span></a></li>
          


          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li>
            <a href="{{ url(config('backpack.base.route_prefix', 'intra').'/logout') }}">
              <i class="fa fa-sign-out"></i> 
              <span>{{ trans('backpack::base.logout') }}
              </span>
            </a>
          </li>   
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
