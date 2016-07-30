<?php
if($_POST)
{
$uploadDir = '.';

$uploadFile = $_FILES['userfile']['name'];

print"<pre>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadFile))
{

echo"File was successfully uploaded. Here;s some more info:<ul>\n";
echo"<li>file name: ". $uploadFile;
echo"<li>file size : ". filesize($uploadFile);
echo"<li>file type : ". filetype($uploadFile);
echo"</ul>";
}
else
{
echo" possible file upload attack Here\'s some info:\n";
}

print"<pre>";

}
else
{
?>

<form action="<?=$_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

<input type= "hidden" name="MAX_FILE_SIZE" value="100000" />
Choose a file to upload: <input name="userfile" type="file" />
<input type="submit" value="Upload File" />
</form>
<?php
}
?>