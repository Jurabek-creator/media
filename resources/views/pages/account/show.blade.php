@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('cruds.account.account')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('global.home')</a></li>
                        <li class="breadcrumb-item active">@lang('cruds.account.account')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">@lang('cruds.account.account')</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Data table -->
                        <table id="" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>@lang('cruds.account.number')</th>
                                <td>{{ $account->number }}</td>
                            </tr>
                            <tr>
                                <th>@lang('cruds.account.inn')</th>
                                <td>{{ $account->inn }}</td>
                            </tr>
                            <tr>
                                <th>@lang('cruds.account.name')</th>
                                <td>{{ $account->name }}</td>
                            </tr>
                            <tr>
                                <th>@lang('cruds.account.filial')</th>
                                <td>{{ $account->filial }}</td>
                            </tr>
                            <tr>
                                <th>@lang('cruds.account.card')</th>
                                <td>{{ $account->card->number }}</td>
                            </tr>
                            <tr>
                                <th>@lang('cruds.account.percentage')</th>
                                <td>{{ $account->number }}</td>
                            </tr>
                            <tr class="text-center">
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
