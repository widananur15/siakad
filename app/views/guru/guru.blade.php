@extends('...layout.default')
@section('head')

        <title>Management Teacher</title>

@stop


@section('content')
<div class="row">
                <div class="col-lg-7">
                <h1 class="page-header">Management Teacher</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <button class="btn btn-primary" onclick="window.location.href='{{ URL::to('/add/guru') }}' "> Add Teacher</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1">#Action</th>
                                            <th class="col-md-1">Name</th>
                                            <th class="col-md-3">Telphone Number</th>
                                            <th class="col-md-3">Email</th>
                                            <th class="col-md-3">Active</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($guru as $value)

                                       <tr>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-gray btn-sm dropdown-toggle" data-toggle="dropdown" data-original-title="" title="">
                                                    &nbsp; Action &nbsp;
                                                    <i class="fa fa-caret-down"></i>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a href="mapel/{{$value->guru_id}}/edit">Edit</a></li>
                                                    <li><a href="#">Delete</a></li>

                                                </ul>
                                            </div>
                                        </td>
                                        <td>{{$value->nama_guru}}</td>
                                        <td>{{$value->no_telp}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->active}}</td>


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