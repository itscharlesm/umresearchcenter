@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Messages</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        <li class="breadcrumb-item active">Messages</li>
                        </li>
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
                                <th style="text-align: center; vertical-align: middle">Date</th>
                                <th style="text-align: center; vertical-align: middle">Name</th>
                                <th style="text-align: center; vertical-align: middle">Number</th>
                                <th style="text-align: center; vertical-align: middle">Email</th>
                                <th style="text-align: center; vertical-align: middle">Status</th>
                                <th style="text-align: center; vertical-align: middle; width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $con)
                                <tr style="text-align: center; vertical-align: middle;">
                                    <td style="vertical-align: middle;">
                                        {{ \Carbon\Carbon::parse($con->con_date_created)->format('F j, Y | g:i A') }}
                                    </td>
                                    <td style="vertical-align: middle;">{{ $con->con_name }}</td>
                                    <td style="vertical-align: middle;">{{ $con->con_number }}</td>
                                    <td style="vertical-align: middle;">{{ $con->con_email }}</td>
                                    <td style="vertical-align: middle;">{{ $con->con_status }}</td>
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-danger btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal"
                                            data-target="#{{ $con->con_status == 'Completed' ? 'completedConcernModal' : 'viewConcernModal' }}-{{ $con->con_id }}">
                                            <span class="fa fa-eye"></span> View
                                        </a>
                                    </td>
                                    <div class="modal fade" id="viewConcernModal-{{ $con->con_id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="viewConcernModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewConcernModalLabel">Contact Information
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="{{ url('admin/messages/concern/update/' . $con->con_id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="con_name">Name:</label>
                                                                    <p>{{ $con->con_name }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="con_date_created">Date Submitted:</label>
                                                                    <p>{{ \Carbon\Carbon::parse($con->con_date_created)->format('F j, Y | g:i A') }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="con_number">Contact Number:</label>
                                                                    <p>{{ $con->con_number }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="con_email">Email:</label>
                                                                    <p>{{ $con->con_email }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="con_message">Message:</label>
                                                                    <p class="text-justify">{{ $con->con_message }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="con_status">Status:</label>
                                                                    <select class="form-control" name="con_status">
                                                                        <option value="Pending"
                                                                            {{ $con->con_status == 'Pending' ? 'selected' : '' }}>
                                                                            Pending</option>
                                                                        <option value="Ongoing"
                                                                            {{ $con->con_status == 'Ongoing' ? 'selected' : '' }}>
                                                                            Ongoing</option>
                                                                        <option value="Completed"
                                                                            {{ $con->con_status == 'Completed' ? 'selected' : '' }}>
                                                                            Completed</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal"><span class="fa fa-close"></span>
                                                            Close</button>
                                                        <button type="submit" class="btn btn-danger"><span
                                                                class="fa fa-save"></span> Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="completedConcernModal-{{ $con->con_id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="completedConcernModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-md" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="completedConcernModalLabel">Contact
                                                        Information [{{ $con->con_status }}]
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="con_name">Name:</label>
                                                                <p>{{ $con->con_name }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="con_date_created">Date Submitted:</label>
                                                                <p>{{ \Carbon\Carbon::parse($con->con_date_created)->format('F j, Y | g:i A') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="con_number">Contact Number:</label>
                                                                <p>{{ $con->con_number }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="con_email">Email:</label>
                                                                <p>{{ $con->con_email }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="con_message">Message:</label>
                                                                <p class="text-justify">{{ $con->con_message }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="con_processed_by">Processed By:</label>
                                                                <p class="text-justify">{{ $con->usr_last_name }},
                                                                    {{ $con->usr_first_name }} {{ $con->usr_middle_name }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="con_modified_by">Date Processed:</label>
                                                                <p class="text-justify">
                                                                    {{ \Carbon\Carbon::parse($con->con_date_created)->format('F j, Y | g:i A') }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal"><span class="fa fa-close"></span>
                                                        Close</button>
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
        </div>
    </section>
@endsection