<div class="pt-3">
    <div class="page-title d-flex">
        <div class="align-self-center me-auto">
            <p class="{{ isset($title) && in_array($title, ['Send Money', 'Bills', 'Payment Requests', 'Exchange']) ? '' : 'color-white' }} opacity-80 header-date mb-1"></p>

            <h1 class="{{ isset($title) && in_array($title, ['Send Money', 'Bills', 'Payment Requests', 'Exchange'])? '' : 'color-white' }}">
                {{ isset($title) ? $title : 'Welcome ' . $accountData['fname'] }}
            </h1>
        </div>
        
        <div class="align-self-centerd-flex d-flex ms-auto">
            
            <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-notifications" class="icon bg-white color-theme rounded-m shadow-xl">
                <i class="bi bi-bell-fill color-black font-17"></i>
                <em class="badge bg-red-light color-white scale-box">3</em>
            </a>
            <a href="#" data-bs-toggle="dropdown" class="icon rounded-m shadow-xl bg-white">
                @if(isset($accountData['fname']) && isset($accountData['lname']))
                    <p class="color-brown-dark font-20">{{ strtoupper(substr($accountData['fname'], 0, 1)) }}{{ strtoupper(substr($accountData['lname'], 0, 1)) }}</p>
                @endif
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
                        <a href="{{route('accountProfile')}}" class="list-group-item">
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

