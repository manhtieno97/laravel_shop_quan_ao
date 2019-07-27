<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{url('')}}/avatar/{{ Auth()->user()->image }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
      <li class="active"><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> <span>Quản trị</span></a></li>

      <li class="treeview">
          <a href="#"><i class="fa fa-th"></i> <span>Quản lý danh mục</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('category_index')}}">Danh sách danh mục</a></li>
            <li><a href="{{route('get_category_add')}}">Thêm mới danh mục</a></li>
          </ul>
      </li>

      <li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Quản lý quản trị viên</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{route('user_list')}}">Danh sách quản trị viên</a></li>
            <li><a href="">Thêm mới quản trị viên</a></li>
          </ul>
      </li>


        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Product</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>