<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Enter the value of number 
        <input type="number" name="num" >
        <input type="submit" value="submit" name="f">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["f"])){
            $num=$_POST["num"];

            function fab($num){
                $faba=[0,1];
                for($i=2;$i<$num;$i++){
                    $faba[$i]=$faba[$i-1]+$faba[$i-2];
                }
                return $faba;
            }
            $fab_arr=fab($num);
            $na=sizeof($fab_arr);
            $count=0;
            foreach($fab_arr as $n){
                if($count==$na-1){
                    echo $n;
                    break;
                }
                echo "$n ,";
                $count++;
            }
        }
    }
    ?>
</body>
</html>