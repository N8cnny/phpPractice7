<?php

if (!file_exists("count.txt"))
{
$count=1;

echo "This page has $count hits.";

$handle = fopen("count.txt", "wb");

fwrite($handle, $count);

fclose($handle);
}
else
{
$handle= fopen("count.txt", "rb");
$count= fread($handle, filesize("count.txt"));

fclose($handle);

$count++;

echo "The page has $count hits.";

$handle= fopen("count.txt","wb");

fwrite($handle, $count);

fclose($handle);
}
?>