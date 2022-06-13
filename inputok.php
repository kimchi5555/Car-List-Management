<?php
include("./dbcon.php");
$carnum = $_POST["carnum"];
$name = $_POST["name"];
$type = $_POST["type"];
$Produce = $_POST["Produce"];

$sql = "INSERT INTO car (scarnum,sname,stype,sProduce) VALUES ('$carnum','$name', '$type','$Produce')";  

// echo $sql;   

if (mysqli_query($conn, $sql)) {
  echo "레코드가 저장되었습니다. 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

<div>
<a href="./input.php">자동차 정보 입력</a> 
<a href="./list.php">자동차 목록</a>
</div>


