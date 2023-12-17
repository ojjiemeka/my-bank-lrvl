@extends('layouts.main')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Profile Datatable</h4>
                        <a href="{{route('accounts.create')}}" class="btn btn-primary shadow btn-xs sharp me-4"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Date of birth</th>
                                        <th>Address</th>
                                        <th>Acc #</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dt)
                                        <tr>
                                            <td><img class="rounded-circle" width="35"
                                                    src="images/profile/small/pic1.jpg" alt=""></td>
                                            <td>{{ $dt->fname }}</td>
                                            <td>{{ $dt->lname }}</td>
                                            <td>{{ $dt->phonenumber }}</td>
                                            <td>{{ $dt->email }}</td>
                                            <td>{{ $dt->dob }}</td>
                                            <td>{{ $dt->address }}</td>
                                            <td>{{ $dt->acc_number }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a data-bs-toggle="modal" data-bs-target="#editModal{{ $dt->id }}"
                                                        class="btn btn-primary shadow btn-xs sharp me-4"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                            <a class="btn btn-danger shadow btn-xs sharp"  data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{ $dt->id }}"><i
                                                                    class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="editModal{{ $dt->id }}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit</h5>
                                                        <i class='bx bx-sm bx-x' data-bs-dismiss="modal" style="cursor: pointer"></i>
                                                    </div>
                                                    <form action="{{ route('accounts.update', $dt->id) }}" method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">First Name</label>
                                                                    <input type="text" name="fname" value="{{ $dt->fname }}"
                                                                        class="form-control" placeholder="">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Last Name</label>
                                                                    <input type="text" name="lname" value="{{ $dt->lname }}"
                                                                        class="form-control" placeholder="">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Email</label>
                                                                    <input type="email" name="email" value="{{ $dt->email }}"
                                                                        class="form-control" placeholder="Email">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Phone number</label>
                                                                    <input type="text" name="phonenumber" value="{{ $dt->phonenumber }}"
                                                                        class="form-control" placeholder="">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Date of birth</label>
                                                                    <input type="date" name="dob" value="{{ $dt->dob }}"
                                                                        class="form-control" placeholder="">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Address</label>
                                                                    <input type="text" name="address" value="{{ $dt->address }}"
                                                                        class="form-control" placeholder="">
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label">Account Number</label>
                                                                    <input type="text" name="acc_number" value="{{ $dt->acc_number }}"
                                                                        maxlength="12" class="form-control" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-secondary light btn-sm">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{ $dt->id }}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Areyou sure you want to delete {{ $dt->id }} ?
                                                        </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary light btn-sm"
                                                            data-bs-dismiss="modal">Close</button>
                    
                                                        <form action="{{ route('accounts.destroy', $dt->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
