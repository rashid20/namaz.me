<?php
// author: Ahmad Mushtaq <ahmad.mushtaq@gmail.com>
// github will call this file, when a commit is made to the namaz.me repository on github.
// read https://help.github.com/articles/post-receive-hooks for more info.

$payload  = json_decode($_POST['payload']);
$github_ips = array('207.97.227.253', '50.57.128.197', '108.171.174.178');
$remoteIp = $_SERVER['REMOTE_ADDR'];

if (in_array($remoteIp, $github_ips) == false) {
	echo "Your IP address is not authorized.";
	exit(0);
}

// if commit to the master branch, just call git pull.
if ($payload->ref == 'refs/heads/master') {
	echo "pulling to statging area.";
	system("git pull");
}
else if ($payload->ref == 'refs/heads/production') {
// if commit was to th branch production, go one directory up and then call git pull there.
	echo "pulling to production area.";
}
?>