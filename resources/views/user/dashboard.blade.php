@extends('layouts.main')

@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-9">
						<div class="row">
							<!----column-- -->
							<div class="col-xl-4 col-lg-5 col-md-12 col-sm-12">
								<div class="card  wallet">
									<div class="boxs">
										<span class="box one"></span>
										<span class="box two"></span>
										<span class="box three"></span>
										<span class="box four"></span>
									</div>
									<div class="card-header border-0 pe-5">
										<div class="wallet-icon">
											<svg width="62" height="39" viewBox="0 0 62 39" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="42.7722" cy="19.2278" r="19.2278" fill="white" fill-opacity="0.2"/>
												<circle cx="19.2278" cy="19.2278" r="19.2278" fill="white" fill-opacity="0.2"/>
											</svg>	
										</div>
										<div>
											<div class="send m-auto">
												<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="1" d="M15.1667 4.66667C15.1667 4.02233 14.6444 3.5 14 3.5C13.3557 3.5 12.8334 4.02233 12.8334 4.66667V18.6667C12.8334 19.311 13.3557 19.8333 14 19.8333C14.6444 19.8333 15.1667 19.311 15.1667 18.6667V4.66667Z" fill="white"/>
												<path d="M7.825 12.4916C7.36939 12.9472 6.63069 12.9472 6.17508 12.4916C5.71947 12.036 5.71947 11.2973 6.17508 10.8417L13.1751 3.84171C13.6168 3.40003 14.3279 3.38458 14.7884 3.80665L21.7884 10.2233C22.2634 10.6587 22.2954 11.3967 21.8601 11.8717C21.4247 12.3467 20.6867 12.3787 20.2117 11.9433L14.0351 6.2815L7.825 12.4916Z" fill="white"/>
												<path opacity="1" d="M23.3333 22.1667H4.66667C4.02233 22.1667 3.5 22.689 3.5 23.3334C3.5 23.9777 4.02233 24.5 4.66667 24.5H23.3333C23.9777 24.5 24.5 23.9777 24.5 23.3334C24.5 22.689 23.9777 22.1667 23.3333 22.1667Z" fill="white"/>
												</svg>	
											</div>
											<span>Transfer </span>
										</div>
									
									</div>
									<div class="card-body py-3  d-flex align-items-center justify-content-between flex-wrap">
										<div class="wallet-info">
											<span class="fs-18 d-block">Wallet Balance</span>
											<h4 class="font-w600 mb-0 d-inline-flex me-2 text-break">$824,571.93</h4>
											<span>+0.8% than last week</span>
										</div>
										<div>
											<div class="send m-auto">
												<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M6.83329 2.33331H16.0258C16.4396 2.33331 16.84 2.47994 17.1559 2.74718L22.7134 7.44791C23.1066 7.78042 23.3333 8.26917 23.3333 8.78405V23.4305C23.3333 25.5195 23.3094 25.6666 21.1666 25.6666H6.83329C4.69048 25.6666 4.66663 25.5195 4.66663 23.4305V4.56942C4.66663 2.48046 4.69048 2.33331 6.83329 2.33331Z" fill="white"/>
													<path d="M16.3333 12.8333H8.16667C7.52233 12.8333 7 13.3557 7 14C7 14.6443 7.52233 15.1667 8.16667 15.1667H16.3333C16.9777 15.1667 17.5 14.6443 17.5 14C17.5 13.3557 16.9777 12.8333 16.3333 12.8333Z" fill="white"/>
													<path d="M11.6667 17.5H8.16667C7.52233 17.5 7 18.0223 7 18.6667C7 19.311 7.52233 19.8333 8.16667 19.8333H11.6667C12.311 19.8333 12.8333 19.311 12.8333 18.6667C12.8333 18.0223 12.311 17.5 11.6667 17.5Z" fill="white"/>
												</svg>	
											</div>
											<span>Send Invoices</span>
										</div>
										
									</div>
								</div>	
							</div>
							<!----/column-- -->
							<!----column-- -->
							<div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
								<div class="card ">
									<div class="card-header border-0 align-items-start pb-0">
										<div>
											<span class="fs-18 d-block mb-2">Main Balance</span>
											<h4 class="fs-28 font-w600 ">$ 98,452.44</h4>
										</div>
										
									</div>
									<div class="card-body py-4 py-md-2">
										<div class="progress default-progress">
											<div class="progress-bar-primary rounded-0 bg-vigit progress-animated" style="width: 90%; height:8px;" role="progressbar">
												<span class="sr-only">90% Complete</span>
											</div>
										</div>
										<div class="row mt-2">
											<div class="value-data col-xl-4 col-md-4 col-6">
												<span class="fs-14 font-w400 ">VALID THRU</span>
												<span class="value fs-16 "><span class="text-black pe-2 "></span>08/21</span>
											</div>
											<div class="value-data col-xl-4 col-md-4 col-6">
												<span class="fs-14 font-w400 ">CARD HOLDER</span>
												<span class="value fs-16"><span class="text-black pe-2 "></span>Adam Joe</span>
											</div>
											<div class="value-data col-xl-4 col-md-4 col-12">
												<span class="fs-14 font-w400 ">NUMBER</span>
												<span class="value fs-16"><span class="text-black pe-2 "></span>**** **** **** 1234</span>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							<!----/column-- -->
							<div class="col-xl-12">
								<div class="card">	
									<div class="card-body py-3 py-md-2 px-4">	
										<div class="row">
											<!--column-->
											<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
												<div class="card mt-1 mt-md-3">
													<div class="card-body p-3">
														<div class="align-items-center h-100 d-flex flex-wrap">
															<div class="d-inline-block position-relative donut-chart-sale me-2">
																<span class="donut2" data-peity='{ "fill": ["#AC39D4", "rgba(255, 255, 255, 0.1"],   "innerRadius": 18, "radius": 8}'>3/9</span>
															</div>
															<div class=" ">
																<h4 class="fs-18 font-w600 mb-1 text-break">Installment</h4>
																<span class="fs-14">$5,412</span>
															</div>	
														</div>
													</div>
												</div>
											</div>
											<!--/column-->
											<!--column-->
											<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
												<div class="card mt-3">
													<div class="card-body p-3">
														<div class="align-items-center h-100 d-flex flex-wrap">
															<div class="d-inline-block position-relative donut-chart-sale me-2">
																<span class="donut2" data-peity='{ "fill": ["#40D4A8", "rgba(255, 255, 255, 0.1"],   "innerRadius": 18, "radius": 8}'>5/9</span>
															</div>
															<div class="">
																<h4 class="fs-18 font-w600 mb-1 text-break">Investment</h4>
																<span class="fs-14">$3,784</span>
															</div>	
														</div>
													</div>
												</div>
											</div>
											<!--/column-->
											<!--column-->
											<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
												<div class="card mt-3">
													<div class="card-body p-3">
														<div class="align-items-center h-100 d-flex flex-wrap">
															<div class="d-inline-block position-relative donut-chart-sale me-2">
																<span class="donut2" data-peity='{ "fill": ["#00D1FF", "rgba(255, 255, 255, 0.1"],   "innerRadius": 18, "radius": 8}'>2/6</span>
															</div>
															<div class=" ">
																<h4 class="fs-18 font-w600 mb-1 text-break">Property</h4>
																<span class="fs-14">$3,784</span>
															</div>	
														</div>
													</div>
												</div>
											</div>
											<!--/column-->
											<!--column-->
											<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
												<div class="card mt-3">
													<div class="card-body p-3">
														<div class="align-items-center h-100 d-flex flex-wrap ">
															<div class="d-inline-block position-relative donut-chart-sale me-2">
																<span class="donut2" data-peity='{ "fill": ["#FF9F00", "rgba(255, 255, 255, 0.1"],   "innerRadius": 18, "radius": 8}'>2/6</span>
															</div>
															<div class=" ">
																<h4 class="fs-18 font-w600 mb-1 text-break">Property</h4>
																<span class="fs-14">$3,784</span>
															</div>	
														</div>
													</div>
												</div>
											</div>
											<!--/column-->
										</div>
										<!-- --/row-- -->
									</div>
								</div>
							</div>
							<!--column-->
							<div class="col-xl-12">
								<div class="card user-data-table">
									<div class="card-header pb-0 d-block d-sm-flex border-0">
										<div class="me-3">
											<h4 class="card-title mb-2">Latest Transaction</h4>
											<span class="fs-12">Lorem ipsum dolor sit amet, consectetur</span>
										</div>
										<div class="card-tabs mt-3 mt-sm-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link underline active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
												</li>
												<li class="nav-item">
													<a class="nav-link underline" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
												</li>
												<li class="nav-item">
													<a class="nav-link underline" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body tab-content p-0">
										<!-- tab-pane -->
										<div class="tab-pane fade active show" id="monthly" role="tabpanel">
											<div id="accordion-one" class="accordion style-1">
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne1">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/1.jpg" alt="">	
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
																<span class="fs-14">Online Shop</span>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-warning" href="javascript:void(0);">Pending</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne1" class="collapse accordion_body" data-bs-parent="#accordion-one">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class=" font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class=" font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne2">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/2.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-success " href="javascript:void(0);">Completed</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne2" class="collapse accordion_body" data-bs-parent="#accordion-one">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne3">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/pic2.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-danger" href="javascript:void(0);">Canceled</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne3" class="collapse accordion_body" data-bs-parent="#accordion-one">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												
											</div>
										</div>
										<!--/ tab-pane -->
										<!-- tab-pane -->
										<div class="tab-pane fade " id="Weekly" role="tabpanel">
											<div id="accordion-two" class="accordion style-1">
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne12">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/1.jpg" alt="">	
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
																<span class="fs-14">Online Shop</span>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-warning" href="javascript:void(0);">Pending</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne12" class="collapse accordion_body" data-bs-parent="#accordion-two">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class=" font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class=" font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne22">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/2.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-success " href="javascript:void(0);">Completed</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne22" class="collapse accordion_body show" data-bs-parent="#accordion-two">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne32">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/pic2.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-danger" href="javascript:void(0);">Canceled</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne32" class="collapse accordion_body" data-bs-parent="#accordion-two">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne42">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/2.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-success " href="javascript:void(0);">Completed</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne42" class="collapse accordion_body " data-bs-parent="#accordion-two">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne52">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/4.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
																<span class="fs-14">Online Shop</span>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-warning" href="javascript:void(0);">Pending</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne52" class="collapse accordion_body" data-bs-parent="#accordion-two">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne62">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/5.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Peter Parkur</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-warning" href="javascript:void(0);">Pending</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne62" class="collapse accordion_body" data-bs-parent="#accordion-two">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/ tab-pane -->
										<!-- tab-pane -->
										<div class="tab-pane fade " id="Today" role="tabpanel">
											<div id="accordion-one1" class="accordion style-1">
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne11">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/1.jpg" alt="">	
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
																<span class="fs-14">Online Shop</span>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-warning" href="javascript:void(0);">Pending</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne11" class="collapse accordion_body" data-bs-parent="#accordion-one1">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class=" font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class=" font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne21">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/2.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-success " href="javascript:void(0);">Completed</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne21" class="collapse accordion_body show" data-bs-parent="#accordion-one1">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne31">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/pic2.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-danger" href="javascript:void(0);">Canceled</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne31" class="collapse accordion_body" data-bs-parent="#accordion-one1">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne41">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/2.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-success " href="javascript:void(0);">Completed</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne41" class="collapse accordion_body " data-bs-parent="#accordion-one1">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne51">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/4.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Livia Bator</a></h6>
																<span class="fs-14">Online Shop</span>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-warning" href="javascript:void(0);">Pending</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne51" class="collapse accordion_body" data-bs-parent="#accordion-one1">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
												<div class="accordion-item bg-transparent mb-0">
													<div class="accordion-header collapsed my-2" data-bs-toggle="collapse" data-bs-target="#default_collapseOne61">
														<div class="d-flex align-items-center">
															<div class="profile-image">
																<img src="images/avatar/5.jpg" alt="">
															</div>
															<div class="user-info">
																<h6 class="fs-16 font-w500 mb-0"><a href="javascript:void(0)">Peter Parkur</a></h6>
															</div>
														</div>
														<span>June 5, 2020, 08:22 AM</span>
														<span>+$5,553</span>
														<span>MasterCard 404</span>
														<a class="btn btn-warning" href="javascript:void(0);">Pending</a>
														<span class="accordion-header-indicator"></span>
													</div>
													<div id="default_collapseOne61" class="collapse accordion_body" data-bs-parent="#accordion-one1">
														<div class="payment-details accordion-body-text">
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">ID Payment</p>
																<span class="font-w500">#00123521</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Payment Method</p>
																<span class="font-w500">MasterCard 404</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Invoice Date</p>
																<span class="font-w500">April 29, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Due Date</p>
																<span class="font-w500">June 5, 2020</span>
															</div>
															<div class="me-3 mb-3">
																<p class="fs-12 mb-2">Date Paid</p>
																<span class="font-w500">June 4, 2020</span>
															</div>
															<div class="info">
																<svg class="me-3" width="35" height="35" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 1C9.82441 1 7.69767 1.64514 5.88873 2.85384C4.07979 4.06253 2.66989 5.7805 1.83733 7.79049C1.00477 9.80047 0.786929 12.0122 1.21137 14.146C1.6358 16.2798 2.68345 18.2398 4.22183 19.7782C5.76021 21.3166 7.72022 22.3642 9.85401 22.7887C11.9878 23.2131 14.1995 22.9953 16.2095 22.1627C18.2195 21.3301 19.9375 19.9202 21.1462 18.1113C22.3549 16.3023 23 14.1756 23 12C22.9966 9.08368 21.8365 6.28778 19.7744 4.22563C17.7122 2.16347 14.9163 1.00344 12 1ZM12 21C10.22 21 8.47992 20.4722 6.99987 19.4832C5.51983 18.4943 4.36628 17.0887 3.68509 15.4442C3.0039 13.7996 2.82567 11.99 3.17294 10.2442C3.5202 8.49836 4.37737 6.89471 5.63604 5.63604C6.89472 4.37737 8.49836 3.5202 10.2442 3.17293C11.99 2.82567 13.7996 3.0039 15.4442 3.68509C17.0887 4.36627 18.4943 5.51983 19.4832 6.99987C20.4722 8.47991 21 10.22 21 12C20.9971 14.3861 20.0479 16.6736 18.3608 18.3608C16.6736 20.048 14.3861 20.9971 12 21Z" fill="#FF9F00"/>
																	<path d="M12 9C11.7348 9 11.4804 9.10536 11.2929 9.29289C11.1054 9.48043 11 9.73478 11 10V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8947 17.5196 13 17.2652 13 17V10C13 9.73478 12.8947 9.48043 12.7071 9.29289C12.5196 9.10536 12.2652 9 12 9Z" fill="#FF9F00"/>
																	<path d="M12 8C12.5523 8 13 7.55228 13 7C13 6.44771 12.5523 6 12 6C11.4477 6 11 6.44771 11 7C11 7.55228 11.4477 8 12 8Z" fill="#FF9F00"/>
																</svg>
																<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, <br>consectetur </p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/ tab-pane -->
									</div>
									


								</div>	

							</div>
							<!--/column-->
						</div>
						<!-- --/row-- -->
					<!--/column-->		
					</div>
							<!--column-->
				<div class="col-xl-3">
			
					<div class="row">
						<!--column-->
						<div class="col-xl-12 ">
								<div class="card student-chart">
									<div class="card-header border-0 pb-0">
										<h4>Your Balance</h4>
									</div>
									<div class="card-body pt-0 custome-tooltip">
										<canvas id="activeUser"></canvas>
										<div class="d-flex justify-content-between align-items-center flex-wrap std-info d-none">
											<h4 class="fs-18 font-w600 mb-0">12.345</h4>
											<span><small class="text-secondary">5.4% </small>than last year</span>
										</div>
									</div>
								</div>
						</div>
						<!--/column-->			
					</div>
					<!-- --/row-- -->	
						<div class="col-xl-12 ">
                            <div class="card Expense overflow-hidden">
                                <div class="card-body p-4 p-lg-3 p-xl-4 ">	
                                    <div class="students1 one d-flex align-items-center justify-content-between ">
                                        <div class="content">
                                            <h2 class="mb-0">$19,522</h2>
                                            <span class="mb-2 fs-14">Expense</span>
                                            <h5>+0,5% than last month</h5>
                                        </div>
                                        <div>
                                            <div class="d-inline-block position-relative donut-chart-sale mb-3">
                                                <svg width="60" height="58" viewBox="0 0 60 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M39.0469 2.3125C38.3437 3.76563 38.9648 5.52344 40.418 6.22657C44.4609 8.17188 47.8828 11.1953 50.3203 14.9805C52.8164 18.8594 54.1406 23.3594 54.1406 28C54.1406 41.3125 43.3125 52.1406 30 52.1406C16.6875 52.1406 5.85937 41.3125 5.85937 28C5.85937 23.3594 7.18359 18.8594 9.66797 14.9688C12.0937 11.1836 15.5273 8.16016 19.5703 6.21485C21.0234 5.51173 21.6445 3.76563 20.9414 2.30079C20.2383 0.847664 18.4922 0.226569 17.0273 0.929694C12 3.34376 7.74609 7.09375 4.73437 11.8047C1.64062 16.6328 -1.56336e-06 22.2344 -1.31134e-06 28C-9.60967e-07 36.0156 3.11719 43.5508 8.78906 49.2109C14.4492 54.8828 21.9844 58 30 58C38.0156 58 45.5508 54.8828 51.2109 49.2109C56.8828 43.5391 60 36.0156 60 28C60 22.2344 58.3594 16.6328 55.2539 11.8047C52.2305 7.10547 47.9766 3.34375 42.9609 0.929693C41.4961 0.238287 39.75 0.84766 39.0469 2.3125V2.3125Z" fill="#53CAFD"/>
                                                    <path d="M41.4025 26.4414C41.9767 25.8671 42.258 25.1171 42.258 24.3671C42.258 23.6171 41.9767 22.8671 41.4025 22.2929L34.0314 14.9218C32.9533 13.8437 31.5236 13.2578 30.0119 13.2578C28.5002 13.2578 27.0587 13.8554 25.9923 14.9218L18.6212 22.2929C17.4728 23.4414 17.4728 25.2929 18.6212 26.4414C19.7697 27.5898 21.6212 27.5898 22.7697 26.4414L27.0939 22.1171L27.0939 38.7695C27.0939 40.3867 28.4064 41.6992 30.0236 41.6992C31.6408 41.6992 32.9533 40.3867 32.9533 38.7695L32.9533 22.1054L37.2775 26.4296C38.4025 27.5781 40.2541 27.5781 41.4025 26.4414Z" fill="#53CAFD"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>	
						</div>	

                        <div class="col-xl-12 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body p-4 p-lg-3 p-xl-4 ">	
                                    <div class="students1 two d-flex align-items-center justify-content-between">
                                        <div class="content">
                                            <h2 class="mb-0">$45,234</h2>
                                            <span class="mb-2 fs-14">Income</span>
                                            <h5 class="fs-13">-2% than last month</h5>
                                        </div>
                                        <div class="d-inline-block position-relative donut-chart-sale">
                                            <span class="donut3" data-peity='{ "fill": ["rgba(204, 97, 255, 0.9)", "rgba(255, 255, 255, 0.1"],   "innerRadius": 30, "radius": 8}'>4/8</span>
                                            <small>38%</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----/column-- -->
                        <!----column-- -->
                        <div class="col-xl-12 col-lg-4 col-md-12">
                            <div class="card overflow-hidden">
                                <div class="card-body p-4 p-lg-3 p-xl-4">	
                                    <div class="students1 three d-flex align-items-center justify-content-between">
                                        <div class="content">
                                            <h2 class="mb-0">$984</h2>
                                            <span class="fs-14">Transactions</span>
                                        </div>
                                        <div class="newCustomers">
                                            <div class="d-inline-block position-relative donut-chart-sale mb-3">
                                                <div id="NewCustomers"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
					
				</div>
				<!----/column-- -->
			<!--/row-->
					</div>
				<!--/column-->
				<!--**********************************
					Footer start
				***********************************-->
				<div class="footer">
					<div class="copyright">
						<p>Copyright © Designed &amp; Developed by <a href="https:// dexignzone.com/" target="_blank"> DexignZone</a> 2022</p>
					</div>
				</div>
				
				<!--**********************************
					Footer end
				***********************************-->
			
            </div>
			<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<label for="PersonName" class="form-label d-block">Enter Name</label>
							<input type="text" id="PersonName" class="form-control w-100 mb-3" placeholder="Username" >
							<label for="PersonPosition" class="form-label d-block">Enter Position</label>
							<input type="text" id="PersonPosition" class="form-control w-100" placeholder="Position" >
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary btn-sm">Save changes</button>
						</div>
					</div>
					</div>
				</div>	
			<!-- /Modal -->	
			<!--row-->
		</div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection

