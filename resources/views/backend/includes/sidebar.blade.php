<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/home')}}">FPL Limited</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
             
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
                       
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--<li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>-->
                        <!--</li>-->
                        <!--<li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>-->
                        <!--</li>-->
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      
                        <li>
                            <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                     
                        <li>
                            <a href="{{URL::to('/settings')}}"><i class="fa fa-table fa-fw"></i> Settings</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/slider')}}"><i class="fa fa-edit fa-fw"></i> Slider Manage</a>
                        </li>
                      
                      
                        <!--<li>-->
                        <!--    <a href="#"><i class="fa fa-files-o fa-fw"></i> Menu Setting<span class="fa arrow"></span></a>-->
                        <!--    <ul class="nav nav-second-level">-->
                        <!--        <li>-->
                        <!--            <a href="{{URL::to('/menu')}}">Menu</a>-->
                        <!--        </li>-->
                        <!--        <li>-->
                        <!--            <a href="{{URL::to('/content')}}">Content Setting</a>-->
                        <!--        </li>-->
                        <!--    </ul>-->
                            <!-- /.nav-second-level -->
                        <!--</li>-->
                         <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{URL::to('/category')}}">Category</a>
                                </li>
                                
                            </ul>
                            
                        </li>
                          <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i>Product <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">                                
                                <li>
                                    <a href="{{URL::to('/product/create')}}">Product Create</a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/product')}}">Product List</a>
                                </li>
                            </ul>                           
                        </li>
                        <li>
                            <a href="{{url('/email-list')}}"><i class="fa fa-dashboard fa-fw"></i>Contact List</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/user')}}"><i class="fa fa-edit fa-fw"></i> Users Manage</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>