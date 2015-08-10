<?php

class SiswaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $lists  = DB::table('t_siswa as a')
                    ->join('t_jurusan as b','a.jurusan_id','=','b.jurusan_id')
                    ->select('a.nisn','a.nama_siswa','a.email','a.tmp_lahir','a.tgl_lhr','a.nis','b.nama_jurusan','b.sub_jurusan','a.jns_klmn','a.active','a.agama')
                    ->where('a.active','=','Y')
                    ->get();


return View::make('siswa.listsstudent')
           ->with('lists' , $lists);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        $get_jurusan  = DB::table('t_jurusan')
                        ->select('jurusan_id','nama_jurusan','sub_jurusan')
                        ->orderBy('jurusan_id','asc')
                        ->where('active','=','Y')
                        ->get();

		return View::make('siswa.addstudent')
                    ->with('get_jurusan' , $get_jurusan);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nis = Input::get('nis');
        $nisn = Input::get('nisn');
        $nama_siswa = Input::get('nama_siswa');
        $tmp_lahir = Input::get('tmp_lahir');
        $tgl_lhr = Input::get('tgl_lhr');
        $almt_asal = Input::get('almt_asal');
        $almt_skrng = Input::get('almt_skrng');
        $agama = Input::get('agama');
        $jns_klmn = Input::get('jns_klmn');
        $jurusan_id = Input::get('jurusan_id');

        //save to table siswa
        $save = new Siswa();
        $save->nis = $nis;
        $save->save();

        return Redirect::to('/add/student');


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
