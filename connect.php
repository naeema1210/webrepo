<?php


// Create connection

$conn = mysqli_connect("localhost","root","","college");

// Check connection

if (!$conn) {

die("Connection failed: " . mysqli_connect_error());

}

echo "Connected successfully";
echo "<br>";

$sql = "INSERT INTO student(rollno,name,age, cid)

VALUES (22, 'akhaya',21,'101')";

if (mysqli_query($conn, $sql)) {

echo "New record created successfully";
echo "<br>";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}



$sql = "SELECT rollno,name,age,cid FROM student";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

// output data of each row

while($row = mysqli_fetch_assoc($result)) {

echo "rollno: ". $row["rollno"]."   ". " Name: " . $row["name"]."   "."age:" . $row["age"]."   "."courseid:" .$row["cid"].
"<br>";

}

} else {

echo "No records found";

}

mysqli_close($conn);

?>