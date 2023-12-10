<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="" class="logo logo-dark">
            <span class="logo-sm">MiscArchive
                {{-- <img src="{{asset('admin/assets/images/misc.png')}}" alt="" height="22"> --}}
            </span>
            <span class="logo-lg">MiscArchive
                {{-- <img src="{{asset('admin/assets/images/misc.png')}}" alt="" height="22"> --}}
            </span>
        </a>
        <a href="" class="logo logo-light">
            <span class="logo-sm">MiscArchive
                {{-- <img src="{{asset('admin/assets/images/misc.png')}}" alt="" height="22"> --}}
            </span>
            <span class="logo-lg">MiscArchive
                {{-- <img src="{{asset('admin/assets/images/misc.png')}}" alt="" height="22"> --}}
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                @if (auth()->user()->role=="admin")
                    
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ph-gauge"></i> <span data-key="t-dashboards">Approvals</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                          
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-crm"> Post approval</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" data-key="t-ecommerce"> Employer Approval </a>
                            </li>
                           
                           
                        </ul>
                    </div>
                </li> --}}

                <li class="nav-item">
                    <a href="{{route('enquirydetails')}}" class="nav-link menu-link"> <i
                            class="ph-folder-open"></i> <span data-key="t-file-manager">Enquiry  Details</span>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="" class="nav-link menu-link"> <i
                            class="ph-folder-open"></i> <span data-key="t-file-manager">Employee Details</span>
                    </a>
                </li> --}}
@elseif (auth()->user()->role=="employee")


<li class="nav-item">
    <a href="" class="nav-link menu-link"> <i
            class="ph-folder-open"></i> <span data-key="t-file-manager">Post Jobs</span>
    </a>
</li>

<li class="nav-item">
    <a href="" class="nav-link menu-link"> <i
            class="ph-folder-open"></i> <span data-key="t-file-manager">Canidates</span>
    </a>
</li>
@elseif (auth()->user()->role=="wisdom")
<li class="nav-item">
    <a href="{{route('tataorders')}}" class="nav-link menu-link"> <i
            class="ph-folder-open"></i> <span data-key="t-file-manager">Order  Details</span>
    </a>
</li>

                @endif
                
               
                            
                            
                        </ul>
                    </div>
                </li>

                

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>