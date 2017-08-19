@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Daftar</div>
                    <div class="panel-body">
                        <a href="{{ url('/personaldata') }}" class="btn btn-success btn-sm" title="Add New Daftar">
                            <i class="fa fa-plus" aria-hidden="true"></i> Lihat data
                        </a>

                       </div>
                       </div>
                    </div>
                </div>
@endsection
