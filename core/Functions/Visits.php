<?php

namespace Core\Functions;

class Visits
{
	
	static function visits_count()
	{
		$ip = fopen('last_ip.txt', 'c+');
		$check = fgets($ip);
		
		$file = fopen('visits.txt', 'c+');
		$count = intval(fgets($file));
		
		if ($_SERVER['REMOTE_ADDR'] != $check) {
			fclose($ip);
			$ip = fopen('last_ip.txt', 'w+');
			fputs($ip, $_SERVER['REMOTE_ADDR']);
			$count++;
			fseek($file, 0);
			fputs($file, $count);
		}
		fclose($file);
		fclose($ip);
		
		if ($count < 10) {
			return "<span>0</span>" . "<span>0</span>" . "<span>0</span>" . "<span>0</span>" . "<span>$count</span>";
		} elseif ($count >= 10 && $count < 100) {
			return "<span>0</span>" . "<span>0</span>" . "<span>0</span>" . "<span>$count</span>";
		} elseif ($count >= 100 && $count < 1000) {
			return "<span>0</span>" . "<span>0</span>" . "<span>$count</span>";
		} elseif ($count >= 1000) {
			return "<span>0</span>" . "<span>$count</span>";
		}
		
	}
	
}