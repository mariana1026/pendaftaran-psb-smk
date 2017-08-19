@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Manage Permission</div>

                <div class="panel-body">

                    @if(checkPermission(['user','admin','superadmin']))
                    <a href="{{ url('permissions-all-users') }}"><button>Access All Users</button></a>
                    @endif

                    @if(checkPermission(['admin','superadmin']))
                    <a href="{{ url('permissions-admin-superadmin') }}"><button>Access Admin and Superadmin</button></a>
                    @endif

                    @if(checkPermission(['superadmin']))
                    <a href="{{ url('permissions-superadmin') }}"><button>Access Only Superadmin</button></a>
                    @endif

                </div>
                 <div class="panel-body">
                        <a href="{{ url('/daftar/create') }}" class="btn btn-success btn-sm" title="Add New Daftar">
                            <i class="fa fa-plus" aria-hidden="true"></i> Daftar psb
                        </a>
                        <a href="{{ url('/personaldata') }}" class="btn btn-success btn-sm" title="Add New Daftar">
                            <i class="fa fa-plus" aria-hidden="true"></i> Lihat data anda
                        </a>
                         <a href="{{ url('/dataperingkat') }}" class="btn btn-success btn-sm" title="Add New Daftar">
                            <i class="fa fa-plus" aria-hidden="true"></i> Lihat peringkat
                        </a>
                       </div>
               </div>
                 
    </div>
</div>
@endsection

