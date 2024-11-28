<?php 
	$file = 'E:/new22.txt';

	if(unlink($file))
	{
		echo "the file has been deleted successfully";
	}
	else
	{
		echo "failed to delete the file";
	}
?>