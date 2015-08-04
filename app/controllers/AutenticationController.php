<?php

class AutenticationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


    /**
     * @author: Widana Nur Azis
     */

    public function autentication(){

        $userlogin = Input::get('userlogin');
        $password = Input::get('password');

        $user = Login::where('username','=', $userlogin)->orWhere('email','=', $userlogin)->first();


        if($user !=null){
            $password_hash = $user->password;


                if(password_verify($password , $password_hash)){



                } else {

                    //here password not alerdy exist
                    return Redirect::to('/')
                        ->with('message' , 'invalid username or password');


                }
                } else {

                    //password is not there
                    return Redirect::to('/')
                        ->with('message' , 'invalid username or password');


            }

            Session::put('userlogin',$user);

            //update key session_id
            $get_user_id = Session::get('userlogin');

            $update_session_id = Login::find($get_user_id->user_id);
            $update_session_id->session_id = md5(time());
            $update_session_id->save();

            return Redirect::to('/dashboard');

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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


    /**
     *@author: Widana Nur Azis
     */

    public function logout(){

        $get_user_id = Session::get('userlogin');
        $get_user_id->session_id = '0';
        $get_user_id->save();

        Session::flush();
        return Redirect::to('/')
            ->with('logout' , 'You have successfully terminated the session.');

    }


}
