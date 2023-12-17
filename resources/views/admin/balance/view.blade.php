@extends('layouts.main')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="card-title">Balance</h4>
                        <span>
                            <a type="button" class="me-4" data-bs-toggle="modal" data-bs-target="#newBalance"
                                title="Creates">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            @if ($data->isEmpty())
                                        <div class="text-center mb-3">
                                            <h5>Table is empty</h5>
                                        </div>
                                    @else
                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Acc Name</th>
                                                <th scope="col">Wallet balance</th>
                                                <th scope="col">Main balance</th>
                                                <th scope="col">Card 1</th>
                                                <th scope="col">Card 2</th>
                                                <th scope="col">Card 3</th>
                                                <th scope="col">Card 4</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $dt)
                                                <tr>
                                                    <td>{{ $dt->fname }} {{$dt->lname}}</td>
                                                    <td>{{ $dt->wallet_balance }}</td>
                                                    <td>{{ $dt->main_balance }}</td>
                                                    <td>{{ $dt->card_1 }}</td>
                                                    <td>{{ $dt->card_2 }}</td>
                                                    <td>{{ $dt->card_3 }}</td>
                                                    <td>{{ $dt->card_4 }}</td>
                                                    <td>
                                                        <div class="d-flex align-items-center"><i
                                                                class="fa fa-circle text-success me-1"></i> Active</div>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <a type="button" class="me-4" data-bs-toggle="modal"
                                                                data-bs-target="#{{ $dt->id }}"
                                                                title="Edit">
                                                                <i class="fas fa-pencil-alt"></i>
                                                            </a>
        
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-danger  mb-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#deleteModal{{ $dt->id }}">Delete</button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="deleteModal{{ $dt->id }}">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Delete</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal">
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Areyou sure you want to delete {{ $dt->id }} ?
                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                class="btn btn-secondary light btn-sm"
                                                                                data-bs-dismiss="modal">Close</button>
        
                                                                            <form
                                                                                action="{{ route('restrictions.destroy', $dt->id) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger btn-sm">
                                                                                    Delete
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </td>
                                                </tr>
        
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalCenter{{ $dt->id }}">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Modal title</h5>
                                                                <span>
                                                                    {{ $dt->id }}
                                                                </span>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('restrictions.update', $dt->id) }}"
                                                                method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="basic-form">
        
                                                                        <div class="row">
                                                                            <div class="mb-3 col-md-12">
                                                                                <label class="form-label">dt Name</label>
                                                                                <input type="text" name="name"
                                                                                    value="{{ $dt->name }}" class="form-control"
                                                                                    placeholder="">
                                                                            </div>
                                                                            <div class="mb-3 col-md-12">
                                                                                <label class="form-label">Description</label>
                                                                                <input type="text" name="desc"
                                                                                    value="{{ $dt->desc }}"
                                                                                    class="form-control" placeholder="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-danger light btn-sm"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary btn-sm">Save
                                                                            changes</button>
                                                                    </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif

                            <!-- Modal -->
                            <div class="modal fade" id="newBalance">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <form action="{{ route('balances.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="basic-form">

                                                    <div class="row">
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Select Client</label>
                                                            <select multiple class="default-select form-control wide mt-3" name="acc_id">
                                                                @foreach ($accounts as $acc)                                                 
                                                                    <option  value="{{$acc->id}}">{{$acc->fname}} {{$acc->lname}}</option>
                                                                @endforeach
                                                                <option value="hjv">vgvhj</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Wallet Balance</label>
                                                            <input type="text" name="wallet_balance" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Main Balance</label>
                                                            <input type="text" name="main_balance" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Card 1</label>
                                                            <input type="text" name="card_1" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Card 2</label>
                                                            <input type="text" name="card_2" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Card 3</label>
                                                            <input type="text" name="card_3" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Card 4</label>
                                                            <input type="text" name="card_4" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light btn-sm"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary btn-sm">Save
                                                        changes</button>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
