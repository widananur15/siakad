@extends('...layout.default')
@section('head')

<title>Add Teacher</title>

@stop


@section('content')
<div class="row">
    <div class="col-lg-7">
        <h1 class="page-header">Add Teacherl</h1>
        <div class="panel panel-default">
            <div class="panel-heading">

<a href="/mapel"><p class="fa fa-arrow-left"> BACK </p></a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">


                <form action="guru/add/new" method="post" class="form-group" >

                <br>
                <h3 class=""> Add Teacher</h3>
                {{ Form::label("","Teacher Name") }}
                <input type="text" name="nama_guru" class="form-control" placeholder="Nama Guru" >
                {{ Form::label("","User Id") }}
                <input type="text" name="user_id" class="form-control" placeholder="User Id" >
                {{ Form::label("","NIP") }}
                <input type="text" name="nip" class="form-control" placeholder="NIP" >
                {{ Form::label("","Telphone Number") }}
                <input type="text" name="no_telp" class="form-control" placeholder="No telpon" >
                {{ Form::label("","Email") }}
                <input type="text" name="email" class="form-control" placeholder="Email" >
                {{ Form::label("","Jabatan Id") }}
                {{Form::select('jabatan_id',$datajabatan,Input::old('jabatan_id'),['class'=>'form-control'])}}
                {{ Form::label("","Active") }}
                {{ Form::select('active',$active,Input::get('active'),['class'=>'form-control'] ) }}
                {{ Form::label("","Mapel ID") }}
                {{ Form::select('mapel_id',$data,Input::old('mapel_id'),['class' => 'form-control']) }}





                <br>
                <br>
                <br>
                <br>
                <div class="col-sm-6">
               <input type="reset" value="Back" class="btn btn-warning">
                <input type="submit" value="Add" class="btn btn-primary">
                   </div>

                </form>




            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>

@stop