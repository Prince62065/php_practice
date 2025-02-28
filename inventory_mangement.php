<?php
$inventory=[
    "zen"=>["quantity"=>10,"price"=>20000],
    "maruti"=>["quantity"=>15,"price"=>250000],
    "TATA"=>["quantity"=>5,"price"=>50000]
];

function printinventory($inventory){
    echo "<table border='2px' width='95px' height='85' style='border-collapse:collapse'>";
    foreach($inventory as $item=>$details){
        echo "<tr>";
        echo "<th><li>$item</th><td>: Quantity = {$details['quantity']}</td><td>,Price={$details['price']}</li></td>";
        echo "</tr>";
        echo "<br>";
    }
    echo "<table>";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $action=$_POST["action"]??null;
    $itemname=isset($_POST["item"])?$_POST["item"]:null;
    $quantity=isset($_POST["quantity"])?$_POST["quantity"]:null;
    $price=isset($_POST["price"])?$_POST["price"]:null;
    switch($action){
        case "add":
            $inventory[$itemname]=['quantity'=>$quantity,'price'=>$price];
            break;
        case "update":
            if(isset($inventory[$itemname])){
                $inventory[$itemname]['quantity']=$quantity;
            }
            else{
                echo "<h3>Item not found.</h3>";
            }
            break;
        case "delete":
            if(isset($inventory[$itemname])){
                unset($inventory[$itemname]);
            }
            else{
                "<h3>Item not found.</h3>";
            }
            break;
        case "total":
            $totalValue=0;
            foreach($inventory as $details){
                $totalValue+=$details['quantity']*$details['price'];
            }
            echo "Total Inventory Value: ".$totalValue;
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory management</title>
</head>
<body>
    <h1>INVENTORY MANAGEMENT</h1>
    <form action="" method="POST">
        <h4>ADDING ITEM</h4>
        <input type="text" name="item" placeholder="Item Name">
        <input type="number" name="quantity" placeholder="Item Quantity">
        <input type="number" name="price" placeholder="Item price" min="1">  
        <input type="hidden" name="action" value="add">
        <input type="submit" name="additem" value="ADD MY ITEM">
    </form>
    <form action="" method="POST">
        <h4>UPDATING ITEM</h4>
        <input type="text" name="item" placeholder="Item Name">
        <input type="number" name="quantity" placeholder="Item Quantity">
        <input type="number" name="price" placeholder="Item price" min="1">
        <input type="hidden" name="action" value="update">
        <input type="submit" name="updateitem" value="UPDATE MY ITEM">
    </form>
    <form action="" method="POST">
        <h4>DELETING ITEM</h4>
        <input type="text" name="item" placeholder="Item Name">
        <input type="hidden" name="action" value="delete">
        <input type="submit" name="deleteitem" value="DELETE MY ITEM">
    </form>
    <form action="" method="POST">
    <input type="hidden" name="action" value="total">
    <input type="submit" name="total" value="Total">
    </form>
    <?php
    echo printinventory($inventory);
    ?>
</body>
</html>