
<div class="aside aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="index.html" class="brand-logo">
            <img alt="Logo" class="w-65px" src="{{asset('assets/media/logos/logo-letter-13.png')}}" />
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="{{asset('index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-architecture-and-city"></i>
                        <span class="menu-text">Home</span>
                    </a>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-telegram-logo"></i>
                        <span class="menu-text">Roles</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Roles</span>
                                </span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{asset('roles')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Show</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{asset('roles/create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-line">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Add</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-laptop"></i>
                        <span class="menu-text">Pages</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Pages</span>
                                </span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{asset('staticPages')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Show</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-browser-2"></i>
                        <span class="menu-text">Categories</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Categories</span>
                                </span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{asset('categories')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Show</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{asset('categories/create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Add</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="javascript:;" class="menu-link menu-toggle">
                        <i class="menu-icon flaticon2-browser-2"></i>
                        <span class="menu-text">Articles</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="menu-submenu">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <li class="menu-item menu-item-parent" aria-haspopup="true">
                                <span class="menu-link">
                                    <span class="menu-text">Articles</span>
                                </span>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{asset('articles')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Show</span>
                                </a>
                            </li>
                            <li class="menu-item" aria-haspopup="true">
                                <a href="{{asset('articles/create')}}" class="menu-link">
                                    <i class="menu-bullet menu-bullet-dot">
                                        <span></span>
                                    </i>
                                    <span class="menu-text">Add</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{asset('slider')}}" class="menu-link">
                        <i class="menu-icon flaticon2-console"></i>
                        <span class="menu-text">Sliders</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{asset('setting/1/edit')}}" class="menu-link">
                        <i class="menu-icon flaticon2-console"></i>
                        <span class="menu-text">setting</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{asset('users')}}" class="menu-link">
                        <i class="menu-icon flaticon2-graph-1"></i>
                        <span class="menu-text">User</span>
                    </a>
                </li>
            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
