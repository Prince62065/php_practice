<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vowel count</title>
</head>
<body>
    <form method="POST" action="">
        <label for="strr">Enter any String: </label>
        <input type="text" name="str" placeholder="Enter String" required>
        <button type="submit" name="vowCount">Count Vowels</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]="POST"){
        if(isset($_POST["vowCount"])){
            $str=$_POST["str"];
            function countvow($str){
            $count=0;
            $vow=["a","e","i","o","u"];
            $strtolow=strtolower($str);
            for($i=0;$i<strlen($strtolow);$i++){
                if(in_array($strtolow[$i],$vow)){
                    $count++;
                }
            }
            if($count==0){
                echo "<h1>String doesnot contain any vowels</h1>";
            }
            else{
                echo "<h1>Number of vowels in string is : ".$count."</h1>";
            }
            }
            countvow($str);
        }
    }
    ?>
</body>
</html>