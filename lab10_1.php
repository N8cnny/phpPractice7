<?php
if($_POST)
{
$message=$_POST["message"];
$handle= fopen("apple.txt", "wb");
$wrt= fwrite($handle, $message);
fclose($handle);
echo"Thefile has been changed to: <hr>";
include("apple.txt");
}
else
{
?>

<form action=""<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Write a sentence: <input type="text" name="message" size=90>
<br>
<input type="submit" value"=Submit">
</form>

<?php
}
?>