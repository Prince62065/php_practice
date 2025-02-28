<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="" method="POST">
        <label for="uname">Enter the username:</label>
        <input type="text" name="uname" placeholder="Enter the username"><br>
        <label for="fname">Enter Full name:</label>
        <input type="text" name="fname" placeholder="Enter the Full name"><br>
        <button type="submit" name="submitform">SUBMIT</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["submitform"])){
            $user=$_POST["uname"];
            $fname=$_POST["fname"];
            $fnameerror=" ";
            $nameerror=" ";
            if(empty($user)){
                $nameerror="User name can not be left blank";
                echo "<h4 style='color:red'>$nameerror</h4>";
            }
            else{
                if(!preg_match("/^[a-zA-Z0-9_]*$/",$user)){
                    $nameerror="User name is not valid ";
                    echo "<h4 style='color:red'>$nameerror</h4>";
                }
                else{
                    echo "The user name is $user";
                }
            }

            if(empty($fname)){
                $fnameerror="Full name can not be left blank";
                echo "<h4 style='color:red'>$fnameerror</h4>";
            }
            else{
                if(!preg_match("/^[a-zA-Z/s]*$/",$fname)){
                    $fnameerror="User name is not valid ";
                    echo "<h4 style='color:red'>$fnameerror</h4>";
                }
                else{
                    echo "The user name is $fname";
                }
            }
        }
        
    }

    ?>
</body>
</html>