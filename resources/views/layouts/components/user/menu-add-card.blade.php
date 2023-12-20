<!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
<div id="menu-add-card" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">
    <div class="menu-size" style="height:410px;">
        <div class="d-flex mx-3 mt-3 py-1">
            <div class="align-self-center">
                <h1 class="mb-0">Add Card</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" class="py-3 ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas">
                    <i class="bi bi-x color-red-dark font-26"></i>
                </a>
            </div>
        </div>
        <div class="divider divider-margins mt-3"></div>
        <div class="content mt-0">
            <div class="form-custom form-label form-icon mb-3">
                <i class="bi bi-person-circle font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="John Doe"/>
                <label for="c1" class="color-highlight form-label-always-active">Cardholder Name</label>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-custom form-label mb-3">
                        <input type="number" class="form-control rounded-xs" id="c3" placeholder="1234 5678 9012 3456"/>
                        <label for="c3" class="color-highlight form-label-always-active">Card Number</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-custom form-label mb-3">
                        <input type="number" class="form-control rounded-xs" id="c3" placeholder="313"/>
                        <label for="c3" class="color-highlight form-label-always-active">Security</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-custom form-label mb-3">
                        <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <label for="c6" class="color-highlight form-label-always-active">Month</label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-custom form-label mb-3">
                        <select class="form-select rounded-xs" id="c61" aria-label="Floating label select example">
                            <option value="1">2021</option>
                            <option value="2">2022</option>
                            <option value="3">2023</option>
                            <option value="4">2024</option>
                            <option value="5">2025</option>
                        </select>
                        <label for="c61" class="color-highlight form-label-always-active">Month</label>
                    </div>
                </div>
            </div>
            <div class="divider mt-2 mb-4"></div>
            <a href="#" data-bs-dismiss="offcanvas" class="btn btn-full gradient-highlight shadow-bg shadow-bg-s">Add Card</a>
        </div>
    </div>
</div>