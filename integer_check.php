<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Integer</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="container">
    <form  method="POST">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label"
            >Enter an integer:</label
          >
          <input type="number" class="form-control" name="num" min=18  required />
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control" name="check"  value="CHECK IF IT IS  INTEGER" required />
          </div>
          </form>
        </div>

        <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

<?php
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST["check"])){
      $num= $_POST["num"];
      // if(filter_var($num,FILTER_VALIDATE_INT)!==FALSE){
      //   if($num>0){
      //     echo "<h1 style='color:green'> The num is int </h1>";
      //   }
      //   else if($num==0){
      //     echo "<h1 style='color:green'> The num is Zero </h1>";
      //   }
      //   else{
      //     echo "<h1 style='color:red'> The num is negative</h1>";
      //   }
      // }
      // else{
      //   echo "<h1 style='color:purple'>It is not integer</h1>";
      // }


      if($num>=18 ){
        echo "<h1 style='color:green'>You are eligible for voting</h1>";
      }
      else{
        echo "<h1 style='color:red'>You are not eligible for voting</h1>";
      }
    }
  }
?>
</body>
</html>