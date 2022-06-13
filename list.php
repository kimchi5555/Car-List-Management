<?php
    include("./dbcon.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자동차 목록</title>
</head>
<body>
<?php
$sql = "SELECT * FROM car";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $num = $row["snum"]; 
  ?>
<div>
  
  <a href="./delete.php?no=<?php echo $num;?>">삭제</a>

  <?php  
    echo " 차량번호: " . $row["scarnum"]. " - 차량명: " . $row["sname"]. "- 차종 :" . $row["stype"]."- 제조사 :" . $row["sProduce"];
  ?> 
  
  <a href="./update.php?no=<?php echo $num;?>">수정</a>
  
</div>
  <?php
  }
} else {
  echo "0 results";
}
mysqli_close($conn);
?>
<div>
<a href="./input.php">자동차 정보 입력</a>
</div>


</body>
</html>