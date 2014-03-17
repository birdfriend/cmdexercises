<?php

$start = time();
while ($end = time())
{
	if (($end - $start) >= 2)
	{
		echo ".";
		$start = $end;
	}
}
