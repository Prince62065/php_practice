<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploading</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
       <h4> Upload my file:</h4>
        <input type="file" name="fileUpload"><br>
        <input type="submit" name="submit" value="Upload File">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // echo '<pre>';
        // print_r($_FILES['fileUpload']);
        // echo '</pre>';
        if(isset($_POST["submit"])){
            $filename=$_FILES["fileUpload"]["name"];
        $filetype=$_FILES["fileUpload"]["type"];
        $filesize=$_FILES["fileUpload"]["size"];
        $filetmpname=$_FILES["fileUpload"]["tmp_name"];
        $fileerror=$_FILES["fileUpload"]["error"];
        $fileext=pathinfo($filename,PATHINFO_EXTENSION);
        // echo "My file name is ".$filename;
        // echo "<br>";
        // echo "My file type is ".$filetype;
        // echo "<br>";
        // echo "My file size is ".$filesize;
        // echo "<br>";
        // echo "My file tmp name is ".$filetmpname;
        // echo "<br>";
        // echo "My file error ".$fileerror;
        // echo "<br>";
        // echo "My file ext is ".$fileext;
        // echo "<br>";
        }
        // if(!is_dir("myuploads")){
        //     if(mkdir("myuploads",0777,true)){
        //         echo "Directory created successfully";
        //     }
        //     else{
        //         echo "Failed to created directory certificates";
        //     }
        // }

        // apply 3 conditions fileerp , file type and fileext and then only move the file to fthe dir

        if($fileerror==0)
        {
            if($filesize<1000000000){
                if($fileext=="pdf" || $fileext=="docx" || $fileext="doc"){
                    if(move_uploaded_file($filetmpname,"myuploads/".$filename)){
                        echo "File upload success";
                        echo "<br>";
                        print_r($_FILES["fileUpload"]);
                    }
                    else{
                        echo "File upload not success";
                        echo "<br>";
                    }
                }
                else{
                    echo "File extension doesnot support";
                    echo "<br>";
                }
               
            }
            else{
                echo "File size excced";
                echo "<br>";
            }
        }
        else{
            echo "Error is ".$fileerror;
            echo "<br>";
        }
        // if(move_uploaded_file($filetmpname,"myuploads/".$filename)){
        //     echo "File upload success";
        // }
        // else{
        //     echo "File upload not success";
        // }
        // if($filesize>10){
        //     echo "file size exceed the limit";
        // }

        // $allowedfiletype=["pdf"];
        // if(!in_array($fileext,$allowedfiletype)){
        //     echo "<br>File extension doesnot support";
        // }
        // else{
        //     echo "Your file type is supported";
        // }
    }
    ?>
</body>
</html>
