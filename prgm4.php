<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electricity Bill Calculator</title>
</head>
<style>
#container{ 
width: 602px;
height: 400px;
margin: 8px auto;
border-radius:15px;
padding: 5px;
border: 5px solid black;
}
input[type="number"]{
  width:28%;
  height:20px;
  padding:2px 0px 2px 4px;
  border-radius:6px;
  background:#ecf0f1;
  border:2px solid rgba(0,0,0,1);
   color:black;
}
input[type="submit"]:hover{
  opacity:2;
  cursor:pointer;
background-color: blue;
}
</style>
<body>
<div id="container">
    <h2 style="color:blue"><b><center>Electricity Bill</b></center></h2><br><br>
<form action="bill.php" method="post">
        <b><label for="units_consumed">Enter Units Consumed:</label>
        <input type="number" id="units_consumed" name="units_consumed" required><br><br></b>
        <br>
      <input type="submit" value="Calculate">
    </form></div>

</body>
</html>