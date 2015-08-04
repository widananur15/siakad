<?php 
/**
 * ConcurrencyException.php
 */
/**
 * ConcurrencyException happen when version is not match 
 * 
 * @author Ali Irawan
 *
 */
class ConcurrencyException extends Exception {
	
	
	// Redefine the exception so message isn't optional
	/**
	 * Default constructor
	 * 	
	 * @param string $message
	 * @param number $code
	 * @param Exception $previous
	 */
	public function __construct($message = null, $code = 0, Exception $previous = null) {
		// some code
	
		// make sure everything is assigned properly
		parent::__construct('Concurrency error, data is not updated.', $code, $previous);
	}
}