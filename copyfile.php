<?php 
	$source = "new1.txt";
	$destination = "new22.txt";

	if(copy($source, $destination))
	{
		echo "the file has been copy";
	}
	else
	{
		echo "failed to copy tthe file";
	}
?>