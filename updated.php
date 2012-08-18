<?php
// author: Ahmad Mushtaq <ahmad.mushtaq@gmail.com>
// github will call this file, when a commit is made to the namaz.me repository on github.
// read https://help.github.com/articles/post-receive-hooks for more info.

error_reporting(0); // no error reporting for this script.

$log_file="updated.log";
$json=$_POST['payload'];
$payload  = json_decode(stripslashes($json));
$github_ips = array('207.97.227.253', '50.57.128.197', '108.171.174.178');
$remoteIp = $_SERVER['REMOTE_ADDR'];

if (in_array($remoteIp, $github_ips) == false) {
	file_put_contents($log_file, "Your IP address is not authorized.\n");
    exit(0);
}

// if commit to the master branch, just call git pull.
if ($payload->ref == 'refs/heads/master') {
	file_put_contents( $log_file, "pulling to staging area.\n");
	system("git pull");
}
// if commit was to th branch production, go one directory up and then call git pull there.
else if ($payload->ref == 'refs/heads/production') {
	file_put_contents($log_file,"pulling to production area.\n");
	system("../production_pull.sh");
}
?>
