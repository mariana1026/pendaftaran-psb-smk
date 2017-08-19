@extends('layouts.app')

@section('content')

<div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Daftar Peringkat</div>
                    <div class="panel-body">
                    <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>No Rank</th><th>Nama</th><th>Alamat</th><th>Smpn</th><th>Nilai Un</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=0; ?>
                                @foreach($daftar as $no => $item)
                                   <?php $no++; 
                                   ?>
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{ $item->nama }}</td><td>{{ $item->alamat }}</td><td>{{ $item->smpn }}</td><td>{{ $item->nilai_un }}</td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

@endsection