@extends('layouts.user')

@section('content')
      <!-- Page Content - Only Page Elements Here-->
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

        <div class="row text-center">
            <div class="col-6 mb-n2">
                <a href="{{route('paymentExchange')}}" class="card card-style me-0" style="height:180px">
                    <div class="card-center">
                        <span class="icon icon-xl rounded-m gradient-green shadow-bg shadow-bg-xs"><i class="bi bi-arrow-clockwise font-24 color-white"></i></span>
                        <h1 class="font-22 pt-3">Exchange</h1>
                    </div>
                    <div class="card-bottom">
                        <p class="font-11 mb-0 opacity-70">Convert Currency</p>
                    </div>
                </a>
            </div>
            <div class="col-6 mb-n2">
                <a href="{{route('paymentBill')}}" class="card card-style ms-0" style="height:180px">
                    <div class="card-center">
                        <span class="icon icon-xl rounded-m gradient-orange shadow-bg shadow-bg-xs"><i class="bi bi-receipt font-24 color-white"></i></span>
                        <h1 class="font-22 pt-3">Pay a Bill</h1>
                    </div>
                    <div class="card-bottom">
                        <p class="font-11 mb-0 opacity-70">Bills and Invoices</p>
                    </div>
                </a>
            </div>
            <div class="col-6 mb-n2">
                <a href="{{route('paymentRequest')}}" class="card card-style me-0" style="height:180px">
                    <div class="card-center">
                        <span class="icon icon-xl rounded-m gradient-yellow shadow-bg shadow-bg-xs"><i class="bi bi-arrow-down-circle font-24 color-white"></i></span>
                        <h1 class="font-22 pt-3">Request</h1>
                    </div>
                    <div class="card-bottom">
                        <p class="font-11 mb-0 opacity-70">Request or Deposit</p>
                    </div>
                </a>
            </div>
            <div class="col-6 mb-n2">
                <a href="{{route('paymentTransfer')}}" class="card card-style ms-0" style="height:180px">
                    <div class="card-center">
                        <span class="icon icon-xl rounded-m gradient-blue shadow-bg shadow-bg-xs"><i class="bi bi-arrow-up-circle font-24 color-white"></i></span>
                        <h1 class="font-22 pt-3">Transfer</h1>
                    </div>
                    <div class="card-bottom">
                        <p class="font-11 mb-0 opacity-70">Move and Send</p>
                    </div>
                </a>
            </div>
			<div class="col-12 mb-n2 text-start">
				<a href="#" class="default-link card card-style" style="height:90px">
					<div class="card-center px-4">
						<div class="d-flex">
							<div class="align-self-center">
								<span class="icon icon-m rounded-s gradient-teal shadow-bg shadow-bg-xs"><i class="bi bi-search font-20 color-white"></i></span>
							</div>
							<div class="align-self-center ps-3 ms-1">
								<h1 class="font-20 mb-n1">Search</h1>
								<p class="mb-0 font-12 opacity-70">Filter your Transactions.</p>
							</div>
							<div class="align-self-center ms-auto">
								<span class="badge bg-red-dark line-height-xs font-9 rounded-xl">NEW</span>
							</div>
						</div>
					</div>
				</a>
			</div>
            <div class="col-12 mb-n2 text-start">
                <a href="{{route('reports')}}" class="default-link card card-style" style="height:90px">
                    <div class="card-center px-4">
                        <div class="d-flex">
                            <div class="align-self-center">
                                <span class="icon icon-m rounded-s gradient-brown shadow-bg shadow-bg-xs"><i class="bi bi-bar-chart font-20 color-white"></i></span>
                            </div>
                            <div class="align-self-center ps-3 ms-1">
                                <h1 class="font-20 mb-n1">Account Reports</h1>
                                <p class="mb-0 font-12 opacity-70">See your Payment Statistics.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>



    <!-- End of Page Content-->

    <!-- Off Canvas and Menu Elements-->
    <!-- Always outside the Page Content-->  
@endsection


