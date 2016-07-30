<?php

$str="lab10_1.php";

if(is_readable($str))
{
echo "$str is readable<bR>";
}

if(is_writable($str))
{
echo" $str is writable<bR>";
}

if(is_executable($str))
{
echo"$str is executable<br>";
}

if(is_file($str))
{
echo" $str is a file<br>";
}

if(is_dir("c:\windows"))
{
echo" Windows is a directory<br>";
}

clearstatcache();

$filename= "apple.txt";

if (file_exists($filename))
{
echo "the $filename file exists<br>";
}

else
{
echo "the $filename does not exist<br>";
}

$dirname= "test";

if (file_exists($dirname))
{
echo " The $dirname directory exists<br>";
}
else
{
echo "The $dirname does not exist<br>";
}
?>