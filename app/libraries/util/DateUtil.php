<?php
/**
 * DateUtil.php
 *
 */
namespace Leaf\Util;

/**
 * Date util class
 * 
 * @author Ali Irawan
 * @since 3.0.0
 * 
 */

class DateUtil {
	
	/**
	 * Get current date in format: YYYYMMDD
	 * @return string current date
	 */
	public static function dateNow(){
		return date("Ymd",time());
	}
	
	/**
	 * Get current date time in format: YYYYMMDDHHmmss
	 * @return string current date time
	 */
	public static function dateTimeNow(){
		return date("YmdHis",time());
	}
	
	/**
	 * Parse date to time
	 * 
	 * @param unknown $datestring date string to be parsed
	 * @param string $format format specified, see date() function manual
	 */
	public static function date2time($datestring, $format = "d/m/Y"){
		$array = date_parse_from_format($format, $datestring);
		return mktime(0,0,0,$array['month'], $array['day'], $array['year']);
	}
	
	/**
	 * Parse date to date string
	 *
	 * @param unknown $datestring date string to be parsed
	 * @param string $format format specified, see date() function manual
	 * 
	 * @return will return date in string format YYYYMMDD
	 */
	public static function date2string($datestring, $format = "d/m/Y"){
		return date("Ymd", DateUtil::date2time($datestring, $format));
	}
	
}