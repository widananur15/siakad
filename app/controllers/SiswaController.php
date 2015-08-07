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
		return View::make('siswa.addstudent');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
