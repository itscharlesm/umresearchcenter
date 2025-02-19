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
                <div class="card-body overflow-auto">
                    <table id="studentTable" class="table table-hover table-striped table-sm responsive">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle">Name</th>
                                <th style="text-align: center; vertical-align: middle">Number</th>
                                <th style="text-align: center; vertical-align: middle">Email</th>
                                <th style="text-align: center; vertical-align: middle">Message</th>
                                <th style="text-align: center; vertical-align: middle; width: 100px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $con)
                                <tr style="text-align: justify; vertical-align: middle;">
                                    <td style="vertical-align: middle;">{{ $con->con_name }}</td>
                                    <td style="vertical-align: middle;">{{ $con->con_number }}</td>
                                    <td style="vertical-align: middle;">{{ $con->con_email }}</td>
                                    <td style="vertical-align: middle;">{{ $con->con_message }}</td>
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal" data-target="#updateDescriptionModal-">
                                            <span class="fa fa-edit"></span> Update
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection