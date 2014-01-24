<?php
	error_reporting(0);

	$file = "";

	$icon_mumble = "icons/mumble.png";
	$icon_channel = "icons/channel.png";
	$icon_user_on = "icons/user_on.png";
	$icon_user_off = "icons/user_off.png";

	$mumble_feed = json_decode(file_get_contents($file), true);

	echo "<img src=\"".$icon_mumble."\" /><span style=\"font-weight: bold;\">&nbsp;".$mumble_feed["name"]."</span><br />";

	echo "<div style=\"padding-left: 25px;\">";

	$channels = $mumble_feed["root"]["channels"];
	displayChannels($channels);

	echo "</div>";

	function displayChannels($channels)
	{
		global $icon_channel, $icon_user_on, $icon_user_off;

		foreach ($channels as $channel)
		{
			echo "<img src=\"".$icon_channel."\" />&nbsp;<a href=\"".$channel["x_connecturl"]."\">".$channel["name"]."</a><br />";

			echo "<div style=\"padding-left: 25px;\">";

			$subchannels = $channel["channels"];
			if (sizeof($subchannels) > 0)
			{
				displayChannels($subchannels);
			}

			$users = $channel["users"];
			usort($users, "compareByName");
			foreach($users as $user)
			{
				$icon_user = ($user["bytespersec"] == 0 ? $icon_user_off : $icon_user_on);

				echo "<span title=\"",$user["name"]."\"><img src=\"".$icon_user."\" />&nbsp;".substr($user["name"], 0, 20);
				if (strlen($user["name"]) > 20)
				{
					echo "...";
				}
				echo "</span><br />";
			}

			echo "</div>";
		}
	}

	function compareByName($user1, $user2)
	{
		return strcasecmp($user1["name"], $user2["name"]);
	}
?>