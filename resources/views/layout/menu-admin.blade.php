<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Account)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <div class="sidenav-menu-heading d-sm-none">Mon compte</div>
            <!-- Sidenav Link (Alerts)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="bell"></i></div>
                Notifications
                <span class="badge bg-warning-soft text-warning ms-auto">4 Nouveau!</span>
            </a>
            <!-- Sidenav Link (Messages)-->
            <!-- * * Note: * * Visible only on and above the sm breakpoint-->
            <a class="nav-link d-sm-none" href="#!">
                <div class="nav-link-icon"><i data-feather="mail"></i></div>
                Messages
                <span class="badge bg-success-soft text-success ms-auto">2 Nouveau!</span>
            </a>
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">ADMINISTRATEUR</div>

            <a class="nav-link" href="{{ route('home') }}"><div class="nav-link-icon"><i data-feather="airplay"></i></div> Accueil</a>


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#pagesCollapseAccount" aria-expanded="false" aria-controls="pagesCollapseAccount">
                <div class="nav-link-icon"><i data-feather="user"></i></div>
                Utilisateurs
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="pagesCollapseAccount" data-bs-parent="#accordionSidenavPagesMenu">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="{{ route('user-list') }}">Liste des utilisateurs</a>
                    <a class="nav-link" href="{{ route('user-add') }}">Ajouter un utilisateur</a>
                </nav>
            </div>

            
            <!-- gestion des tâches -->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                <div class="nav-link-icon"><i data-feather="layers"></i></div>
                Vos projets
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseUtilities" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('projects-list')}}">Liste des projets </a>
                    <a class="nav-link" href="{{route('projects-create')}}">Créer un projet</a>

                </nav>
            </div>
            <a class="nav-link" href="{{ route('tache-show') }}"><div class="nav-link-icon"><i data-feather="activity"></i></div> Vos tâches</a>
            

        </div>
        



        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Connecté :</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }} {{ Auth::user()->prenom }}</div>
            </div>
        </div>
</nav>
