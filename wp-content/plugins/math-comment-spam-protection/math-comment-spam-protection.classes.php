<?php

/*      ____________________________________________________
       |                                                    |
       |             		MathCheck                       |
       |                                                    |
       |            - a PHP class for web forms -           |
       |                                                    |
       |                © Michael Woehrer                   |
       |____________________________________________________|

    Author: Michael Woehrer <michael dot woehrer at gmail dot com>
	Author URI: http://sw-guide.de/
    Version: 2.0
    Copyright © 2006-2010, all rights reserved

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

*/

class MathCheck {

	/**
	 * GenerateValues
	 *
	 */
	function MathCheck_GenerateValues($input_numbers = '1~1, 2~2, 3~3, 4~4, 5~5, 6~6, 7~7, 8~8, 9~9, 10~10', $unique_key = 'LnfvpVZmsSCfLf0WxXN0') {

		// Get numbers in array
		$num_array = $this->MathCheck_Aux_NumberToArray($input_numbers);
		// Get random keys
		$rand_keys = array_rand($num_array, 2);

		// Operands for displaying...
		$resultArray = array(
			'operand1' => $num_array[$rand_keys[0]],
			'operand2' => $num_array[$rand_keys[1]],
			'result' => $this->MathCheck_Aux_GenerateHash($rand_keys[0] + $rand_keys[1], date('j'), $unique_key),
		);
		
		return $resultArray;
		
	}

	/**
	 * InputValidation
	 *
	 * Input validation. Returns an empty string if validation passed or an
	 * error string if not passed.	 
	 */
	function MathCheck_InputValidation($actualResult, $userEntered, $unique_key = 'LnfvpVZmsSCfLf0WxXN0') {

		$error = '';

		// Case 1: User has not entered an answer at all:
		if ($error == '' && $userEntered == '') {
			$error = 'No answer';
		}

		$userEntered = preg_replace('/[^0-9]/', '', $userEntered);	// Remove everything except numbers

		if ($error == '' && $actualResult != $this->MathCheck_Aux_GenerateHash($userEntered, date(j), $unique_key) ) {
			if ( ( date('G') <= 1 ) AND ( $actualResult == $this->MathCheck_Aux_GenerateHash($userEntered, (intval(date(j))-1), $unique_key ) )  ) {
				// User has just passed midnight while writing the comment. We consider
				// the time between 0:00 and 1:59 still as the day before to avoid
				// error messages if user visited page on 23:50 but pressed the "Submit Comment"
				// button on 0:15.
			} else {
				$error = 'Wrong answer';
			}
		}
		
		return $error;

	}


	/***
	 * MathCheck_Aux_NumberToArray
	 * 
	 * Converts the input string, e.g. "1~one, 2~two, 3~three, 4~four, ..."
	 * into an array, e.g.: Array([1] => one, [2] => two, [3] => three, ...)
	 */	 	 
	function MathCheck_Aux_NumberToArray($input) {
	
		$input = str_replace(' ', '', $input);	// Strip whitespace
		$sourcearray = explode(',', $input);	// Create array
	
		foreach ($sourcearray as $loopval) {
			$temparr = explode('~', $loopval);
			$targetarray[$temparr[0]] = $temparr[1];
		}
		return $targetarray;

	}


	/***
	 * MathCheck_Aux_GenerateHash
	 * 
	 * Generate hash
	 */	 	 

	function MathCheck_Aux_GenerateHash($inputstring, $day, $unique) {
	
		// If using WordPress: many people have defined a WP_SECRET sting in 
		// wp-config.php, so we add it if it exists 
		if ( defined('WP_SECRET') ) 
			$inputstring .= WP_SECRET;
	
		// Adds the file modification time of this file
		$inputstring .= filemtime(__FILE__);
	
		// Adds a unique value
		$inputstring .= $unique;

		// Add the IP address of the server under which the current script is executing.
		$inputstring .= getenv('SERVER_ADDR');
	
		// Add date
		$inputstring .= $day . date('ny');
	
		// Get MD5 and reverse it
		$enc = strrev(md5($inputstring));
	
		// Get only a few chars out of the string
		$enc = substr($enc, 28, 1) . substr($enc, 9, 1) . substr($enc, 21, 1) . substr($enc, 15, 1) . substr($enc, 7, 1);
			
		// Return result
		return $enc; 
	
	}


} 

?>