<?php
	$directory="imgw/";
	$files = scandir($directory);
	foreach($files as $fkey=>$fname){
	$oldName = $fname;
	$newName = strtolower($fname);
	rename("$directory/$oldName","$directory/$newName");
	}
		?>
