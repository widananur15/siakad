<?php 
/**
 * CustomValidator.php
 *
 */
namespace Leaf\Validator;

use Leaf\Util\DateUtil;

/**
 * Custom validator for validation
 * 
 * @author Ali Irawan
 *
 */
class CustomValidator extends \Illuminate\Validation\Validator {
	
	/**
	 * Validate date format must in format YYYYMMDD
	 * @param unknown $attribute
	 * @param unknown $value
	 * @param unknown $parameters
	 * @return boolean
	 */
	public function validateValDate($attribute, $value, $parameters){
		
		if(strlen($value)!=8) return false;
		
		$result = date_parse_from_format("Ynj", $value);
		// print_r($result);
		
		if($result['error_count']==0) {
			return checkdate($result['month'], $result['day'], $result['year']);
		}

		return false;
	}

	/**
	 * Validate date format must in format YYYYMMDDHHmmss
	 * 
	 * @param unknown $attribute
	 * @param unknown $value
	 * @param unknown $parameters
	 * @return boolean
	 */
	public function validateValDateTime($attribute, $value, $parameters){
		$result = date_parse_from_format("YnjHis", $value);
		// print_r($result);
		if($result['error_count']==0) {
			return 
			    checkdate($result['month'], $result['day'], $result['year']) && 
			    $result['hour'] >= 0 && $result['hour'] <= 23 &&
				$result['minute'] >= 0 && $result['minute'] <= 59 &&
				$result['second'] >= 0 && $result['second'] <= 59;
		}
	
		return false;
	}
}