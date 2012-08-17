<?php
// author: Ahmad Mushtaq <ahmad.mushtaq@gmail.com>
// github will call this file, when a commit is made to the namaz.me repository on github.
// read https://help.github.com/articles/post-receive-hooks for more info.

// we dont care about the post payload we get from github.
echo system("git pull");
?>