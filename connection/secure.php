<?php

function test_input($string)
	{
		return htmlentities(trim($string) , ENT_QUOTES , 'UTF-8');
	}
	
	?>