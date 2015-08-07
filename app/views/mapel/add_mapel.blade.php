@extends('...layout.default')
@section('head')

<title>Add Mapel</title>

@stop


@section('content')
<div class="row">
    <div class="col-lg-7">
        <h1 class="page-header">Add Mapel</h1>
        <div class="panel panel-default">
            <div class="panel-heading">

<a href="/mapel"><p class="fa fa-arrow-left"> BACK </p></a>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">


                <form action="mapel/add/new" method="post" class="form-group" >

                <br>
                <h3 class=""> Add Mapel</h3>
                {{ Form::label("","Mapel Name") }}
                <input type="text" name="nama_mapel" class="form-control" placeholder="Nama Mapel" >

                {{ Form::label("","Active") }}

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