<!-- menu-size will be the dimension of your menu. If you set it to smaller than your content it will scroll-->
<div id="menu-transfer" class="offcanvas offcanvas-bottom offcanvas-detached rounded-m">

    <div class="menu-size" style="height:440px;">
        <div class="d-flex mx-3 mt-3 py-1">
            <div class="align-self-center">
                <h1 class="mb-0">Transfer Funds</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" class= "ps-4 shadow-0 me-n2" data-bs-dismiss="offcanvas">
                    <i class="bi bi-x color-red-dark font-26 line-height-xl"></i>
                </a>
            </div>
        </div>
        <div class="divider divider-margins mt-3"></div>
       {{-- <form> --}}
        {{-- @csrf --}}

        <div class="content mt-0">
            <div class="form-custom form-label form-icon">
                <i class='bx bxs-bank'></i>
                <select class="form-select rounded-xs" id="c6" aria-label="Floating label select example">
                    <option selected>Main Account</option>
                    <option value="1">Savings Account</option>
                    <option value="2">Company Account</option>
                </select>
                <label for="c6" class="form-label-always-active color-highlight font-11">Choose Account</label>
            </div>
            <div class="pb-3"></div>
            <div class="form-custom form-label form-icon mb-3">
                <i class='bx bxs-bank'></i>
                <input type="text" name="name" class="form-control rounded-xs" id="c3" required />
                <label for="c3" class="form-label-always-active color-highlight font-11">Recipient Name</label>
                <span class="font-10">(required)</span>
            </div>

            <div class="form-custom form-label form-icon mb-3">
                <i class='bx bxs-bank'></i>
                <input type="text" name="bank_name" class="form-control rounded-xs" id="c3" required />
                <label for="c3" class="form-label-always-active color-highlight font-11">Bank Name</label>
                <span class="font-10">(required)</span>
            </div>

            <div class="form-custom form-label form-icon mb-3">
                <i class='bx bx-hash' ></i>
                <input type="number" name="acc_number" class="form-control rounded-xs" id="c3" required />
                <label for="c3" class="form-label-always-active color-highlight font-11">Account Number</label>
                <span class="font-10">(required)</span>
            </div>
            
            <div class="form-custom form-label form-icon mb-3">
                <i class='bx bx-hash' ></i>
                <input type="number" class="form-control rounded-xs" id="c3" required />
                <label for="c3" class="form-label-always-active color-highlight font-11">Routing Number</label>
                <span class="font-10">(required)</span>
            </div>

            <div class="form-custom form-label form-icon mb-">
                <i class='bx bx-hash' ></i>
                <input type="text" class="form-control rounded-xs" id="c3" required />
                <label for="c3" class="form-label-always-active color-highlight font-11">Reference</label>
                <span class="font-10">(required)</span>
            </div>
            <div class="pb-3"></div>
            <div class="form-custom form-label form-icon">
                <i class='bx bx-dollar' ></i>
                <input type="number" class="form-control rounded-xs" id="c4" placeholder="150.00" />
                <label for="c4" class="form-label-always-active color-highlight font-11">Amount</label>
                <span class="font-10">( $ )</span>
            </div>
            <div class="pb-2"></div>
            <div class="form-check form-check-custom">
                <input class="form-check-input" type="checkbox" name="type" value="" id="c2">
                <label class="form-check-label" for="c2">I accept the Transfer <a href="#">Terms of
                        Service</a></label>
                <i class="is-checked color-green-dark font-14 bi bi-check-circle-fill"></i>
                <i class="is-unchecked color-green-dark font-14 bi bi-circle"></i>
            </div>

        </div>
        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#menu-transfer-failed" class="mx-3 mb-3 btn btn-full bg-facebook shadow-bg shadow-bg-s">Transfer Funds</button>

    {{-- </form> --}}
    </div>
    @include('layouts.components.user.error')


</div>
