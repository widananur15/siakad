@extends('layout/default')
@section('head')

<title>Management Student</title>

@stop


@section('content')
<div class="row">
    <div class="col-lg-7">
        <h1 class="page-header">Edit Jabatan</h1>
        <div class="panel panel-default">
            <div class="panel-heading">
sadsa
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">


  <form action="/jabatan/{{$edit->jabatan_id}}/update" method="post">

                <h3 class=""> Edit</h3>
                {{ Form::label("","jabatan ID") }}
                <input disabled type="text" name="jabatanl_id" class="form-control" placeholder="ID jabatan" value="{{$edit->jabatan_id}}">
                {{ Form::label("","jabatan Name") }}
                <input type="text" name="nama_jabatan" class="form-control" placeholder="Nama jabatan" value="{{$edit->nama_jabatan}}">
                {{ Form::label("","Active") }}

                <select name="active" class="form-control">

                    @if($edit->active == 'Y')
                        <option value="Y">Y</option>
                        <option value="N">N</option>
                    @else
                        <option value="N">N</option>
                        <option value="Y">Y</option>
                    @endif
                </select>
                <input type="submit" value="Edit" class="btn btn-primary">
                </form>


            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>





@stop