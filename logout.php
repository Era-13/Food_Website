<?php
session_start();
session_destroy();
echo "You've been logged out. <a href = 'frontadmin.php'>Click Here</a> to return.";
?>