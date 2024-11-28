<?php 
	$source = "new1.txt";
	$destination = "E:/new22.txt";

	if(rename($source, $destination))
	{
		echo "the file has been removed successfully";
	}
	else
	{
		echo "the file does not remove";
	}
?>