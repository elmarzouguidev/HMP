<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="user.png" alt="user" /> </div>
            <!-- User profile text-->
            <div class="profile-text">
                <a href="#" class="dropdown-toggle link u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                    {{Auth::user()->prenom}} <span class="caret"></span>
                </a>
                <div class="dropdown-menu animated flipInY">

                    <a href="{{route('admin.profile')}}" class="dropdown-item"><i class="ti-settings"></i> My Settings</a>
                    <div class="dropdown-divider"></div> <a href="{{route('admin.logout')}}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">PERSONAL</li>
                <li>
                    <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-image"></i><span class="hide-menu">Gestion de Galerie </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.galleries')}}">Modification l’ordre des images</a></li>
                   
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Gestion de Société</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.societies')}}">Ajouter une société </a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Gestion de projects</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.projects')}}">Ajouter un project </a></li>

                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Gestion des articles</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.articles')}}">Ajouter un article </a></li>

                    </ul>
                </li>
                <li>
                    <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-address-card"></i><span class="hide-menu">Gestion des Prospects</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="">liste des prospects </a></li>
               
                    </ul>
                </li>
 
                <li>
                        <a class="has-arrow " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Gestion des users</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="">liste des utulisateurs </a></li>
                            <li><a href="">Ajouter un utulisateur </a></li>
                            <li><a href="">Gestion des permission </a></li>
                        </ul>
                    </li>

                    <li class="nav-devider"></li>
                   
                <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>


            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->