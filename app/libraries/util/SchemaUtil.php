<?php
/**
 * SchemaUtil.php
 *
 */
namespace Leaf\Util;

/**
 * Helper class for creating schema.
 * 
 * @author Ali Irawan
 *
 */

class SchemaUtil {
	
	/**
	 * Prepare field for master table
	 * 
	 * Fields: active, active_datetime, non_active_datetime
	 * 
	 * @param unknown $table
	 */
	public static function master($table){
		$table->string('active', 1)->default('Y');
		$table->string('active_datetime', 14);
		$table->string('non_active_datetime', 14);
	}
	
	/**
	 * Prepare field for auditing
	 * 
	 * Fields: create_user_id, update_user_id, create_datetime, update_datetime, version
	 *
	 * @param unknown $table
	 */
	public static function audit($table){
		$table->bigInteger("create_user_id");
		$table->bigInteger("update_user_id");
		$table->string('create_datetime', 14);
		$table->string('update_datetime', 14);
		$table->bigInteger("version")->default(0);
	}
	
	/**
	 * Fill in audit when create
	 * 
	 * Example:
	 * 
	 * <code>
	 *     $obj = new MyModel();
	 * 
	 *     SchemaUtil::auditCreate($obj, DateUtil::dateTimeNow());
	 *     
	 * </code>
	 * 
	 * @param unknown $object
	 * @param unknown $datetime
	 */
	
	public static function auditCreate($object, $datetime, $user_id = -1){
		
	
		
		$object->create_datetime = $datetime;
	    $object->update_datetime = $datetime;
	    $object->create_user_id = \Session::get("loggeduser")->user_id;
	    $object->update_user_id = \Session::get("loggeduser")->user_id;
	    $object->version = 0;
	}
	
	/**
	 * Fill in audit when update
     *
	 * Example:
	 * 
	 * <code>
	 * 
	 * 	   $obj = MyModel::where('id','=',$id)->first();
	 *     if($obj){
	 *     	  SchemaUtil::auditUpdate($obj, DateUtil::dateTimeNow());
	 *     } else {
	 *        ...
	 *     }
	 * </code>
	 *
	 * @param unknown $object
	 * @param unknown $datetime
	 */
	public static function auditUpdate($object, $datetime, $user_id = -1){
		$object->update_datetime = $datetime;
		$object->update_user_id = $user_id;
		$object->version = $object->version + 1;
	}
	
	/**
	 * Set active to Y
	 * 
	 * @param unknown $object
	 * @param unknown $datetime
	 */
	public static function activate($object, $datetime){
		$object->active = 'Y';
		$object->active_datetime = $datetime;
		$object->non_active_datetime = ' ';
	}

	public static function setActiveStatus( $object, $active, $datetime ){
		$object->active = $active;
		
		if ( $active === 'Y' ) {
			$object->active_datetime = $datetime;
			$object->non_active_datetime = ' ';		
		} else {
			$object->non_active_datetime = $datetime;		
		}
		
	}
}