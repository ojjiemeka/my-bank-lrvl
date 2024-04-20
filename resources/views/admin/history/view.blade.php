@extends('layouts.main')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add History</h4>
                    </div>

                    <form action="{{ route('history.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Date</label>
                                        <input type="date" name="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Description</label>
                                        <input type="text" name="desc" class="form-control" placeholder="">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Transaction Type</label>
                                        <select class="form-control" aria-label="Default select example" name="type">
                                            <option selected>Open this select menu</option>
                                            <option value="ACH Employee Payment">ACH Payment</option>
                                            <option value="Deposit">Deposit</option>
                                            <option value="Returned deposit">Returned deposit</option>
                                            <option value="Tax Payment">Tax Payment</option>
                                            <option value="ACH Credit">ACH Credit</option>
                                            <option value="ATM Transaction">ATM Transaction</option>
                                            <option value="Outgoing Wire Transfer ">Outgoing Wire Transfer </option>
                                            <option value="ACH Vendor Payment">ACH Vendor Payment</option>
                                            <option value="Check">Check</option>
                                          </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Amount</label>
                                        <input type="number" class="form-control" pattern="[0-9]*" inputmode="numeric" name="amount" maxlength="10" placeholder="Enter 10 amount" title="Please enter exactly amount">
                                    </div>
                            
                                </div>

                            </div>
                        </div>
                        <div class="mb-5 text-center">
                            <button type="submit" class="btn btn-default">Create</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">History</h4>
                        <a href="{{route('accounts.create')}}" class="btn btn-primary shadow btn-xs sharp me-4"><i class="fas fa-pencil-alt"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 100%">
                                <thead>
                                    <tr>
                                        
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Transaction Type</th>
                                        <th>Amount</th>
                                        <th>Ref</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($history as $dt)
                                        <tr>
                                            <td>{{$dt->date}}</td>
                                            <td>{{$dt->desc}}</td>
                                            <td>{{$dt->type}}</td>
                                            <td>{{$dt->amount}}</td>
                                            <td>{{$dt->ref}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <a data-bs-toggle="modal" data-bs-target="#editModal{{$dt->id}}"
                                                        class="btn btn-primary shadow btn-xs sharp me-4"><i
                                                            class="fas fa-pencil-alt"></i></a>
                                                            <a class="btn btn-danger shadow btn-xs sharp"  data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal{{$dt->id}}"><i
                                                                    class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="editModal{{$dt->id}}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Edit</h5>
                                                        <i class='bx bx-sm bx-x' data-bs-dismiss="modal" style="cursor: pointer"></i>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('history.update', $dt->id) }}" method="POST" enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="card-body">
                                                                <div class="basic-form">
                                                                    <div class="row">
                                    
                                                                        <div class="mb-3 col-md-6">
                                                                            <label class="form-label">Date</label>
                                                                            <input type="date" value="{{$dt->date}}" name="date" class="form-control" placeholder="">
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label class="form-label">Description</label>
                                                                            <input type="text" name="desc"value="{{$dt->desc}}" class="form-control" placeholder="">
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label class="form-label">Transaction Type</label>
                                                                            <select class="form-control" aria-label="Default select example" name="type">
                                                                                <option selected>{{$dt->type}}</option>
                                                                                <option value="ACH Employee Payment">ACH Payment</option>
                                                                                <option value="Deposit">Deposit</option>
                                                                                <option value="Returned deposit">Returned deposit</option>
                                                                                <option value="Tax Payment">Tax Payment</option>
                                                                                <option value="ACH Credit">ACH Credit</option>
                                                                                <option value="ATM Transaction">ATM Transaction</option>
                                                                                <option value="Outgoing Wire Transfer ">Outgoing Wire Transfer </option>
                                                                                <option value="ACH Vendor Payment">ACH Vendor Payment</option>
                                                                                <option value="Check">Check</option>
                                                                              </select>
                                                                        </div>
                                                                        <div class="mb-3 col-md-6">
                                                                            <label class="form-label">Amount</label>
                                                                            <input type="number" value="{{$dt->amount}}"  class="form-control" pattern="[0-9]*" inputmode="numeric" name="amount" maxlength="10" placeholder="Enter 10 amount" title="Please enter exactly amount">
                                                                        </div>
                                                                
                                                                    </div>
                                    
                                                                </div>
                                                            </div>
                                                            <div class="mb-5 text-center">
                                                                <button type="submit" class="btn btn-default">Create</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <!-- Delete Modal -->
                                        <div class="modal fade" id="deleteModal{{$dt->id}}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Delete</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Areyou sure you want to delete  ?
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

    <script>
        document.getElementById('phone_number').addEventListener('input', function(event) {
            this.value = this.value.replace(/[^\d+]/g, '');
        });
    </script>
@endsection
