<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('public/storage/user')}}/{{ ucwords(Auth::user()->image) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ ucwords(Auth::user()->name) }}</p>
                {{--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>--}}
                <p>
                    @foreach(Auth::user()->role as $role)
                        {{ ucwords(str_replace('-',' ',$role -> name)) }}
                    @endforeach
                </p>

            </div>
        </div>
        <!-- search form -->
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
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">BLOG SECTION</li>
                <!-- post links -->
                @can('posts.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-file"></i>
                        <span>Posts</span>

                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>

                    <ul class="treeview-menu">
                        @can('posts.create',Auth::user())
                            <li><a href="{{route('post.create')}}"><i class="fa fa-file-text-o"></i> Add Post</a></li>
                        @endcan
                        <li><a href="{{route('post.index')}}"><i class="fa fa-files-o"></i> All Post</a></li>
                    </ul>
                </li> <!-- post links -->
                @endcan
                <!-- category links -->
                @can('categories.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-th"></i>
                        <span>Category</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('category.create')}}"><i class="fa fa-bars"></i> Add Category</a></li>
                        <li><a href="{{route('category.index')}}"><i class="fa fa-list-alt"></i> All Categories</a></li>
                    </ul>
                </li> <!-- category links -->
                @endcan
                <!-- tag links -->
                @can('tags.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-tags"></i>
                        <span>Tags</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('tags.create')}}"><i class="fa fa-tag fa-plus-square"></i> Add Tag</a></li>
                        <li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i> All Tags</a></li>
                    </ul>
                </li> <!-- tag links -->
                @endcan
                <!-- user links -->
                @can('users.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-user"></i>
                        <span>User</span>

                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        @can('users.create',Auth::user())
                            <li><a href="{{route('user.create')}}"><i class="fa fa-user-plus "></i> Add User</a></li>
                        @endcan
                        <li><a href="{{route('user.index')}}"><i class="fa fa-users"></i> All Users</a></li>
                    </ul>
                </li> <!-- user links -->
                @endcan
                <!-- role links -->
                @can('roles.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-user"></i>
                        <span>Role</span>

                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('role.create')}}"><i class="fa fa-user-plus "></i> Add Role</a></li>
                        <li><a href="{{route('role.index')}}"><i class="fa fa-users"></i> All Roles</a></li>
                    </ul>
                </li> <!-- role links -->
                @endcan
                <!-- permissions links -->
                @can('permissions.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-user"></i>
                        <span>Permission</span>

                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('permission.create')}}"><i class="fa fa-user-plus "></i> Add Permission</a></li>
                        <li><a href="{{route('permission.index')}}"><i class="fa fa-users"></i> All Permissions</a></li>
                    </ul>
                </li> <!-- permissions links -->
                @endcan
            <li class="header">REAL ESTATE</li>
                <!-- property links -->
                @can('posts.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-home"></i>
                        <span>Properties</span>

                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>

                    <ul class="treeview-menu">
                        @can('posts.create',Auth::user())
                            <li><a href="{{route('property.create')}}"><i class="fa fa-file-text-o"></i> Add Property</a></li>
                        @endcan
                        <li><a href="{{route('property.index')}}"><i class="fa fa-files-o"></i> All Properties</a></li>
                    </ul>
                </li> <!-- post links -->
            @endcan
                <!-- facilities links -->
                @can('tags.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-building-o"></i>
                        <span>Facilities</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('facility.create')}}"><i class="fa fa-tag fa-plus-square"></i> Add Facility</a></li>
                        <li><a href="{{route('facility.index')}}"><i class="fa fa-tags"></i> All Facilities</a></li>
                    </ul>
                </li> <!-- tag links -->
            @endcan
                <!-- features links -->
                @can('tags.view',Auth::user())
                <li class="treeview">
                    <a href=""><i class="fa fa-check-square-o"></i>
                        <span>Features</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('features.create')}}"><i class="fa fa-tag fa-plus-square"></i> Add Feature</a></li>
                        <li><a href="{{route('features.index')}}"><i class="fa fa-tags"></i> All Features</a></li>
                    </ul>
                </li> <!-- tag links -->
            @endcan
                <!-- ff category links -->
                @can('tags.view',Auth::user())
                <li class="treeview">
                    <a href="#"><i class="fa fa-check-square-o"></i>
                        <span>Feature/Facility Categories</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('ffCategory.create')}}"><i class="fa fa-tag fa-plus-square"></i> Add Category</a></li>
                        <li><a href="{{route('ffCategory.index')}}"><i class="fa fa-tags"></i> All Categories</a></li>
                    </ul>
                </li> <!-- tag links -->
            @endcan
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
