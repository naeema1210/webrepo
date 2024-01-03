 <!DOCTYPE html>
<head>
     <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 50px;
        }
        th, td {
            border: 2px solid black;
            text-align: center;
            padding: 15px;
        }
        th {
            background-color: green;
        }
    </style>
</head>
<body>
<?php
$Players = array(
    "Sachin Tendulkar",
    "Ravindra Jadeja",
    "Suryakumar Yadav",
    "MS Dhoni",
    "Virat Kohli",
    "Shubman Gill",
    "Jaspreet Bumrah",
    "Rohit Sharma",
    "Shikhar Dhawan",
    "Hardik Pandya",
    );
?>
<table>
    <thead>
        <tr>
            <th><center>Indian Cricket Players</center></th>
        </tr>
    </thead>
    <tbody> 
        <?php
        foreach ($Players as $player) {
            echo "<tr><td>$player</td></tr>";
        }
        ?>
        </tbody>
  <thead>   
</table>
</body>
</html>