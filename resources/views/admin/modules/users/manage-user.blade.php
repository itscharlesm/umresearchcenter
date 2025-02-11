@extends('admin.layouts.themes.main')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom d-flex justify-content-between">
                    <h2>Users</h2>
                    <a target="_blank" class="btn btn-outline-primary btn-sm text-uppercase" href="#registerUser"
                        data-toggle="modal" data-target="#registerUser">
                        <i class=" mdi mdi-account mr-1"></i> Add User
                    </a>
                </div>

                <div class="card-body">
                    <div class="basic-data-table">
                        <table id="basic-data-table" class="table nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>User Modules Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td> {{ $user->usr_first_name }}</td>
                                        <td>{{ $user->usr_last_name }}</td>
                                        <td>{{ $user->usr_email }}</td>
                                        <td>Edinburgh</td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Register User Modal -->
    <div class="modal fade" id="registerUser" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register User</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="{{ route('admin.user-manage.create') }}" class="row" method="POST">
                            {{ csrf_field() }}
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="firstName" name="firstName"
                                    placeholder="First Name">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="lastName" name="lastName"
                                    placeholder="Last Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="signupEmail" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="signupPassword" name="password"
                                    placeholder="Password">
                            </div>

                            <!-- Roles Section -->
                            <div class="col-12 mb-3">
                                <h5>Assign Roles:</h5>
                                <div class="row my-3">
                                    @php
                                        // Divide the modules into 3 chunks
                                        $chunks = $modules->chunk(ceil($modules->count() / 3));
                                    @endphp

                                    @foreach ($chunks as $chunk)
                                        <div class="col-md-4 mb-3">
                                            @foreach ($chunk as $module)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="roles[]"
                                                        id="role{{ $module->mod_id }}" value="{{ $module->mod_id }}">
                                                    <label class="form-check-label" for="role{{ $module->mod_id }}">
                                                        {{ ucfirst(preg_replace('/^mod[\s_]/i', '', str_replace('_', ' ', $module->mod_name))) }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
