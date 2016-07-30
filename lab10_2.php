<?php
if($_POST)
{
$message=$_POST["message"];

if (file_exists("apple.txt"))
{
$newname = "apple" . date('MdY-His') . ".txt";
copy("apple.txt", $newname);
include("apple.txt");
}

$handle= fopen("apple.txt", "ab");

if (filesize("apple.txt") >0)
{
$message= fread($handle, filesize("apple.txt")) . $message . "\n";
}

$wrt = fwrite($handle, $message);

fclose($handle);

echo"<hr>The file has been changed to: <br>";
include("apple.txt");
}
else
{
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
Write a sentence: <input type="text" name="message" size=90>
<br>
<input type="submit" value="Submit">
</form>
<?php
}
?>