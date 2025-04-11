<?php
$servername="localhost";
$username="root";
$password="";
$sql=mysqli_connect($servername,$username,$password,"php_db");
if($sql){
    echo "Successfully connected to database";
    echo "<br>";
}
else{
    die("Error: connecting database".mysqli_connect_error());
    echo "<br>";
}

// find the average price of items in the inventory
$query="SELECT AVG(price) as average_price from inventory";
$result_avg=mysqli_query($sql,$query);
$average_price=mysqli_fetch_assoc($result_avg)['average_price'];
echo "Average Price Rs. ".number_format($average_price,2);

// count number of item or number of tuple in the table
$query1="SELECT count(id) as number from inventory";
$result_count=mysqli_query($sql,$query1);
$count_item=mysqli_fetch_assoc($result_count)['number'];
echo "<br>Number of different items present in inventory are : ".$count_item;

// select sum of total quantity
$query2="SELECT sum(quantity) as quantity from inventory";
$result_quantity=mysqli_query($sql,$query2);
$quantity_item=mysqli_fetch_assoc($result_quantity)['quantity'];
echo "<br>Number of total product items present in inventory are : ".$quantity_item;

// select min price from table
$query3="SELECT min(price) as min_price from inventory";
$result_min=mysqli_query($sql,$query3);
$price_min=mysqli_fetch_assoc($result_min)['min_price'];
echo "<br>Min price of product from inventory is : ".number_format($price_min,2);

// convert into lowercase
$query4="SELECT LCASE(name) as lower_case from inventory";
$result_lcase=mysqli_query($sql,$query4);
echo "<br>Product Names in Lowercase:<br>";
while($row=mysqli_fetch_assoc($result_lcase)){
    echo $row['lower_case'];
    echo "<br>";
}

// convert name in uppercase
$query5="SELECT UCASE(name) as upper_case from inventory";
$result_ucase=mysqli_query($sql,$query5);
echo "<br>Product Names in Uppercase:<br>";
while($row1=mysqli_fetch_assoc($result_ucase)){
    echo $row1['upper_case'];
    echo "<br>";
}

// starting with p
$query6="SELECT * from inventory where name like 'l%'";
$result_start=mysqli_query($sql,$query6);
echo "<br>Product Names  start from l: <br>";
while($row2=mysqli_fetch_assoc($result_start)){
    echo $row2['name'];
    echo "<br>";
}

// ending with k
$query7="SELECT * from inventory where name like '%k'";
$result_end=mysqli_query($sql,$query7);
echo "<br>Product Names end with k: <br>";
while($row3=mysqli_fetch_assoc($result_end)){
    echo $row3['name'];
    echo "<br>";
}

// select the items whose quantity is greater than 20 or equal to 5.
$query8="SELECT * from inventory where quantity>20 or quantity=5";
$result_item1=mysqli_query($sql,$query8);
echo "<br>Product Name where quantity greater than 20 or quantity is equal  5: <br>";
while($row3=mysqli_fetch_assoc($result_item1)){
    echo $row3['name'].": ".$row3['quantity'];
    echo "<br>";
}


mysqli_close($sql);
?>