<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electricity Bill Result</title>
</head>
<body>
    <h2 style="color:red"><b>Electricity Bill Result</b></h2>
   <b> <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $units_consumed = $_POST["units_consumed"];
  
        $first_slab = 3.50; 
        $second_slab = 4.50; 
        $total_bill = 0;
        
      
        if ($units_consumed <= 100) {
            $total_bill = $units_consumed * $first_slab;
            echo "<p>Units Consumed: " . $units_consumed . "</p>";
            echo "<p>Total Bill Amount: Rs" . number_format($total_bill, 2) . "</p>";
        } else {
            $total_bill = (100 * $first_slab) + (($units_consumed - 100) * $second_slab);
            echo "<p>Units Consumed: " . $units_consumed . "</p>";
            echo "<p>Total Bill Amount: Rs" . number_format($total_bill, 2) . "</p>";
        }
    }
    ?></b>
</body>
</html>