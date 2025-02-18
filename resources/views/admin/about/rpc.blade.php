@extends('admin.themes.layouts.main')
@section('content')
    {{-- Content Header --}}
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">About RPC</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ action('App\Http\Controllers\AdminController@home') }}">Home</a>
                        <li class="breadcrumb-item active">About RPC</li>
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
                    <table class="table table-hover table-striped table-sm responsive">
                        <thead>
                            <tr>
                                <th style="text-align: center; vertical-align: middle">Description</th>
                                <th style="text-align: center; vertical-align: middle; width: 170px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rpc_description as $rpc)
                                <tr style="text-align: center; vertical-align: middle;">
                                    <td style="vertical-align: middle;">{!! $rpc->rpc_description !!}</td>
                                    <td style="vertical-align: middle;">
                                        <a class="btn btn-warning btn-sm activate-btn" href="javascript:void(0)"
                                            data-toggle="modal" data-target="#updateDescriptionModal-{{ $rpc->rpc_id }}">
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