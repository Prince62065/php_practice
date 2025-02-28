<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Factorial finder</h1>
    <form action="" method="POST">Enter the number:
        <input type="number" name="num" placeholder="Enter the num"><br>
        <input type="submit" name="fact" value="CLICK TO FIND THE FACTORIAL">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["fact"])){
            $num=intval($_POST["num"]);
            function fact($num){
                if($num<0){
                    return "Error: Factorial of negative number doesn't exist.";
                }
                if($num==0 || $num==1){
                    return 1;
                }
                return $num*fact($num-1);
            }
            echo "The factorial of $num is ".fact($num);
        }
    }
    ?>
</body>
</html>