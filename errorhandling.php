<?php
if(file_exists("abc.txt")){
    // include("abc.txt");
    // try to read the contents fo the file
    $file=fopen("abc.txt","r");
    while(!feof($file)){
        echo fgets($file)."<br>";
    }
    fclose($file);
}
else{
    die("File doesnot exit");
}
?>