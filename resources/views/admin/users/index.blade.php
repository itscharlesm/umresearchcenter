@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Manage Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <section class="content">
        <div class="container-fluid">
            @include('layouts.partials.alerts')
            <div class="card">
                <div class="card-header bg-warning">
                    List of users
                </div>
                <div class="card-body overflow-auto">
                    <table id="studentTable" class="table table-hover table-striped table-sm responsive">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle">No</th>
                                <th style="text-align: center; vertical-align: middle">Name</th>
                                <th style="text-align: center; vertical-align: middle">Email</th>
                                <th style="text-align: center; vertical-align: middle">Role</th>
                                <th style="text-align: center; vertical-align: middle; width: 170px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $index => $user)
                                <tr style="text-align: center; vertical-align: middle;">
                                    <td style="vertical-align: middle;">{{ $index + 1 }}</td>
                                    <td style="vertical-align: middle;">{{ ucwords(strtolower($user->usr_last_name)) }},
                                        {{ ucwords(strtolower($user->usr_first_name)) }}
                                        {{ ucwords(strtolower($user->usr_middle_name)) }}</td>
                                    <td style="vertical-align: middle;">{{ $user->usr_email }}</td>
                                    <td style="vertical-align: middle;">{{ $user->role_name }}</td>
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal" data-target="#updateRoleModal-{{ $user->usr_id }}">
                                            <span class="fa fa-edit"></span> Role
                                        </a>
                                        <a class="btn btn-danger btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal" data-target="#forgotPasswordModal-{{ $user->usr_id }}">
                                            <span class="fa fa-lock"></span> Password
                                        </a>
                                    </td>
                                    <div class="modal fade" id="updateRoleModal-{{ $user->usr_id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="updateRoleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="updateRoleModalLabel">Update Role</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ url('admin/users/update/role/' . $user->usr_id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="usr_full_name">Name:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $user->usr_last_name }}, {{ $user->usr_first_name }}{{ $user->usr_middle_name }}"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="usr_type">Role:</label>
                                                                    <select class="form-control" name="usr_type">
                                                                        @foreach ($roles as $role)
                                                                            @if ($role->usr_type != 1)
                                                                                <option value="{{ $role->usr_type }}"
                                                                                    {{ $role->usr_type == $user->usr_type ? 'selected' : '' }}>
                                                                                    {{ $role->role_name }}
                                                                                </option>
                                                                            @endif
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-danger">Update Role</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="forgotPasswordModal-{{ $user->usr_id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="forgotPasswordModalLabel">Admin Password
                                                        Update</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ url('admin/users/update/password/' . $user->usr_id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="usr_full_name">User Name:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $user->usr_last_name }}, {{ $user->usr_first_name }}{{ $user->usr_middle_name }}"
                                                                        readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="usr_email">Email:</label>
                                                                    <input type="text" class="form-control"
                                                                        value="{{ $user->usr_email }}" readonly>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-danger">Reset
                                                            Password</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-2 align-items-center">
                <div class="col-md-6 mb-2 mb-md-0">
                    <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)" data-toggle="modal"
                        data-target="#addUserModal">
                        <span class="fa fa-plus"></span> Add User
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Register Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="{{ url('admin/register-user') }}" method="POST" class="row">
                            @csrf
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="usr_first_name"
                                    name="usr_first_name" placeholder="First Name">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="usr_middle_name"
                                    name="usr_middle_name" placeholder="Middle Name">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="usr_last_name" name="usr_last_name"
                                    placeholder="Last Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="usr_email" name="usr_email"
                                    placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="usr_password" name="usr_password"
                                    placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-danger">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection