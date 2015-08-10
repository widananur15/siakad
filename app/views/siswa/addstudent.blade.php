@extends('layout/default')
@section('head')
    
        <title>Management Student</title>

@stop


@section('content')
            <div class="row">
                            <div class="col-lg-12">
                            <h1 class="page-header">Add Student</h1>

</div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Default Panel
                        </div>
                        <div class="panel-body">

                          <div class="col-lg-6">
                           <form action = "{{ URL::to('student/add') }}" method="post" >
                                        <div class="form-group">
                                            <label>Nis Student :</label>
                                            <input class="form-control" name="nis" type="text" placeholder="Example:101237">
                                        </div>

                                        <div class="form-group">
                                            <label>Nisn Student :</label>
                                            <input type="text" name="nisn" class="form-control" placeholder="Example:1002244987">
                                        </div>

                                        <div class="form-group">
                                            <label>Name Student</label>
                                            <input class="form-control" placeholder="Example:Jhon Smith" name="nama_student">
                                        </div>

                                        <div class="form-group">
                                            <labe>Tempat Lahir</labe>
                                            <input type="text" name="tmp_lahir" class="form-control" placeholder="Example:Semarang">
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal Lahir :</label>
                                            <input type="text" placeholder="Eample: 12/03/1997" name="tmp_lhr" class="form-control">
                                             <p class="text-primary" title="Date Format" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom"><small>Format Date (DD/MM/YYYY)</small></p>

                                        </div>

                                      </div>

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                             <label>Competance Student :</label>
                                             <select name="jurusan_id" class="form-control">
                                                <option selected value="0">-- Select Competance Student --</option>
                                                @foreach($get_jurusan as $key)
                                                <option value="{{ $key->jurusan_id }}">{{ $key->nama_jurusan }} | ( {{ $key->sub_jurusan }} )</option>
                                                @endforeach
                                                </select>
                                                </div>

                                           <div class="form-group">
                                               <label>Religional :</label>
                                             <select name="agama" class="form-control">
                                               <option value="0" selected>-- Select Religional --</option>
                                               <option value="islam">I - Isalm</option>
                                               <option value="kristen">K - Kristen Protestan</option>
                                               <option value="budha">B - Budha</option>
                                               <option value="khatolik">K - Khatolik</option>
                                               <option value="konghucu">K - Konghucu</option>
                                             </select>
                                            </div>

                                        <div class="form-group">
                                            <label>Gender :</label>
                                                <select name="jns_klmn" class="form-control">
                                                    <option value="0" selected>-- Select Gender --</option>
                                                    <option value="'L">L - Laki-Laki</option>
                                                    <option value="P">P - Perempuan</option>
                                                </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat Sekarang :</label>
                                            <input type="text" name="almt_skrng" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat Asal :</label>
                                            <input type="text" name="almt_asal" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <input type="submit" value="Save" class="btn btn-primary">
                                            <input type="submit" value="Reset" class="btn btn-danger">
                                        </div>


                           </form>
                            </div>

                    </div>
                </div>

</div>
</div>
@stop