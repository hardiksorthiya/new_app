 <!-- Vertical Navbar -->
 <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
    <div class="container-fluid">
        
        <!-- Brand -->
        <a class="navbar-brand py-lg-2  px-lg-6 me-0" href="/">
            {{-- <img src="/digital_card_v2/assets/images/My_Digital_Card_Logo.png" alt="My Digital Card"> --}}
            <h3 class="brand-name">My Digital Card</h3>
        </a>

    
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/dashboard">
                        <i class="fa-solid fa-house"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/user">
                        <i class="fa-solid fa-user"></i> User
                    </a>
                </li>
                <li class="nav-item">
                    
                        <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                   
                </li>
               
            </ul>
        </div>
    </div>
</nav>