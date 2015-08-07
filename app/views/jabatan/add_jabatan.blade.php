@extends('...layout.default')
@section('head')

<title>Add Jabatan</title>

@stop


@section('content')
<div class="row">
    <div class="col-lg-7">
        <h1 class="page-header">Add Jabatan</h1>
        <div class="panel panel-default">
            <div class="panel-heading">

<a href="/jabatan"><p class="fa fa-arrow-left"> BACK </p></a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">


                <form action="/new" method="post" class="form-group" >

                <br>
                <h3 class=""> Add Jabatan</h3>
                {{ Form::label("","Jabatan Name") }} <font color='red'>{{$errors->first('nama_jabatan')}}</font>
                <input type="text" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" >

                {{ Form::label("","Active") }} <font color='red'>{{$errors->first('active')}}</font>

                {{ Form::select('active',$active,Input::get('active'),['class'=>'form-control'] ) }}




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