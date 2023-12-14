@extends('layouts.main')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex">
                        <h4 class="card-title">Rules</h4>
                        <span>
                            <a type="button" class="me-4" data-bs-toggle="modal" data-bs-target="#createNewRule"
                                title="Creates">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        {{-- <th scope="col">Acc No.</th> --}}
                                        {{-- <th scope="col">Balance</th> --}}
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rules as $rule)
                                        <tr>
                                            <td>{{ $rule->name }}</td>
                                            <td>
                                                <div class="d-flex align-items-center"><i
                                                        class="fa fa-circle text-success me-1"></i> Active</div>
                                            </td>
                                            <td>
                                                {{ $rule->desc }}
                                            </td>
                                            <td>
                                                {{ $rule->id }}
                                            </td>
                                            <td>
                                                <span>
                                                    <a type="button" class="me-4" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalCenter{{ $rule->id }}"
                                                        title="Edit">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger  mb-2"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $rule->id }}">Delete</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteModal{{ $rule->id }}">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Delete</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Areyou sure you want to delete {{ $rule->name }} ?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-secondary light btn-sm"
                                                                        data-bs-dismiss="modal">Close</button>

                                                                    <form
                                                                        action="{{ route('restrictions.destroy', $rule->id) }}"
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
                                        <div class="modal fade" id="exampleModalCenter{{ $rule->id }}">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modal title</h5>
                                                        <span>
                                                            {{ $rule->id }}
                                                        </span>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('restrictions.update', $rule->id) }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="basic-form">

                                                                <div class="row">
                                                                    <div class="mb-3 col-md-12">
                                                                        <label class="form-label">Rule Name</label>
                                                                        <input type="text" name="name"
                                                                            value="{{ $rule->name }}"
                                                                            class="form-control" placeholder="">
                                                                    </div>
                                                                    <div class="mb-3 col-md-12">
                                                                        <label class="form-label">Description</label>
                                                                        <input type="text" name="desc"
                                                                            value="{{ $rule->desc }}"
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


                            <!-- Modal -->
                            <div class="modal fade" id="createNewRule">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modal title</h5>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                                            </button>
                                        </div>
                                        <form action="{{ route('restrictions.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <div class="basic-form">

                                                    <div class="row">
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Rule Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                placeholder="">
                                                        </div>
                                                        <div class="mb-3 col-md-12">
                                                            <label class="form-label">Description</label>
                                                            <input type="text" name="desc" class="form-control"
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
