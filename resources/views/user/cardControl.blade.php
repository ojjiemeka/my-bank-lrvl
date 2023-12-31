@extends('layouts.user')

@section('content')

<svg id="header-deco" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg"
class="transition duration-300 ease-in-out delay-150">
<path id="header-deco-1"
    d="M 0,600 C 0,600 0,120 0,120 C 92.36363636363635,133.79904306220095 184.7272727272727,147.59808612440193 287,148 C 389.2727272727273,148.40191387559807 501.4545454545455,135.40669856459328 592,129 C 682.5454545454545,122.5933014354067 751.4545454545455,122.77511961722489 848,115 C 944.5454545454545,107.22488038277511 1068.7272727272727,91.49282296650718 1172,91 C 1275.2727272727273,90.50717703349282 1357.6363636363635,105.25358851674642 1440,120 C 1440,120 1440,600 1440,600 Z">
</path>
<path id="header-deco-2"
    d="M 0,600 C 0,600 0,240 0,240 C 98.97607655502392,258.2105263157895 197.95215311004785,276.4210526315789 278,282 C 358.04784688995215,287.5789473684211 419.16746411483257,280.5263157894737 524,265 C 628.8325358851674,249.4736842105263 777.377990430622,225.47368421052633 888,211 C 998.622009569378,196.52631578947367 1071.3205741626793,191.57894736842107 1157,198 C 1242.6794258373207,204.42105263157893 1341.3397129186603,222.21052631578948 1440,240 C 1440,240 1440,600 1440,600 Z">
</path>
<path id="header-deco-3"
    d="M 0,600 C 0,600 0,360 0,360 C 65.43540669856458,339.55023923444975 130.87081339712915,319.1004784688995 245,321 C 359.12918660287085,322.8995215311005 521.9521531100479,347.1483253588517 616,352 C 710.0478468899521,356.8516746411483 735.3205741626795,342.3062200956938 822,333 C 908.6794258373205,323.6937799043062 1056.7655502392345,319.62679425837325 1170,325 C 1283.2344497607655,330.37320574162675 1361.6172248803828,345.1866028708134 1440,360 C 1440,360 1440,600 1440,600 Z">
</path>
<path id="header-deco-4"
    d="M 0,600 C 0,600 0,480 0,480 C 70.90909090909093,494.91866028708137 141.81818181818187,509.8373205741627 239,499 C 336.18181818181813,488.1626794258373 459.6363636363636,451.5693779904306 567,446 C 674.3636363636364,440.4306220095694 765.6363636363636,465.88516746411483 862,465 C 958.3636363636364,464.11483253588517 1059.8181818181818,436.8899521531101 1157,435 C 1254.1818181818182,433.1100478468899 1347.090909090909,456.555023923445 1440,480 C 1440,480 1440,600 1440,600 Z">
