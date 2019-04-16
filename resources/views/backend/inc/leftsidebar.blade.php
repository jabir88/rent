<div class="left-sidebar bg-black-300 box-shadow ">
    <div class="sidebar-content">
        <div class="user-info closed">
            <img src="http://placehold.it/90/c2c2c2?text=User" alt="John Doe" class="img-circle profile-img">
            <h6 class="title">{{ Auth::user()->name }}</h6>
            <small class="info">PHP Developer</small>
        </div>
        <!-- /.user-info -->

        <div class="sidebar-nav">
            <ul class="side-nav color-gray">
                <li class="nav-header">
                    <span class="">Main Category</span>
                </li>
                <li >
                    <a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>

                </li>

                <li class="nav-header">
                    <span class="">Currency</span>
                </li>
                <li class="has-children">
                    <a href="#"><i class="fa fa-file-text"></i> <span>Currency</span> <i class="fa fa-angle-right arrow"></i></a>
                    <ul class="child-nav">
                        <li>
                          <a href="{{ route('currency.add') }}"><i class="fa fa-lock"></i>
                            <span>Add Currency</span>
                          </a>
                        </li>
                        <li>
                          <a href="{{ route('currency.manage') }}"><i class="fa fa-lock"></i>
                            <span>Manage Currency</span>
                          </a>
                        </li>

                    </ul>
                </li>
  </ul>
            <!-- /.side-nav -->

        </div>
        <!-- /.sidebar-nav -->
    </div>
    <!-- /.sidebar-content -->
</div>
