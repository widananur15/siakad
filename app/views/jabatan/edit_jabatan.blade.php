@extends('...layout.default')
@section('head')

<title>Management Student</title>

@stop


@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Jabatan</h1>
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">


                {{Form::model($jabatan,array('route' => array('jabatan.update',$jabatan->jabatan_id), 'method' => 'put','class'=>'form-horizontal'))}}

                <br>
                <h3 class=""> Edit</h3>
                {{ Form::label("","jabatan ID") }}
                <input disabled type="text" name="jabatanl_id" class="form-control" placeholder="ID jabatan" value="{{$edit->jabatan_id}}">
                {{ Form::label("","jabatan Name") }}
                <input type="text" name="nama_jabatan" class="form-control" placeholder="Nama jabatan" value="{{$edit->nama_jabatan}}">
                {{ Form::label("","Active") }}

                {{Form::select('active',$active,Input::old('active'),['class'=>'form-control','value'=>'$edit->active']) }}





                <br>
                <br>
                <br>
                <br>
                <input type="submit" value="Edit" class="btn btn-primary">
                </form>



            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>

@stop