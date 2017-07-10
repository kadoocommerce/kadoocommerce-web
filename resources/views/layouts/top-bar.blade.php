<!-- Top Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <!-- Logo -->
        <div class="top-left-part">
            <a class="logo" href="/">
                <b><img src="/images/logo-white.png" class="img-responsive" alt="home" style="margin-top: 4px; margin-left: 5px"/></b>
                <span class="hidden-xs"><img src="/images/logo-text.png" alt="home" style="height: 30px; margin-left: 15px; margin-top: -25px" /></span>
            </a>
        </div>
        <!-- /Logo -->
        <!-- This is for mobile view search and menu icon -->
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="fa fa-bars ti-menu"></i></a></li>
            <li>
                <form role="search" class="app-search hidden-xs">
                    <input type="text" placeholder="{{ trans('app.search') }}..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>
        </ul>
        <!-- This is the message dropdown -->
        <ul class="nav navbar-top-links navbar-right pull-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    <span class="fa fa-user"></span>
                    <b class="hidden-xs">{{ \Illuminate\Support\Facades\Auth::guard('admin')->user()->name }}</b>
                </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="/profile"><i class="fa fa-user"></i> {{ trans('app.profile') }}</a></li>
                    <li><a href="/billing"><i class="fa fa-usd"></i> {{ trans('app.billing') }}</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="/logout"><i class="fa fa-power-off"></i> {{ trans('app.logout') }}</a></li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->