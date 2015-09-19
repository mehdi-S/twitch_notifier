<?php

function play_sound($sound_dir)
{
	$command = escapeshellcmd('./play.py '.$sound_dir);
	$output = shell_exec($command);
	echo $output;
}

function is_streaming($streamer, $sound)
{
	$file = './flag';
	$json = file_get_contents("https://api.twitch.tv/kraken/streams/".$streamer."/");
	$list = json_decode($json, true);
	#var_dump($list);
	if (isset($list['stream']) && $list['stream'] != NULL)
	{
		$link = $list['stream']['channel']['url'];
		$game = $list['stream']['channel']['game'];
		print "\n$streamer is actually streaming on ".$game.".\nurl : ".$link."\n";
		$current = file_get_contents($file);
		if (strcmp($current,"0") === 0)
		{
			play_sound($sound);
			file_put_contents($file, "1");
		}
		return true;
	}	
	else
	{
		print "\n$streamer is not streaming actually.\n";
		file_put_contents($file, "0");
		return false;
	}
}

if ($argc == 3)
{
		is_streaming($argv[1], $argv[2]);
}
else
{
	return -1;
}
?>
