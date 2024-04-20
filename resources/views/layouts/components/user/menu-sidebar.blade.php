<!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
<div class="tf-panel left">
    <div class="panel_overlay"></div>
    <div class="panel-box panel-left panel-sidebar">
        <div class="header-sidebar bg_white_color is-fixed">
            <div class="tf-container">
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{route('dashboard')}}" class="sidebar-logo">
                        <img class="mx-4" src="{{asset('https://garethdavidstudio.com/blog/wp-content/uploads/2020/12/DEUTSCHE-BANK_22.jpg')}}" alt="" srcset="">
                        <h5>Deutshce Bank</h5>
                    </a>
                    <a href="javascript:void(0);" class="clear-panel"> <i class="icon-close1"></i> </a>  
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="tf-container">
                <div class="box-content">
                    
                    <ul class="box-nav">
                        <li class="nav-title">MENU</li>
                        <li>
                            <a href="{{route('dashboard')}}" class="nav-link">
                                <i class="icon icon-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('accountProfile')}}" class="nav-link">
                                <i class="icon icon-user-outline"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="mt-1 list-setting-profile style1" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <h4 class="fw_6 critical_color">Log Out</h4>
                                <span class="inner-right"> <i class="icon-right"></i> </span>
                            </a>

                            

                            <div class="modal fade" id="logoutModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button class="btn-close" data-bs-dismiss="modal">
                                        <i class="fa-solid fa-xmark"></i>
                                      </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <div class="heading mb-4">
                                            <h2 class="text-center">Do you really want to sign out of your account?</h2>
                                        </div>
                                        <div class="bottom d-flex justify-content-around mt-6">
                                            <a class="clear-panel" data-bs-dismiss="modal">Cancel</a>
                                            <a class="clear-panel critical_color" href="{{ route('logout') }}"
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
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
