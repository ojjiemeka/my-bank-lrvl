@extends('layouts.main')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Balances</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Acc No.</th>
                                        <th scope="col">Balance</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Air Conditioner</td>
                                        <td>
                                            <div class="progress" style="background: rgba(127, 99, 244, .1)">
                                                <div class="progress-bar bg-primary" style="width: 70%;" role="progressbar">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Apr 20,2018</td>
                                        <td><span class="badge badge-primary">70%</span>
                                        </td>
                                        <td>
                                            <span>
                                                <a type="button" class="me-4" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" title="Edit">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <a href="javascript:void()" data-bs-toggle="tooltip"
                                                    data-placement="top" title="btn-close"><i
                                                        class="fas fa-times text-danger"></i></a>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Textiles</td>
                                        <td>
                                            <div class="progress" style="background: rgba(76, 175, 80, .1)">
                                                <div class="progress-bar bg-success" style="width: 70%;" role="progressbar">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>May 27,2018</td>
                                        <td><span class="badge badge-success">70%</span>
                                        </td>
                                        <td><span>
                                            <a type="button" class="me-4" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                                <a href="javascript:void()" data-bs-toggle="tooltip"
                                                    data-placement="top" title="btn-close"><i
                                                        class="fas fa-times text-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Milk Powder</td>
                                        <td>
                                            <div class="progress" style="background: rgba(70, 74, 83, .1)">
                                                <div class="progress-bar bg-dark" style="width: 70%;" role="progressbar">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>May 18,2018</td>
                                        <td><span class="badge badge-dark">70%</span>
                                        </td>
                                        <td><span>
                                            <a type="button" class="me-4" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                                <a href="javascript:void()" data-bs-toggle="tooltip"
                                                    data-placement="top" title="btn-close"><i
                                                        class="fas fa-times text-danger"></i></a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Boats</td>
                                        <td>
                                            <div class="progress" style="background: rgba(255, 193, 7, .1)">
                                                <div class="progress-bar bg-warning" style="width: 70%;" role="progressbar">
                                                    <span class="sr-only">70% Complete</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Jun 28,2018</td>
                                        <td><span class="badge badge-warning">70%</span>
                                        </td>
                                        <td><span>
                                            <a type="button" class="me-4" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                                <a href="javascript:void()" data-bs-toggle="tooltip"
                                                    data-placement="top" title="btn-close"><i
                                                        class="fas fa-times text-danger"></i></a></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary  mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Modal
        centered</button> --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light btn-sm" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
