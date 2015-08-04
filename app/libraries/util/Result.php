<?php 
/**
 * DateUtil.php
 *
 */
namespace Leaf\Util;

/**
 * Result class. Wrapper for result returned from REST service
 *
 * @author Ali Irawan
 * @since 3.0.0
 *
 */

class Result{
	
	/**
	 * Usage 
	 * 
	 * return Response::json(Result::ok( [ "someList" => array() ] ));
	 *  
	 * @param string $payload
	 * @return multitype:string
	 */
	public static function ok($payload = null){
		if($payload==null){
			return ["status" => "OK"];
		}
		return ["status"=>"OK","payload"=>$payload];
	}
	
	/**
	 * try {
	 * 	  ...
	 * }catch(Exception $ex){
	 *    return Response::json(Result::fail( $ex->getMessage() ));
	 * }
	 * 
	 * 
	 * @param string $message
	 * @return multitype:string |multitype:string multitype:string
	 */
	public static function fail($message = null){
		if($message==null){
			return ["status" => "FAIL"];
		}
		if(is_array($message)){
			return ["status"=>"FAIL","payload"=>['errors' => $message]];
		}
		
		return ["status"=>"FAIL","payload"=>['errors' => [$message] ]];
	}
}