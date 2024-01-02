<!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
<div id="menu-sidebar" data-menu-active="nav-welcome" class="offcanvas offcanvas-start offcanvas-detached rounded-m">
    <div class="menu-size" style="width:230px;">
        <!-- Menu Title-->
        <div class="pt-3">
            <div class="page-title sidebar-title d-flex">
                <div class="align-self-center me-auto">
                    <p class="fs-4 color-brown-dark">
                        {{ isset($accountData['fname']) && isset($accountData['lname']) ? $accountData['fname'] . ' ' . $accountData['lname'] : '' }}
                    </p>
                </div>
                <div class="align-self-center ms-auto">
                    <a href="#"
                    data-bs-toggle="dropdown"
                    class="gradient-gray icon rounded-m shadow-bg shadow-bg-s">
                    @if(isset($accountData['fname']) && isset($accountData['lname']))
                    <p class="color-brown-dark font-20">{{ strtoupper(substr($accountData['fname'], 0, 1)) }}{{ strtoupper(substr($accountData['lname'], 0, 1)) }}</p>
                @endif
                
                    </a>
                    <!-- Menu Title Dropdown Menu-->
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
    
            <div class="divider divider-margins mb-3 opacity-50"></div>
    
            <!-- Main Menu List-->
            <div class="list-group list-custom list-menu-large">
    
                <a href="#" class="list-group-item" data-toggle-theme data-trigger-switch="switch-1">
                    {{-- <i class="bi bg-yellow-dark shadow-bg shadow-bg-xs bi-lightbulb-fill"></i> --}}
                    <div>Dark Mode</div>
                    <div class="form-switch ios-switch switch-green switch-s me-2">
                        <input type="checkbox" data-toggle-theme class="ios-input" id="switch-1">
                        <label class="custom-control-label" for="switch-1"></label>
                    </div>
                </a>
            </div>
    
            <div class="divider divider-margins mb-3 opacity-50"></div>
    
            <!-- Quick Actions Icons-->
            <div class="content pt-1">
                <div class="d-flex text-center">
                    <div class="me-auto">
                        <a href="{{route('paymentTransfer')}}" class="icon icon-s rounded-s shadow-bg shadow-bg-xs">
                            <i class='bx bx-up-arrow-alt color-brown-dark font-40'></i>
                        </a>
                        <h6 class="font-11 font-400 opacity-70 mb-n1 pt-2">Transfer</h6>
                    </div>
                    <div class="m-auto">
                        <a href="{{route('paymentRequest')}}" class="icon icon-s rounded-s shadow-bg shadow-bg-xs">
                            <i class='bx bx-down-arrow-alt color-brown-dark font-40' ></i>
                        </a>
                        <h6 class="font-11 font-400 opacity-70 mb-n1 pt-2">Request</h6>
                    </div>
                    <div class="ms-auto">
                        <a href="{{route('paymentExchange')}}" class="icon icon-s rounded-s shadow-bg shadow-bg-xs">
                            <i class='bx bx-transfer color-brown-dark font-40' ></i>
                        </a>
                        <h6 class="font-11 font-400 opacity-70 mb-n1 pt-2">Exchange</h6>
                    </div>
                </div>
            </div>
    
    
            <div class="divider divider-margins opacity-50"></div>
    
            <!-- Useful Links-->
            {{-- <h6 class="opacity-40 px-3 mt-n2 mb-0">Useful Links</h6> --}}
            <div class="list-group list-custom list-menu-small">
                <a href="tel:+1 234 567 8091" class="list-group-item default-link">
                    <i class="bi bi-arrow-up-circle-fill opacity-20 font-16"></i>
                    <div>Support</div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a href="{{route('accountProfile')}}" class="list-group-item">
                    <i class="bi bi-person-circle opacity-20 font-16"></i>
                    <div>Account</div>
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a class="list-group-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                 <i class='bx bx-power-off bx opacity-20 font-22'></i>
                                 <div>Log Out</div>
                                 <i class="bi bi-chevron-right"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
            </div>
    
            <div class="divider divider-margins opacity-50"></div>
            <!-- Menu Copyright -->
            <p class="px-3 font-9 opacity-30 color-theme mt-n3">Copyright <span class="copyright-year"></span></p>
        </div>
    </div>
</div>
