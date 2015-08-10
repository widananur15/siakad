@extends('layout/default')
@section('head')
    
        <title>Management Student</title>

@stop


@section('content')
<div class="row">
                <div class="col-lg-12">
                <h1 class="page-header">Management Student</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <button class="btn btn-primary" onclick="window.location.href='{{ URL::to('/add/student')  }}' "> Add Student </button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1">#Action</th>
                                            <th class="col-md-1">Nis</th>
                                            <th class="col-md-3">Name Student</th>
                                            <th class="col-md-1">Regional</th>
                                            <th class="col-md-3">Competance</th>
                                            <th class="col-md-1">Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                           @foreach($lists as $key=>$s)

                                       <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-gray btn-sm dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">
                                                    &nbsp; One &nbsp;
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>{{ $s->nis }}</td>
                                        <td>{{ ucwords($s->nama_siswa) }}</td>
                                        <td>{{ $s->agama }}</td>
                                        <td>{{ $s->nama_jurusan }} ({{ $s->sub_jurusan }})</td>
                                        <td><center>@if($s->jns_klmn !='L')  <i class="fa fa-female"></i> @else  <i class="fa fa-male"></i>  @endif</center></td>
                                         </tr>
                                           @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>

@stop