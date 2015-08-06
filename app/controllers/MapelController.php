<?php

class MapelController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $mapel = DB::table('t_mapel')->orderby('mapel_id','asc')->get();

        return View::make('mapel.mapel')
                ->with('mapel',$mapel);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $active= array(''=>'--select--',
                        'Y' => 'Y',
                        'N' =>'N');

		return View::make('mapel.add_mapel')
                ->with('active',$active);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nama_mapel = Input::get('nama_mapel');
        $active = Input::get('active');

        $save = new Mapel();
        $save->nama_mapel = $nama_mapel;
        $save->active = $active;
        $save->save();

        return Redirect::to('mapel');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{


	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($mapel_id)
	{

        $mapel = Mapel::find($mapel_id);


        $active = array('' =>'--Select--',
                        'Y' =>'Y',
                        'N' => 'N');

        $edit = Mapel::find($mapel_id);


        return View::make('mapel.edit_mapel')
                ->with('edit',$edit)
                ->with('active',$active)
                ->with('mapel',$mapel);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($mapel_id)
	{

        $nama_mapel = Input::get('nama_mapel');
        $active = Input::get('active');

        $update = Mapel::find($mapel_id);

        $update -> nama_mapel = $nama_mapel;
        $update -> active = $active;
        $update -> save();

        return Redirect::to('/mapel');
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
