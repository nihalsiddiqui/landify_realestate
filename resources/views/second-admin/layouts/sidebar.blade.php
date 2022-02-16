<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{asset("dashboard")}}"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%"
                                                    y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                                    x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                  d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                  style="fill:currentColor"></path>
                                            <path id="Path1"
                                                  d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                  fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                     points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                     points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994"
                                                     points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                    <h2 class="brand-text">NPLS</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                        class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc"
                        data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                        data-feather="airplay"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a>
                <ul class="menu-content">
                    <li class="{{ Request::routeIs("home")?"active":"" }}"><a class="d-flex align-items-center"
                                                                              href="{{route('home')}}"><i
                                data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                    </li>
                </ul>
            </li>

            @canany(array('post-list', 'category-list', 'tag-list', 'user-list', 'role-list', 'post-create', 'category-create', 'tag-create', 'user-create', 'role-create'))

            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                            data-feather="align-left"></i><span class="menu-title text-truncate" data-i18n="Dashboards">BlogSection</span></a>

                    <ul class="menu-content">
                        @canany(array('post-create', 'post-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="file-text"></i><span class="menu-title text-truncate"
                                                                           data-i18n="eCommerce">Posts</span></a>
                                <ul class="menu-content">
                                    @can('post-create')
                                        <li class="{{ Request::routeIs("post.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('post.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Post</span></a>
                                        </li>
                                    @endcan
                                    @can('post-list')
                                        <li class="{{ Request::routeIs("post.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route("post.list")}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Posts</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('category-create', 'category-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="folder"></i><span class="menu-title text-truncate"
                                                                        data-i18n="eCommerce">Category</span></a>
                                <ul class="menu-content">
                                    @can('category-create')
                                        <li class="{{ Request::routeIs("category.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route("category.create")}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Category</span></a>
                                        </li>
                                    @endcan
                                    @can('category-list')
                                        <li class="{{ Request::routeIs("category.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route("category.list")}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Category</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                            @canany(array('subcategory-create', 'subcategory-list'))
                                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                            data-feather="folder"></i><span class="menu-title text-truncate"
                                                                            data-i18n="eCommerce">Sub Category</span></a>
                                    <ul class="menu-content">
                                        @can('subcategory-create')
                                            <li class="{{ Request::routeIs("subcategory.create")?"active":"" }}"><a
                                                    class="d-flex align-items-center" href="{{route("subcategory.create")}}"><i
                                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                        data-i18n="Shop">Add Sub Category</span></a>
                                            </li>
                                        @endcan
                                        @can('subcategory-list')
                                            <li class="{{ Request::routeIs("subcategory.list")?"active":"" }}"><a
                                                    class="d-flex align-items-center" href="{{route("subcategory.list")}}"><i
                                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                        data-i18n="Details">All Sub  Category</span></a>
                                            </li>
                                        @endcan
                                    </ul>
                                </li>
                            @endcanany

                        @canany(array('tag-create', 'tag-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center"><i data-feather="tag"></i><span
                                        class="menu-title text-truncate" data-i18n="eCommerce">Tag</span></a>
                                <ul class="menu-content">
                                    @can('tag-create')
                                        <li class="{{ Request::routeIs("tags.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('tags.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Tag</span></a>
                                        </li>
                                    @endcan
                                    @can('tag-list')
                                        <li class="{{ Request::routeIs("tags.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('tags.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Tags</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany('user-create', 'user-list')
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="users"></i><span class="menu-title text-truncate"
                                                                       data-i18n="eCommerce">User</span></a>
                                <ul class="menu-content">
                                    @can('user-create')
                                        <li class="{{ Request::routeIs("user.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('user.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add User</span></a>
                                        </li>
                                    @endcan
                                    @can('user-list')
                                        <li class="{{ Request::routeIs("user.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('user.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Users</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('role-create', 'role-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="user-check"></i><span class="menu-title text-truncate"
                                                                            data-i18n="eCommerce">Role</span></a>
                                <ul class="menu-content">
                                    @can('role-create')
                                        <li class="{{ Request::routeIs("admin.role.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('admin.role.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Role</span></a>
                                        </li>
                                    @endcan
                                    @can('role-list')
                                        <li class="{{ Request::routeIs("admin.role.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('admin.role.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Role</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                    </ul>
                </li>
            @endcanany

            @canany(array('country-list', 'state-list', 'city-list', 'town-list', 'country-create', 'state-create', 'city-create', 'town-create'))
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                            data-feather="map"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Location</span></a>
                    <ul class="menu-content">
                        @canany(array('country-create', 'country-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="corner-down-right"></i><span class="menu-title text-truncate"
                                                                                   data-i18n="eCommerce">Country</span></a>
                                <ul class="menu-content">
                                    @can('country-create')
                                        <li class="{{ Request::routeIs("country.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('country.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Country</span></a>
                                        </li>
                                    @endcan
                                    @can('country-list')
                                        <li class="{{ Request::routeIs("country.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('country.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Countries</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('state-create', 'state-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="corner-down-right"></i><span class="menu-title text-truncate"
                                                                                   data-i18n="eCommerce">State</span></a>
                                <ul class="menu-content">
                                    @can('state-create')
                                        <li class="{{ Request::routeIs("state.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('state.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add State</span></a>
                                        </li>
                                    @endcan
                                    @can('state-list')
                                        <li class="{{ Request::routeIs("state.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('state.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All States</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('city-create', 'city-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="corner-down-right"></i><span class="menu-title text-truncate"
                                                                                   data-i18n="eCommerce">City</span></a>
                                <ul class="menu-content">
                                    @can('city-create')
                                        <li class="{{ Request::routeIs("city.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('city.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add City</span></a>
                                        </li>
                                    @endcan
                                    @can('city-list')
                                        <li class="{{ Request::routeIs("city.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('city.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Cities</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('town-create', 'town-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="corner-down-right"></i><span class="menu-title text-truncate"
                                                                                   data-i18n="eCommerce">Town</span></a>
                                <ul class="menu-content">
                                    @can('town-create')
                                        <li class="{{ Request::routeIs("town.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('town.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Town</span></a>
                                        </li>
                                    @endcan
                                    @can('town-list')
                                        <li class="{{ Request::routeIs("town.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('town.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Towns</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                    </ul>
                </li>
            @endcanany
            @canany(array('company-role-list', 'company-list', 'project-list', 'project-type-list', 'property-list', 'company-role-create','company-create', 'project-create', 'project-type-create', 'property-create'))
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                            data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Companies & Projects</span></a>
                    <ul class="menu-content">
                        @canany(array('company-role-create', 'company-role-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="shield"></i><span class="menu-title text-truncate"
                                                                        data-i18n="eCommerce">Company Role</span></a>
                                <ul class="menu-content">
                                    @can('company-role-create')
                                        <li class="{{ Request::routeIs("companyRole.create")?"active":"" }}"><a
                                                class="d-flex align-items-center"
                                                href="{{route('companyRole.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Role</span></a>
                                        </li>
                                    @endcan
                                    @can('company-role-list')
                                        <li class="{{ Request::routeIs("company.role.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('company.role.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Role</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('company-create', 'company-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="home"></i><span class="menu-title text-truncate"
                                                                      data-i18n="eCommerce">Company</span></a>
                                <ul class="menu-content">
                                    @can('company-create')
                                        <li class="{{ Request::routeIs("company.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('company.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Company</span></a>
                                        </li>
                                    @endcan
                                    @can('company-list')
                                        <li class="{{ Request::routeIs("company.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('company.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Company</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('project-create', 'project-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="flag"></i><span class="menu-title text-truncate"
                                                                      data-i18n="eCommerce">Project</span></a>
                                <ul class="menu-content">
                                    @can('project-create')
                                        <li class="{{ Request::routeIs("project.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('project.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Project</span></a>
                                        </li>
                                    @endcan
                                    @can('project-list')
                                        <li class="{{ Request::routeIs("project.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('project.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Projects</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('project-type-create', 'project-type-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="hash"></i><span class="menu-title text-truncate"
                                                                      data-i18n="eCommerce">Project Type</span></a>
                                <ul class="menu-content">
                                    @can('project-type-create')
                                        <li class="{{ Request::routeIs("projectType.create")?"active":"" }}"><a
                                                class="d-flex align-items-center"
                                                href="{{route('projectType.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Project Type</span></a>
                                        </li>
                                    @endcan
                                    @can('project-type-list')
                                        <li class="{{ Request::routeIs("projectType.list")?"active":"" }}"><a
                                                class="d-flex align-items-center"
                                                href="{{route('projectType.list')}}"><i data-feather="circle"></i><span
                                                    class="menu-item text-truncate" data-i18n="Details">All Project Types</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('property-create', 'property-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="map-pin"></i><span class="menu-title text-truncate"
                                                                         data-i18n="eCommerce">Property</span></a>
                                <ul class="menu-content">
                                    @can('property-create')
                                        <li class="{{ Request::routeIs("property.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('property.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Property</span></a>
                                        </li>
                                    @endcan
                                    @can('property-list')
                                        <li class="{{ Request::routeIs("property.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('property.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Properties</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                    </ul>
                </li>
            @endcanany
            @canany(array('listing-create', 'listing-list', 'facility-create', 'facility-list', 'feature-create', 'feature-list'))
                <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                            data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Real Estate</span></a>
                    <ul class="menu-content">
                        @canany(array('listing-create', 'listing-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i
                                        data-feather="menu"></i><span class="menu-title text-truncate"
                                                                      data-i18n="eCommerce">Listings</span></a>
                                <ul class="menu-content">
                                    @can('listing-create')
                                        <li class="{{ Request::routeIs("listing.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('listing.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Listing</span></a>
                                        </li>
                                    @endcan
                                    @can('listing-list')
                                        <li class="{{ Request::routeIs("listing.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('listing.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Listings</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcan
                        @canany(array('facility-create', 'facility-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="plus-square"></i><span class="menu-title text-truncate"
                                                                             data-i18n="eCommerce">Facilities</span></a>
                                <ul class="menu-content">
                                    @can('facility-create')
                                        <li class="{{ Request::routeIs("facility.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('facility.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Facility</span></a>
                                        </li>
                                    @endcan
                                    @can('facility-list')
                                        <li class="{{ Request::routeIs("facility.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('facility.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Facilities</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('feature-create', 'feature-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="plus-square"></i><span class="menu-title text-truncate"
                                                                             data-i18n="eCommerce">Features</span></a>
                                <ul class="menu-content">
                                    @can('feature-create')
                                        <li class="{{ Request::routeIs("features.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('features.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Feature</span></a>
                                        </li>
                                    @endcan
                                    @can('feature-list')
                                        <li class="{{ Request::routeIs("features.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('features.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Features</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                        @canany(array('appliance-create', 'appliance-list'))
                            <li class=" nav-item"><a class="d-flex align-items-center" href="javascript:void(0);"><i
                                        data-feather="plus-square"></i><span class="menu-title text-truncate"
                                                                             data-i18n="eCommerce">Appliances</span></a>
                                <ul class="menu-content">
                                    @can('appliance-create')
                                        <li class="{{ Request::routeIs("appliance.create")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('appliance.create')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Shop">Add Appliance</span></a>
                                        </li>
                                    @endcan
                                    @can('appliance-list')
                                        <li class="{{ Request::routeIs("appliance.list")?"active":"" }}"><a
                                                class="d-flex align-items-center" href="{{route('appliance.list')}}"><i
                                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                                                                    data-i18n="Details">All Appliance</span></a>
                                        </li>
                                    @endcan
                                </ul>
                            </li>
                        @endcanany
                    </ul>
                </li>
            @endcanany
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
