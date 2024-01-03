 <?php
$student = array("Kinza", "Naeema", "Najma");
echo("The original array before sorting:");
print "<br>";
print_r($student);
print "<br>";
print "<br>";
echo("The array sorted in ascending order:");
print "<br>";
sort($student);
print_r($student);
print "<br>";
print "<br>";
echo("The array sorted in descending order:");
print "<br>";

arsort($student);
print_r($student);
print "<br>";

?>