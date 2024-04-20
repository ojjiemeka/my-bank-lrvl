<!-- transfer moda, -->
<div class="tf-panel down">
    <div class="panel_overlay"></div>
    <div class="panel-box panel-down">
        <div class="header bg_white_color">
            <div class="tf-container">
                <div class="tf-statusbar d-flex justify-content-center align-items-center">
                    <a href="#" class="clear-panel"> <i class="icon-close1"></i> </a>
                    <h3>Transfer Method</h3>
                    <a href="40_qr-code.html" class="action-right"><i class="icon-qrcode4"></i></a> 
                </div>
            </div>
        </div>
        <div class="wrap-transfer mb-5">
            <div class="tf-container">
    
                <a href="{{route('paymentRequest')}}" class="action-sheet-transfer">
                    <div class="icon"><i class="icon-friends"></i></div>
                    <div class="content">
                        <h4 class="fw_6" >Transfer to Friend</h4>
                        <p>Free, just phone number</p>
                    </div>
    
                </a>
                <a href="{{route('paymentTransfer')}}" class="action-sheet-transfer">
                    <div class="icon"><i class="icon-bank2"></i></div>
                    <div class="content">
                        <h4 class="fw_6">Transfer to Bank</h4>
                        <p>Transfer to bank account, card</p>
                    </div>
                </a>
    
    
            </div>
    
        </div>
    </div>
</div>