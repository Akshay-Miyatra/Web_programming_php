<?php 
	$file = "new1.txt";

	if(file_exists($file))
	{
		echo "the file $file exists";
	}
	else
	{
		echo "file does not exists";
	}
?>