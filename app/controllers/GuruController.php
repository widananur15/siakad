<?php

class GuruController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		    $guru = DB::table('t_guru')->orderby('guru_id','asc')->get();
        return View::make('guru.guru')
                ->with('guru',$guru);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        $mapel = DB::table('t_mapel')->get();

        $data = [];
        foreach ($mapel as $key){

            $data[$key->mapel_id] = $key->nama_mapel;
        }

        $jabatan = DB::table('t_jabatan')->get();
        $datajabatan = [];
        foreach($jabatan as $key) {
            $datajabatan[$key->jabatan_id] = $key->nama_jabatan;
        }

        $active = array(''=>'--select--',
                        'Y' => 'Y',
                        'N' => 'N');

        return View::make('guru.add_guru')
                ->with('datajabatan',$datajabatan)
                ->with('data' , $data)
                ->with('active',$active);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nama_guru = Input::get('nama_guru');
        $user_id = Input::get('user_id');
        $nip = Input::get('nip');
        $no_telp = Input::get('no_telp');
        $email = Input::get('email');
        $jabatan_id = Input::get('jabatan_id');
        $active = Input::get('active');
        $mapel_id = Input::get('mapel_id');

        $user_id_guru = DB::tale('t_user')
                        ->select('user_id')
                        ->where('nip','=',$nip)
            ->first();


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
