<div class="pt-3">
    <div class="page-title d-flex">
        <div class="align-self-center me-auto">
            <p class="color-white opacity-80 header-date mb-1"></p>
            <h1 class="color-white">{{ isset($title) ? $title : 'Welcome ' . $accountData['fname'] }}</h1>
        </div>
        
        <div class="align-self-centerd-flex d-flex ms-auto">
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-highlights" class="icon bg-white color-theme rounded-m shadow-xl">
                <i class="bi bi-palette-fill color-black font-16"></i>
            </a>
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-notifications" class="icon bg-white color-theme rounded-m shadow-xl">
                <i class="bi bi-bell-fill color-black font-17"></i>
                <em class="badge bg-red-light color-white scale-box">3</em>
            </a>
            <a href="#" data-bs-toggle="dropdown" class="icon rounded-m shadow-xl bg-white">
                <img src="https://www.iconpacks.net/icons/2/free-user-icon-3296-thumb.png" width="45" class="rounded-m" alt="img">
            </a>
            <!-- Page Title Dropdown Menu-->
            <div class="dropdown-menu">
                <div class="card card-style shadow-m mt-1 me-1">
                    <div class="list-group list-custom list-group-s list-group-flush rounded-xs px-3 py-1">
                        <a href="/payments" class="list-group-item">
                            <i class="has-bg gradient-green shadow-bg shadow-bg-xs color-white rounded-xs bi bi-credit-card"></i>
                            <strong class="font-13">Wallet</strong>
                        </a>
                        <a href="{{route('activity')}}" class="list-group-item">
                            <i class="has-bg gradient-blue shadow-bg shadow-bg-xs color-white rounded-xs bi bi-graph-up"></i>
                            <strong class="font-13">Activity</strong>
                        </a>
                        <a href="#" class="list-group-item">
                            <i class="has-bg gradient-yellow shadow-bg shadow-bg-xs color-white rounded-xs bi bi-person-circle"></i>
                            <strong class="font-13">Account</strong>
                        </a>
                        
                            <a class="list-group-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                 <i class="has-bg gradient-red shadow-bg shadow-bg-xs color-white rounded-xs bi bi-power"></i>
                                 <strong class="font-13">Log Out</strong>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>