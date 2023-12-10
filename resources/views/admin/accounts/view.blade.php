@extends('layouts.main')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Gender</th>
                                        <th>Education</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>												
                                        </td>												
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Female</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2011/07/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2010/03/17</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2012/11/27</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                        <td>Paul Byrd</td>
                                        <td>Financial Officer</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2010/06/09</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                        <td>2009/04/10</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
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
@endsection
