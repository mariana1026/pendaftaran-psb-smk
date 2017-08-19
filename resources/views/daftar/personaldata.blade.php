@extends('layouts.app')

@section('content')
<div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Daftar</div>
                    <div class="panel-body">
                    <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>ID</th><th>Nama</th><th>Alamat</th><th>Smpn</th><th>Nilai Un</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($daftar as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td><td>{{ $item->alamat }}</td><td>{{ $item->smpn }}</td><td>{{ $item->nilai_un }}</td>
                                        <td>
                                            <a href="{{ url('/daftar/' . $item->id) }}" title="View Daftar"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/daftar/' . $item->id . '/edit') }}" title="Edit Daftar"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/daftar', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-xs',
                                                        'title' => 'Delete Daftar',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

@endsection
