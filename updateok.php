<?php
include("./dbcon.php");

$num = $_POST["snum"];
$carnum = $_POST["scarnum"];
$name = $_POST["sname"]; 
$type = $_POST["stype"];
$Produce = $_POST["sProduce"];

$sql = "UPDATE car SET snum='$num', scarnum='$carnum', sname='$name',stype='$type',sProduce='$Produce' WHERE snum='$num'";

if (mysqli_query($conn, $sql)) {
  echo "정보가 수정되었습니다.";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<div>
<a href="./input.php">자동차 이름 입력</a> 
<a href="./list.php">자동차 목록</a>
</div>

