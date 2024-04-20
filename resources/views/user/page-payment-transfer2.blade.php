@extends('layouts.user')

@section('content')
    <div class="header">
        <div class="tf-container">
            <div class="tf-statusbar d-flex justify-content-center align-items-center">
                <a href="#" class="back-btn"> <i class="icon-left"></i> </a>
                <h3>Transfer</h3>
            </div>
        </div>
    </div>
    <div class="content-by-bank mt-3">
        <div class="tf-container">
            <div class="heading">
                <h3 class="d-flex justify-content-between fw_6">Transfer To <a href="#">Scan QR <i class="icon-right"></i></a></h3>
                <div class="tf-spacing-12"></div>
            </div>

            <form class="tf-form mt-3" >
                <div class="group-input">
                    <label for="">Bank</label>
                    <div class="box-custom-select">
                        <select class="default-select">
                            <option class="item" data-thumbnail="bank2.0/images/logo-banks/bank1.png">Visa</option>
                            <option class="item" data-thumbnail="bank2.0/images/logo-banks/bank2.png">Techcombank</option>
                            <option class="item" data-thumbnail="bank2.0/images/logo-banks/bank3.png">ACB</option>
                            <option class="item" data-thumbnail="bank2.0/images/logo-banks/bank4.png">Five star bank</option>
                            <option class="item" data-thumbnail="bank2.0/images/logo-banks/bank5.png">Citibank</option>  
                            <option class="item" data-thumbnail="bank2.0/images/logo-banks/bank6.png">ICBCbank</option>  
                            <option class="item" data-thumbnail="bank2.0/images/logo-banks/bank7.png">Chasebank</option>  
                            <option class="item" data-thumbnail="bank2.0/images/logo-banks/bank8.png">Vietinbank</option>  
                        </select>
                        <div class="lang-select">
                            <ul class="btn-select" value=""></ul>
                            <i class="icon-down"></i>
                        </div>
                        <div class="banks-select">
                            <ul id="box-select"></ul>
                        </div>
                    </div>
                    
                </div>
                <div class="group-input">
                    <label for="">Account Number</label>
                    <input type="text" placeholder="1234 0000 2134 3243" value="1234 0000 2134 3243">
                    <div class="credit-card">
                        <span>Saved Number</span>
                        <i class="icon-bankgroup"></i>
                    </div>
    
                </div>
                @foreach ($accounts as $account)
                    <div class="group-input">
                        <label for="">Account Name</label>
                        <input type="text" value="{{ $account->fname }} {{ $account->lname }}">
                    </div>
                @endforeach
                <div class="group-input input-field input-money">
                    <label for="">Amout Of Money</label>
                    <input type="text" value="$ 5" required class="search-field value_input st1" type="text">
                    <span class="icon-clear"></span>
                    <div class="money">
                       <a class="tag-money" href="#">$ 50</a>
                       <a class="tag-money" href="#">$ 100</a> 
                       <a class="tag-money" href="#">$ 150</a> 
                    </div>
                </div>
                <div class="group-input">
                    <label for="">Message</label>
                    <input type="text" value="Loan payment">
                    <div class="tf-spacing-12"></div>
                    <div class="group-checkbox">
                        <input type="checkbox" class="tf-checkbox st1" checked>
                        <span class="fw_3">Save this account number to transfer money later</span>
                    </div>
                </div>
               
                <div class=" bottom-btn-fixed st2">
                    <button data-bs-toggle="modal" data-bs-target="#errorModal" class="tf-btn accent large">Continue</button>
                </div>

             </form>

        </div>
    </div>
@endsection

    
