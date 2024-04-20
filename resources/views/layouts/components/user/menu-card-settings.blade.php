 <!-- manage card modal -->
 <div class="tf-panel card-popup">
    <div class="panel_overlay"></div>
    <div class="panel-box panel-down">
        <div class="header">
            <div class="tf-container">
                <div class="tf-statusbar d-flex justify-content-center align-items-center">
                    <a href="#" class="clear-panel"> <i class="icon-left"></i> </a>
                    <h3>Manage Your Card</h3>
                </div>
            </div>
        </div>
        <div class="content-card mt-3 mb-5">
            <div class="tf-container">
                <div class="tf-card-list bg_surface_color large out-line">
                    <div class="logo">
                        <img src="bank2.0/images/logo-banks/card-visa.png" alt="image">
                    </div>
                    <div class="info">
                        <h4 class="fw_6"><a href="{{route('cardLimit')}}">Mastercard</a></h4>
                        <p>****  ****  ****   7576</p>
                    </div>
                    <input type="checkbox" class="tf-checkbox circle-check" checked>
                </div>
                <p class="auth-line">Choose other card for payment</p>
                <ul class="box-card">
                    <li class="tf-card-list medium bt-line">
                        <div class="logo">
                        <img src="bank2.0/images/logo-banks/card-visa2.png" alt="image">
                    </div>
                    <div class="info">
                        <h4 class="fw_6"><a href="{{route('cardLimit')}}">Visacard</a></h4>
                        <p>****  ****  ****   3245</p>
                    </div>
                    <input type="checkbox" class="tf-checkbox circle-check">
                    </li>
                    <li class="tf-card-list medium bt-line">
                        <div class="logo">
                        <img src="bank2.0/images/logo-banks/card-visa.png" alt="image">
                    </div>
                    <div class="info">
                        <h4 class="fw_6"><a href="{{route('cardLimit')}}">Mastercard</a></h4>
                        <p>****  ****  ****   7576</p>
                    </div>
                    <input type="checkbox" class="tf-checkbox circle-check">
                    </li>
                    <li class="tf-card-list medium">
                        <div class="logo">
                        <img src="bank2.0/images/logo-banks/card-visa2.png" alt="image">
                    </div>
                    <div class="info">
                        <h4 class="fw_6"><a href="{{route('cardLimit')}}">Visacard</a></h4>
                        <p>****  ****  ****   7214</p>
                    </div>
                    <input type="checkbox" class="tf-checkbox circle-check">
                    </li>
                </ul>
                <div class="tf-spacing-20"></div>
                <a data-bs-toggle="modal" data-bs-target="#errorModal" class="tf-btn large">Add a new card <i class="icon-plus fw_7"></i> </a>
            </div>
        </div>
    </div>
    
</div>