<?php
// author: Ahmad Mushtaq <ahmad.mushtaq@gmail.com>
// github will call this file, when a commit is made to the namaz.me repository on github.
// read https://help.github.com/articles/post-receive-hooks for more info.

$payload=$_POST["payload"];

// if commit to the master branch, just call git pull.
// if commit was to th branch production, go one directory up and then call git pull there.
system("git pull");
?>