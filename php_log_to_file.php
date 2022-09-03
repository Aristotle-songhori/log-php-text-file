<?php

die("This text (test-text) + date + /n right to Personal_Log_User.txt");

//send string to log to file
logTextPersonal("this text");


/**Important
 * you shod create this file "Personal_Log_User.txt" in folder
 */
function logTextPersonal( $str)
{

    //control if file not exists
	if(!file_exists("Personal_Log_User.txt")) {
				die("File not found");
	  } else {
						
				//you shod create this file folder
				$file = 'Personal_Log_User.txt';

				// Open the file to get existing content
				$current = file_get_contents($file);

				//date 
				$date = date('Y/m/d H:i:s');

				// Append a new str to the file
				$current .= $date." -> ".$str."\n";

				// Write the contents back to the file
				file_put_contents($file, $current);
	  		}

}

?>