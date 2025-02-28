<?php
// verify the server request method 
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["calgrade"])){
$s1=$_POST["s1"];
$s2=$_POST["s2"];
$s3=$_POST["s3"];
$s4=$_POST["s4"];
$s5=$_POST["s5"];
$sum=($s1+$s2+$s3+$s4+$s5);
$total_mark=500;
$per=($sum/$total_mark)*100;
echo "The percentage is ".number_format($per,2);
echo "<br>";
if($per>=90 && $per<=100){
    echo "The Grade is O";
}
else if($per>=80 && $per<90){
    echo "The Grade is A";
}
else if($per>=70 && $per<80){
    echo "The Grade is B";
}
else if($per>=60 && $per<70){
    echo "The Grade is C";
}
else if($per>=50 && $per<60){
    echo "The Grade is D";
}
else{
    echo "The Grade is Fail";
}
    }
}
// echo $_SERVER["SERVER_NAME"];
// echo $_SERVER["PHP_SELF"];
// echo $_SERVER["REQUEST_METHOD"];

?>