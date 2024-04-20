
<div class="modal fade" id="errorModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="fs-5 modal-title text-danger">ERROR!!!</h5>
          <button class="btn-close" data-bs-dismiss="modal">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
        <div class="modal-body text-center">
          <p class="fs-6 fw-bold modal-body text-capitalize text-center">Account has been locked for security reasons.</p>
          <p class=" py-4 font-500 text-uppercase d-block">Please contact <a href="{{route('support')}}" class="text-danger">support</a></p>
        </div>
       
      </div>
    </div>
</div>

    <!-- Add JavaScript to show the modal -->