</path>
</svg>
      <!-- Page Content - Only Page Elements Here-->

        <!-- Page Title-->
        
        <!-- Card Stack - The Stack Height Below will be the card height-->
        <div class="card-stack" data-stack-height="180">
           
            <!-- Card Open on Click-->
            <div class="card-stack-click"></div>
            
            <!-- Card 1-->
            <div class="card card-style bg-5">
                <div class="card-top p-3">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a>
                </div>
                <div class="card-center">
                    <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                        <h1 class="font-13 my-n1">
                            <a class="color-theme" data-bs-toggle="collapse" href="#balance3" aria-controls="balance2">Click for Balance</a>
                        </h1>
                        <div class="collapse" id="balance3"><h2 class="color-theme font-26">${{ number_format($balance['main_balance'], 2) }}</h2></div>
                    </div>
                </div>
                <strong class="card-top no-click font-12 p-3 color-white font-monospace">TIAA Plantinum</strong>
                <strong class="card-bottom no-click p-3 text-start color-white font-monospace" id="balance3">4233 5622 8363 9376</strong>
                <strong class="card-bottom no-click p-3 text-end color-white font-monospace" id="balance3">04 / 2026</strong>
                <div class="card-overlay bg-black opacity-50"></div>
            </div>
            
            <!-- Card 2 -->
            <div class="card card-style bg-7">
                <div class="card-top p-3">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a>
                </div>
                <div class="card-center">
                    <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                        <h1 class="font-13 my-n1">
                            <a class="color-theme" data-bs-toggle="collapse" href="#balance1" aria-controls="balance1">Click for Balance</a>
                        </h1>
                        <div class="collapse" id="balance1"><h2 class="color-theme font-26">${{ number_format($balance['card_2'], 2) }}</h2></div>
                    </div>
                </div>
                <strong class="card-top no-click font-12 p-3 color-white font-monospace">American Express Gold Credit</strong>
                <strong class="card-bottom no-click p-3 text-start color-white font-monospace" id="balance1">6425 8939 4315 9733</strong>
                <strong class="card-bottom no-click p-3 text-end color-white font-monospace" id="balance1">01 / 2027</strong>
                <div class="card-overlay bg-black opacity-50"></div>
            </div>
            
            <!-- Card 3 -->
            <div class="card card-style bg-1">
                <div class="card-top p-3">
                    <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-card-more" class="icon icon-xxs bg-white color-black float-end"><i class="bi bi-three-dots font-18"></i></a>
                </div>
                <div class="card-center">
                    <div class="bg-theme px-3 py-2 rounded-end d-inline-block">
                        <h1 class="font-13 my-n1">
                            <a class="color-theme" data-bs-toggle="collapse" href="#balance2" aria-controls="balance2">Click for Balance</a>
                        </h1>
                        <div class="collapse" id="balance2"><h2 class="color-theme font-26">${{ number_format($balance['card_3'], 2) }}</h2></div>
                    </div>
                </div>
                <strong class="card-top no-click font-12 p-3 color-white font-monospace">Swedbank Plantinum Credit</strong>
                <strong class="card-bottom no-click p-3 text-start color-white font-monospace" id="balance2">8689 6383 8624 6789</strong>
                <strong class="card-bottom no-click p-3 text-end color-white font-monospace" id="balance2">08 / 2027</strong>
                <div class="card-overlay bg-black opacity-50"></div>
            </div>
        </div>
        
        <!-- Card Stack Info Message / Hides when deployed -->
        <h6 class="btn-stack-info color-theme opacity-80 text-center mt-n2 mb-3">Tap the Cards to Expand your Wallet</h6>
        <!-- Card Stack Button / shows when deployed -->
        <a href="#" class="disabled btn-stack-click btn mx-3 mb-4 btn-full gradient-highlight shadow-bg shadow-bg-xs">Close my Wallet</a>

        <!-- Tabs-->
        <div class="card card-style">
            <div class="content mb-0">
                
                <!-- Tab Wrapper-->
                <div class="tabs tabs-pill" id="tab-group-2">
                    <!-- Tab Controls -->
                    <div class="tab-controls rounded-m p-1">
                        <a class="font-13 rounded-m" data-bs-toggle="collapse" href="#tab-4" aria-expanded="true">Settings</a>
                        <a class="font-13 rounded-m" data-bs-toggle="collapse" href="#tab-5" aria-expanded="false">History</a>
                        <a class="font-13 rounded-m" data-bs-toggle="collapse" href="#tab-x" aria-expanded="false">Activity</a>
                    </div>
                    
                    <!-- Tab 1 -->
                    <div class="mt-3"></div>
                    <div class="collapse show" id="tab-4" data-bs-parent="#tab-group-2">
                        <div class="list-group list-custom list-group-m list-group-flush rounded-xs px-1">
                            <a href="#" class="list-group-item pe-2" data-trigger-switch="switch-5">
                                <i class="has-bg gradient-green color-white shadow-bg shadow-bg-xs rounded-xs bi bi-gear-fill"></i>
                                <div><strong> Use Online Payments</strong><span>Use this card to pay online</span></div>
                                <div class="form-switch ios-switch switch-green switch-s">
                                    <input type="checkbox" class="ios-input" id="switch-5">
                                    <label class="custom-control-label" for="switch-5"></label>
                                </div>
                            </a>
                            <a href="#" class="list-group-item pe-2" data-trigger-switch="switch-51">
                                <i class="has-bg gradient-magenta color-white shadow-bg shadow-bg-xs rounded-xs bi bi-wifi"></i>
                                <div><strong> Use NFC Payments</strong><span>Pay With Card Contactless</span></div>
                                <div class="form-switch ios-switch switch-green switch-s">
                                    <input type="checkbox" class="ios-input" id="switch-51" checked>
                                    <label class="custom-control-label" for="switch-51"></label>
                                </div>
                            </a>
                            <a href="#" class="list-group-item pe-2" data-trigger-switch="switch-5">
                                <i class="has-bg gradient-blue color-white shadow-bg shadow-bg-xs rounded-xs bi bi-filter-circle"></i>
                                <div><strong>Change Card Name</strong></div>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="list-group-item pe-2" data-trigger-switch="switch-5">
                                <i class="has-bg gradient-red color-white shadow-bg shadow-bg-xs rounded-xs bi bi-x-circle"></i>
                                <div><strong>Remove this Card</strong></div>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                            <a href="#" class="list-group-item pe-2" data-trigger-switch="switch-5">
                                <i class="has-bg gradient-yellow color-white shadow-bg shadow-bg-xs rounded-xs bi bi-question-circle"></i>
                                <div><strong>Report Lost or Stolen</strong></div>
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Tab 2-->
                    <div class="collapse" id="tab-5" data-bs-parent="#tab-group-2">
                        <div class="form-custom form-label form-border form-icon mt-0 mb-0">
                            <i class="bi bi-check-circle font-13"></i>
                            <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                                <option selected>Latest Activity</option>
                                <option value="1">Last 30 Days</option>
                                <option value="2">Last 90 Days</option>
                                <option value="3">Last 6 Months</option>
                            </select>
                        </div>
                        <div class="list-group list-custom list-group-m list-group-flush rounded-xs">
                            <a href="#" class="list-group-item">
                                <i class="has-bg gradient-green color-white rounded-xs bi bi-cash-coin"></i>
                                <div><strong>Savings</strong><span>14  Transactions</span></div>
                                <span class="badge bg-transparent color-theme text-end font-15">
                                   $414,000<br>
                                   <em class="fst-normal font-12 opacity-30">13.5%</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="has-bg gradient-yellow color-white rounded-xs bi bi-droplet"></i>
                                <div><strong>Utilities</strong><span>11 Transactions</span></div>
                                <span class="badge bg-transparent color-theme text-end font-15">
                                    $6,310<br>
                                    <em class="fst-normal font-12 opacity-30">20.3%</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="has-bg gradient-blue color-white rounded-xs bi bi-bag"></i>
                                <div><strong>Shopping</strong><span>23 Transactions</span></div>
                                <span class="badge bg-transparent color-theme text-end font-15">
                                    $95,000<br>
                                    <em class="fst-normal font-12 opacity-30">45.7%</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="has-bg gradient-red color-white rounded-xs bi bi-gear"></i>
                                <div><strong>Construction</strong><span>34 Transactions</span></div>
                                <span class="badge bg-transparent color-theme text-end font-15">
                                    $6,315,765<br>
                                    <em class="fst-normal font-12 opacity-30">19.5%</em>
                                </span>
                            </a>
                            <a href="#" class="list-group-item">
                                <i class="has-bg gradient-magenta color-white rounded-xs bi bi-shuffle"></i>
                                <div><strong>Other Costs</strong><span>15 Transactions</span></div>
                                <span class="badge bg-transparent color-theme text-end font-15">
                                    $530<br>
                                    <em class="fst-normal font-12 opacity-30">35.5%</em>
                                </span>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Tab 3 -->
                    <div class="collapse" id="tab-x" data-bs-parent="#tab-group-2">
                        <a href="{{route('activity')}}" class="d-flex py-1">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-google color-white"></i></span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Google Ads</h5>
                                <p class="mb-0 font-11 opacity-70">14th March <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-red-dark">$150.55</h4>
                                <p class="mb-0 font-11">Bill Payment</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="{{route('activity')}}" class="d-flex py-1">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-cloud-fill color-white"></i></span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Cloud Storage</h5>
                                <p class="mb-0 font-11 opacity-70">14th March <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-red-dark">$15.55</h4>
                                <p class="mb-0 font-11">Subscription</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="{{route('activity')}}" class="d-flex py-1">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 shadow-bg shadow-bg-xs">
                                    <img src="{{asset('images/transaction-14856.svg')}}" width="46" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Hien Thi Thai</h5>
                                <p class="mb-0 font-11 opacity-70">26th dec <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-green-dark">$13,000.55</h4>
                                <p class="mb-0 font-11">Direct Transfer</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="{{route('activity')}}" class="d-flex py-1">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 shadow-bg shadow-bg-xs">
                                    <img src="{{asset('images/bitcoin-orange-coin-logo-symbol-19563.svg')}}" width="46" class="rounded-s" alt="img">
                                </span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Bitcoin</h5>
                                <p class="mb-0 font-11 opacity-70">14th March <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-blue-dark">+0.315%</h4>
                                <p class="mb-0 font-11">Stock Update</p>
                            </div>
                        </a>
                        <div class="divider my-2 opacity-50"></div>
                        <a href="{{route('activity')}}" class="d-flex py-1">
                            <div class="align-self-center">
                                <span class="icon rounded-s me-2 gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-pie-chart-fill color-white"></i></span>
                            </div>
                            <div class="align-self-center ps-1">
                                <h5 class="pt-1 mb-n1">Dividends</h5>
                                <p class="mb-0 font-11 opacity-70">13th March <span class="copyright-year"></span></p>
                            </div>
                            <div class="align-self-center ms-auto text-end">
                                <h4 class="pt-1 mb-n1 color-green-dark">$950.00</h4>
                                <p class="mb-0 font-11">Wire Transfer</p>
                            </div>
                        </a>
                        <div class="pb-3"></div>
                    </div>
                    
                    <!-- End of Tabs-->
                </div>
                
                <!-- End of Tab Wrapper-->
            </div>
        </div>        


     <!-- Add Card -->
     @include('layouts.components.user.menu-add-card')
    
@endsection