@extends('layout/default')
@section('head')

<title>Management Student</title>

@stop


@section('content')
<div class="row">
    <div class="col-lg-7">
        <h1 class="page-header">Edit Mapel</h1>
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">


                {{Form::model($mapel,array('route' => array('mapel.update',$mapel->mapel_id), 'method' => 'put','class'=>'form-horizontal'))}}

                <br>
                <h3 class=""> Edit</h3>
                {{ Form::label("","Mapel ID") }}
                <input disabled type="text" name="mapel_id" class="form-control" placeholder="ID" value="{{$edit->mapel_id}}">
                {{ Form::label("","Mapel Name") }}
                <input type="text" name="nama_mapel" class="form-control" placeholder="Nama Mapel" value="{{$edit->nama_mapel}}">
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