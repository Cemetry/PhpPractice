<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php


//echo readfile("abbreviation.txt");
//echo readfile("mypic.jpg");
$file = fopen("abbreviation.txt","r") or die("File not open");
echo fread($file,filesize("abbreviation.txt"));
fclose($file);

/*
$file1 = fopen("download.jpg","r") or die("File not found!");
echo fread($file,filesize("download.jpg"));
fclose($file1);

*/

$file2 = fopen("abbreviation.txt","r") or die("File can't open");

echo fgets($file2);
fclose($file2);


$file3 = fopen("abbreviation.txt","r") or die("File not open");


while(!feof($file3))
{
    echo fgets($file3)."<br>";
}
fclose($file3);




$file3 = fopen("abbreviation.txt","r") or die ("File not open");

while(!feof($file3))

{
    echo fgetc($file3);
}

fclose($file3);



$file4 = fopen("myfile.txt","w") or die("File not open");
$text = "I have created my first file";
fwrite($file4,$text);
fclose($file4);

$f = fopen("myfile.txt","r") or die("File not open");
while(!feof($f))
{
    echo fgets($f);
}

fclose($f);
echo "<br>";
echo "<br>";

$file5 = fopen("myfile2.txt","w") or die("File not created");
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
fwrite($file5,$text);

echo readfile("myfile2.txt");




?>

</body>
</html>
