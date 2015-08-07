<?php

class JabatanController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $jabatan = DB::table('t_jabatan')->orderby('jabatan_id','asc')->get();

		return View::make('jabatan.jabatan')
                ->with('jabatan',$jabatan);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $active = array('' =>'--select--',
                        'Y' => 'Y',
                        'N' => 'N');

        return View::make('jabatan.add_jabatan')
                ->with('active',$active);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $nama_jabatan = Input::get('nama_jabatan');
        $active = Input::get('active');

        $rules = array('nama_jabatan' => 'required',
                        'active' => 'required');

        $validator = Validator::make(Input::all(),$rules);

        if($validator->fails())
        {
            return Redirect::to('/add/jabatan')
                    ->withErrors(Input::all())
                    ->withErrors($validator);
        }
        else{

        $save = new Jabatan();
        $save->nama_jabatan = $nama_jabatan;
        $save->active = $active;
        $save->save();

        return Redirect::to('/jabatan');
	}
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
	public function edit($jabatan_id)
	{

        $active = array('' =>'--select--',
                        'Y' => 'Y',
                        "N" => 'N');

        $edit = Jabatan::find($jabatan_id);

        return View::make('jabatan.edit_jabatan')
                ->with('edit',$edit)
                ->with('active',$active);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($jabatan_id)
	{

        $nama_jabatan = Input::get('nama_jabatan');
        $active = Input::get('active');

        $rules = array('nama_jabatan' => 'required',
                        'active' => 'required');

        $validator = Validator::make(Input::all(),$rules);

        if($validator->fails())
        {
            return Redirect::to('/jabatan/$jabatan_id/edit')
                    ->withErrors(Input::all())
                    ->withErrors($validator);
        }
        else{

        $save = Jabatan::find($jabatan_id);

        $save-> nama_jabatan = $nama_jabatan;
        $save-> active = $active;
        $save->save();

        return Redirect::to('/jabatan');
	}
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
