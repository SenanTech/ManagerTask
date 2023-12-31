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
            <div class="sidenav-menu-heading">UTILISATEUR</div>


            <a class="nav-link" href="{{ route('home') }}">
                <div class="nav-link-icon"><i data-feather="activity"></i></div> Accueil
            </a>

            <!-- Nested Sidenav Accordion (Pages -> Account)-->
            

            <!-- gestion des tâches -->
            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                data-bs-target="#collapseUtilities" aria-expanded="false" aria-controls="collapseUtilities">
                <div class="nav-link-icon"><i data-feather="layers"></i></div>
                Tâches
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseUtilities" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav">
                    <a class="nav-link" href="{{route('user-tache-list')}}">Liste des tâches </a>
                </nav>
            </div>

        </div>




        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Connecté :</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }} {{ Auth::user()->prenom }}</div>
            </div>
        </div>
</nav>
